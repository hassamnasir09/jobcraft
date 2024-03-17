@extends('layouts.admin')
@section('content')

<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">List of Categories
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
                                                aria-label="Company Name: activate to sort column descending"
                                                style="width: 49.6667px;">id</th>
                                            <th class="sorting" tabindex="0" aria-controls="dash-table" rowspan="1"
                                                colspan="1"
                                                aria-label="Occupation Title: activate to sort column ascending"
                                                style="width: 60.6667px;">name</th>
                                          
                                            {{-- <th width="10%" align="center" class="sorting" tabindex="0"
                                                aria-controls="dash-table" rowspan="1" colspan="1"
                                                aria-label="Action: activate to sort column ascending"
                                                style="width: 33.6667px;">Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr role="row" class="odd">
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                           
                                            {{-- <td align="center">
                                                <a title="Delete" href="/category/{{$category->id}}/delete"
                                                    class="btn btn-danger btn-xs  "> <span
                                                        class="fa  fa-trash-o fw-fa "></span></a>
                                              
                                                
                                            </td> --}}
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