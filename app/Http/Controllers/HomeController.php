<?php

namespace App\Http\Controllers;

use App\Models\job;
use App\Models\company;
use App\Models\category;
use App\Models\application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
        $categories =category::withCount('jobs')->get();
        $jobs =job::latest()->paginate(10);
        $companies =company::latest()->get();
        return view('index', compact('categories', 'jobs','companies'));
    }
    public function joblisting(Request $request){
        $jobs = Job::query();
        $param = $request->all();
    
        if ($request->s) {
            $jobs->where('title', 'like', '%' . $request->s . '%');
        }
    
        if ($request->category) {
            $jobs->where('category_id', $request->category);
        }
    
        if ($request->company) {
            $jobs->where('company_id', $request->company);
        }
    
        // Execute the pagination and get the results
        $jobs = $jobs->latest()->paginate(10);
    
        return view('pages.joblisting', compact( 'jobs'));
    }
    public function applyJob(Request $request){
        $id=$request->id;
        $job=Job::find($id);
        return view('pages.applyJob',compact('job'));
    }
    public function company(){
       
        $companies =company::withCount('jobs')->get();
        return view('pages.company', compact('companies'));
    }
    public function submitapplication(Request $request,job $job){
        // Validation rules for the form fields
        $rules = [
            'name' => 'required|string|max:255',
            'ADDRESS' => 'required|string',
            'gender' => 'required|in:Female,Male',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string',
            'phone_of_birth' => 'required|string',
            'martial_status' => 'required|in:Single,Married,Widow',
            'email' => 'required|email|max:255',
            'username' => 'required|string|max:255',
            'password' => 'sometimes|required|string|min:8', // Add 'sometimes' to make it optional
            'last_degree' => 'required|string',
            'resume_file' => 'required|file|mimes:pdf,doc,docx', // Adjust file types and size as needed
        ];

        // Validate the request data
        $request->validate($rules);
        
        $data=$request->all();
        if(isset($data['password']) && $data['password'] != null){
            $data['password']=Hash::make($data['password']);
        }
        $resume_file = $request->file('resume_file')->store('cv', 'public');
        $resume_file = str_replace('public/', '', $resume_file);
        $user = User::updateOrCreate(
            ['email' => $request->email],
            $data
        );
       
        
        if (!Auth::check()) {
            $user->assignRole('user');
            Auth::login($user);
        }




        $jobapplication=application::create([
            'job_id'=>$request->job_id,
            'user_id'=>$user->id,
            'resume_file'=>$resume_file
        ]);
        return redirect('/admin/applicants');

    }
}
