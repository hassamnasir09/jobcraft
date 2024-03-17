@extends('layouts.admin')
@section('content')

    <section class="content">

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">

                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">List of Companies 
                                    {{-- <a href="index.php?view=add"
                                        class="btn btn-primary btn-xs  "> <i class="fa fa-plus-circle fw-fa"></i> Add
                                        Company</a> --}}
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
                                                <th class="sorting_asc" tabindex="0" aria-controls="dash-table"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 252.667px;">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                    colspan="1" aria-label="Address: activate to sort column ascending"
                                                    style="width: 226.667px;">Address</th>
                                                <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Contact No.: activate to sort column ascending"
                                                    style="width: 216.667px;">Contact No.</th>
                                                <th width="10%" align="center" class="sorting" tabindex="0"
                                                    aria-controls="dash-table" rowspan="1" colspan="1"
                                                    aria-label="Action: activate to sort column ascending"
                                                    style="width: 52.6667px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($companies as $company)
                                                <tr role="row" class="odd">
                                                <td class="sorting_1">{{$company->name}}</td>
                                                <td>{{$company->location}}</td>
                                                <td>{{$company->phone}}</td>
                                                <td align="center">
                                                    {{-- <a title="Edit" href="index.php?view=edit&amp;id=3"
                                                        class="btn btn-primary btn-xs  "> <span
                                                            class="fa fa-edit fw-fa"></span></a> --}}
                                                  @role('admin')
                                                  @if ($company->user_id != 1)
                                                      
                                                
                                                            <a title="Delete" href="/company/{{$company->id}}"
                                                        class="btn btn-danger btn-xs  "> <span
                                                            class="fa  fa-trash-o fw-fa "></span></a>

                                                            @endif
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