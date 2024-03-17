@extends('layouts.admin')
@section('content')

<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">List of Employees
                                {{-- <a href="index.php?view=add" class="btn btn-primary btn-xs  "> <i
                                        class="fa fa-plus-circle fw-fa"></i> Add
                                    user</a??"--"> --}}
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
                                            <th width="5%" class="sorting_asc" tabindex="0" aria-controls="dash-table"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="EmployeeNo: activate to sort column descending"
                                                style="width: 67px;">EmployeeNo</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1" aria-label="Name: activate to sort column ascending"
                                                style="width: 115px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1" aria-label="Address: activate to sort column ascending"
                                                style="width: 76px;">Address</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1" aria-label="Sex: activate to sort column ascending"
                                                style="width: 43px;">Sex</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 44px;">date of birth</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1" aria-label="ContactNo: activate to sort column ascending"
                                                style="width: 96px;">ContactNo</th>
                                           
                                            <th width="14%" class="sorting" tabindex="0" aria-controls="dash-table"
                                                rowspan="1" colspan="1"
                                                aria-label="Action: activate to sort column ascending"
                                                style="width: 90px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->place_of_birth??"--"}}</td>
                                            <td>{{$user->gender??"--"}}</td>
                                            <td>{{$user->date_of_birth??"--"}}</td>
                                            <td>{{$user->phone??"--"}}</td>
                                            <td align="center">
                                                {{-- <a title="Edit" href="index.php?view=edit&amp;id=3"
                                                    class="btn btn-primary btn-xs  "> <span
                                                        class="fa fa-edit fw-fa"></span></a> --}}
                                              @if(!$user->hasRole('admin'))
                                                        <a title="Delete" href="/employee/{{$user->id}}"
                                                    class="btn btn-danger btn-xs  "> <span
                                                        class="fa  fa-trash-o fw-fa "></span></a>
                                                @endif
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