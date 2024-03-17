@extends('layouts.admin')
@section('content')




<section class="content-header">
    <h1>
        Users
        <!-- <small>it all starts here</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href=/admin /><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=><a href="index.php">Users</a></li>
        <li class="active">view</li>
    </ol>
</section>
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">

                    <div class="container">
                        <div class="panel-body inf-content">
                            <div class="row">

                                <div class="col-md-12">
                                    <h1><strong>User Profile</strong></h1><br>
                                    <form class="form-horizontal span6" action="updateProfile" method="POST">


                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <label class="col-md-4 control-label" for="U_NAME">Name:</label>

                                                <div class="col-md-8">
                                                    <input class="form-control input-sm" id="U_NAME" name="name"
                                                        placeholder="Name" type="text" value="{{Auth::user()->name}}">
                                                    @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        @csrf
                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <label class="col-md-4 control-label" for="U_USERNAME">Email :</label>

                                                <div class="col-md-8">
                                                    <input class="form-control input-sm" id="U_USERNAME" name="email"
                                                        placeholder="Email Address" type="email"
                                                        value="{{Auth::user()->email}}">
                                                    @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <label class="col-md-4 control-label" for="U_USERNAME">Date of birth
                                                    :</label>

                                                <div class="col-md-8">
                                                    <input class="form-control input-sm" id="U_USERNAME"
                                                        name="date_of_birth" placeholder="Date of birth" type="date"
                                                        value="{{Auth::user()->date_of_birth}}">
                                                    @error('date_of_birth')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        @role('user')
                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <label class="col-md-4 control-label" for="U_USERNAME">gender :</label>

                                                <div class="col-md-8">
                                                    <select name="gender" id="" class="form-control">
                                                        <option value="">Please select a gender</option>
                                                        <option value="Male" {{Auth::user()->
                                                            gender=='Male'?'selected':''}}>Male</option>
                                                        <option value="Female" {{Auth::user()->
                                                            gender=='Female'?'selected':''}}>Female</option>
                                                    </select>
                                                    @error('gender')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <label class="col-md-4 control-label" for="U_USERNAME">Marriage Status
                                                    :</label>

                                                <div class="col-md-8">
                                                    <select name="martial_status" id="" class="form-control">
                                                        <option value="">Please select a status</option>
                                                        <option value="Single" {{Auth::user()->
                                                            martial_status=='Single'?'selected':''}}>Single</option>
                                                        <option value="Married" {{Auth::user()->
                                                            martial_status=='Married'?'selected':''}}>Married</option>
                                                    </select>
                                                    @error('martial_status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <label class="col-md-4 control-label" for="U_USERNAME">Place Of Birth
                                                    :</label>

                                                <div class="col-md-8">

                                                    <input class="form-control input-sm" id="U_USERNAME"
                                                        name="place_of_birth" placeholder="Place of birth" type="text"
                                                        value="{{Auth::user()->place_of_birth}}">
                                                    @error('place_of_birth')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <label class="col-md-4 control-label" for="U_USERNAME">Phone :</label>
                                                <div class="col-md-8">
                                                    <input class="form-control input-sm" id="U_USERNAME"
                                                        name="phone_of_birth" placeholder="Phone Number" type="text"
                                                        value="{{Auth::user()->phone_of_birth}}">
                                                    @error('phone_of_birth')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <label class="col-md-4 control-label" for="U_USERNAME">Last Degree
                                                    :</label>
                                                <div class="col-md-8">
                                                    <input class="form-control input-sm" id="U_USERNAME"
                                                        name="last_degree" placeholder="Last degree" type="text"
                                                        value="{{Auth::user()->last_degree}}">
                                                    @error('last_degree')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <label class="col-md-4 control-label" for="U_USERNAME">Full Address
                                                    :</label>
                                                <div class="col-md-8">
                                                    <input class="form-control input-sm" id="U_USERNAME" name="ADDRESS"
                                                        placeholder="Full address" type="text"
                                                        value="{{Auth::user()->ADDRESS}}">
                                                    @error('ADDRESS')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>



                                        @endrole

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <label class="col-md-4 control-label" for="U_PASS">Password:</label>

                                                <div class="col-md-8">
                                                    <input class="form-control input-sm" id="U_PASS" name="password"
                                                        placeholder="Account Password" type="Password" value=""
                                                        required>
                                                    @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <label class="col-md-4 control-label" for="idno"></label>

                                                <div class="col-md-8">
                                                    <button class="btn btn-primary " type="submit"><span
                                                            class="fa fa-save fw-fa"></span>
                                                        Save</button>
                                                    <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span>&nbsp;<strong>List of Users</strong></a> -->
                                                </div>
                                            </div>
                                        </div>



                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.content-wrapper -->




@endsection