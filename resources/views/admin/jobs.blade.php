@extends('layouts.admin')
@section('content')

<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">List of Jobs

                                <a href="/admin/createJob" class="btn btn-primary btn-xs  "
                                style="float: right"
                                > <i
                                        class="fa fa-plus-circle fw-fa"></i> Add
                                    application</a>
                            </h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <form action="controller.php?action=delete" method="POST">
                        <div class="table-responsive">
                            <div id="dash-table_wrapper" class="dataTables_wrapper no-footer">

                                <table id="dash-table"
                                    class="table table-striped table-bordered table-hover dataTable no-footer"
                                    style="font-size:12px" cellspacing="0" role="grid"
                                    aria-describedby="dash-table_info">

                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Company Name: activate to sort column descending"
                                                style="width: 49.6667px;">Company Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1"
                                                aria-label="Occupation Title: activate to sort column ascending"
                                                style="width: 60.6667px;">Occupation Title</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1"
                                                aria-label="Require no. of Employees: activate to sort column ascending"
                                                style="width: 57.6667px;">Require no. of Employees</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1" aria-label="Salaries: activate to sort column ascending"
                                                style="width: 42.6667px;">Salaries</th>
                                          
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1"
                                                aria-label="Qualification/Work experience: activate to sort column ascending"
                                                style="width: 100.667px;">category</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1"
                                                aria-label="Qualification/Work experience: activate to sort column ascending"
                                                style="width: 100.667px;">Expereince required</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1"
                                                aria-label="Job Description: activate to sort column ascending"
                                                style="width: 60.6667px;">Job Description</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1" aria-label="Prefered Sex: activate to sort column ascending"
                                                style="width: 48.6667px;">Prefered Sex</th>
                                          
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1" aria-label="Job Status: activate to sort column ascending"
                                                style="width: 33.6667px;">Job type</th>
                                            <th width="10%" align="center" class="sorting" tabindex="0"
                                                aria-controls="dash-table" rowspan="1" colspan="1"
                                                aria-label="Action: activate to sort column ascending"
                                                style="width: 33.6667px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobs as $job)
                                        <tr role="row" class="odd">
                                            <td>{{$job->company->name}}</td>
                                            <td>{{$job->title}}</td>
                                            <td>{{$job->no_of_seats}}</td>
                                            <td>{{$job->salary}}</td>
                                            <td>{{$job->category->name}}</td>
                                            <td>{{$job->experice_required}}</td>
                                            <td>{{Str::limit($job->job_description,50)}}</td>
                                            <td>{{$job->prefered_gender}}</td>
                                            <td>{{$job->job_type}}</td>
                                            {{-- <td>{{$application->status}}</td> --}}
                                            <td align="center">
                                                <a title="Delete" href="/applyJob?id=90"
                                                    class="btn btn-info btn-xs  "> <span
                                                        class="fa  fa-pencil "></span>View Job </a>
                                                <a title="Delete" href="/job/{{$job->id}}"
                                                    class="btn btn-danger btn-xs  "> <span
                                                        class="fa  fa-trash-o fw-fa "></span></a>
                                              
                                                
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>

                                </table>

                            </div>
                            <div class="btn-group">
                                <!--  <a href="index.php?view=add" class="btn btn-default">New</a> -->
                            </div>




                            <div class="table-responsive">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection