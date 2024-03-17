@extends('layouts.admin')
@section('content')

<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Create a Job

                            </h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <form action="/admin/savejob" method="POST">
                       
                                <label for="">
                                    Title
                                </label>
                                <input type="text" name="title" class="form-control">




                                <label for="">
                                    Description
                                </label>
                                <textarea name="job_description" id="" cols="30" rows="10"
                                class="form-control"
                                ></textarea>

                                <label for="">
                                    Category
                                </label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="" disabled selected>Select a category</option>
                                    @foreach (\App\Models\category::all() as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                
                                <label for="">
                                    Job Type
                                </label>
                                <select name="job_type" id="" class="form-control">
                                    <option value="" disabled selected>Select a job type</option>
                                    <option value="Permanent">Permanent</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Contract Base">Contract Base</option>
                                </select>



                                <label for="">
                                    No of Seats
                                </label>
                                <input type="text" name="no_of_seats" class="form-control">




                                <label for="">
                                    Salary
                                </label>
                                <input type="text" name="salary" class="form-control">




                                <label for="">
                                    Prefered Gender
                                </label>
                                <input type="text" name="prefered_gender" class="form-control">




                                <label for="">
                                Experice Required
                                </label>
                                <input type="text" name="experice_required" class="form-control">
                            



@csrf






                            <div class="btn-group mt-3">
<button type="submit" class="btn btn-success">Submit</button>
                            </div>




                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection