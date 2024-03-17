
@extends('layouts.admin')
@section('content')
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">


                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            Welcome {{Auth::user()->name}} to dashboard

                        </h1>
                       
                    </section>

                 

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
