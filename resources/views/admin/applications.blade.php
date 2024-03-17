@extends('layouts.admin')
@section('content')

<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">List of Applications
                                {{-- <a href="index.php?view=add" class="btn btn-primary btn-xs  "> <i
                                        class="fa fa-plus-circle fw-fa"></i> Add
                                    application</a??"--"> --}}
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
                                                aria-label="Applicant: activate to sort column descending"
                                                style="width: 116px;">Applicant</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1" aria-label="Job Title: activate to sort column ascending"
                                                style="width: 108px;">Job Title</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1" aria-label="Company: activate to sort column ascending"
                                                style="width: 115px;">Company</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1" aria-label="Applied Date: activate to sort column ascending"
                                                style="width: 145px;">Resume</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1" aria-label="Applied Date: activate to sort column ascending"
                                                style="width: 145px;">Applied Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1" aria-label="Remarks: activate to sort column ascending"
                                                style="width: 109px;">Remarks</th>
                                            <th width="14%" class="sorting" tabindex="0" aria-controls="dash-table"
                                                rowspan="1" colspan="1"
                                                aria-label="Action: activate to sort column ascending"
                                                style="width: 90px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applications as $application)
                                        <tr role="row" class="odd">
                                            <td>{{$application?->user?->name}}</td>
                                            <td>{{$application->job->title}}</td>
                                            <td>{{$application->job->company->name}}</td>
                                            <td>
                                                <a href="{{url('storage/'.$application->resume_file)}}">Resume</a></td>
                                            <td>{{$application->created_at->diffForHumans()}}</td>
                                            <td>{{$application->status}}</td>
                                            <td align="center">
                                                @role(['admin','employer'])
                                                {{-- <a title="Edit" href="index.php?view=edit&amp;id=3"
                                                    class="btn btn-primary btn-xs  "> <span
                                                        class="fa fa-edit fw-fa"></span></a> --}}
                                                @if($application->status=='pending')
                                                <a title="Delete" href="/application/{{$application->id}}/approve"
                                                    class="btn btn-success btn-xs  "> Approve
                                                    </a>
                                                    <a title="Delete" href="/application/{{$application->id}}/reject"
                                                        class="btn btn-danger btn-xs  "> reject
                                                        </a>
                                                @elseif($application->status=='approve')
                                                <a title="Delete" href="/application/{{$application->id}}/reject"
                                                    class="btn btn-danger btn-xs  "> reject
                                                    </a>
                                                @else
                                                <a title="Delete" href="/application/{{$application->id}}/approve"
                                                    class="btn btn-success btn-xs  "> Approve
                                                    </a>
                                                @endif
                                                @else

                                                <span class="badge 
                                                {{ $application->status == 'pending' ? 'badge-info' : 
                                                    ($application->status == 'reject' ? 'badge-danger' : 'badge-success') }}">
                                                <!-- Your content goes here -->
                                         {{$application->status}}</span>
                                                @endrole
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