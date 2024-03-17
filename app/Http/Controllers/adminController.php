<?php

namespace App\Http\Controllers;

use App\Models\job;
use App\Models\User;
use App\Models\company;
use App\Models\category;
use PHPUnit\Metadata\Uses;
use App\Models\application;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class adminController extends Controller
{
    public function profile(){
        return view('admin.profile');
    }
   
    
    public function updateProfile(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore(auth()->user()->id),
            ],
            'password' => 'nullable|string|min:8',
        ]);
    
        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $user = Auth::user();
        $data=$request->except('_token');
        if($data['password']){
            $data['password']=Hash::make($data['password']);
        }
      $user->update($data);
    
     
        // Return updated user data
        return redirect()->back();
    }
    
    public function company(){
        $companies=null;
        if(Auth::user()->hasRole('employer')){
            $companies=company::where('user_id',Auth::id())->get();
        }else{
             $companies=company::latest()->get();
        }
    
        return view('admin.company',compact('companies'));
    }
    public function deletecompany(company $company){
     $company->delete();
     return redirect()->back()->with('success','Record has been deleted successfully');
    }

    public function roleuserlist($role){
      $users=User::role($role)->get();
        return view('admin.employee',compact('users'));
    }
    public function users(){
      $users=User::latest()->get();
        return view('admin.employee',compact('users'));
    }
    public function deleteemployee(User $user){
     $user->delete();
     return redirect()->back()->with('success','Record has been deleted successfully');
    }
    public function deletejob(job $job){
     $job->delete();
     return redirect()->back()->with('success','Record has been deleted successfully');
    }
    public function deletecategory(category $category){
     $category->delete();
     return redirect()->back()->with('success','Record has been deleted successfully');
    }
    public function applicants(){
        if(Auth::user()->hasRole('employer')){
            $userid=Auth::id();
            $applications=application::whereHas('job',function($q) use ($userid){
                return $q->where('employer_id',Auth::id());
            })->get();
        }else if(Auth::user()->hasRole('user')){
            $applications=application::where('user_id',Auth::id())->latest()->get();

        }
        else{
            $applications=application::latest()->get();

        }
       
        return view('admin.applications',compact('applications'));
    }
    public function vacancy(){
        if(Auth::user()->hasRole('employer')){
        $jobs=job::where('employer_id',Auth::id())->get();
        }else{
            $jobs=job::latest()->get();

        }
        return view('admin.jobs',compact('jobs'));
    }
    public function savejob(Request $request){
        $data= $request->all();
        $user=Auth::user();
        $data['employer_id']=$user->id;
        $data['company_id']=$user?->company?->id;
        job::create($data);
        return redirect('/admin/vacancy');
    }

    public function createJob(){
        return view('admin.createJob');
    }

    public function category(){
        $categories=category::latest()->get();
        return view('admin.categories',compact('categories'));
    }
    public function applicantsStatus(application $application,$status){
        $application->status=$status;
        $application->save();
        return redirect()->back()->with('success','Record has been deleted successfully');
    }
}
