<x-app-layout>


    <div class="hero-wrap js-fullheight" style="background-image: url('/plugins/jobportal/images/bg_2.jpg');"
      data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start"
          data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5"
            data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a
                  href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Apply Now</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Apply Now</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">



          <h2 class="page-header">Job Details</h2>

        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form class="form-horizontal span6  wow fadeInDown" action="submitapplication/{{$job->id}}"
              enctype="multipart/form-data" method="POST" autocomplete="off">
@csrf
              <style type="text/css">
                .form-control-2 {
                  display: inline-block;
                  width: 25%;
                  padding: 0.375rem 0.75rem;
                  font-size: 1rem;
                  line-height: 1.5;
                  color: #495057;
                  background-color: #fff;
                  background-clip: padding-box;
                  border: 1px solid #ced4da;
                  border-radius: 0.25rem;
                  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                }
              </style>


              {{-- <form action="#" class="bg-white p-5 contact-form"> --}}
                <div class="form-group">
                  <input name="job_id" type="hidden" value="{{$job->id}}">
                  <input class="form-control " id="FNAME" name="name" placeholder="Name" type="text" required
                  value="{{Auth::user()?->name}}" 
                  @auth
                    readonly
                  @endauth
                  >
                </div>
          
                <div class="form-group">
                  Address
                  <textarea class="form-control " id="ADDRESS" name="ADDRESS" placeholder="Address" type="text" 
                    {{Auth::user()?->place_of_birth?'readonly':''}}>{{Auth::user()?->place_of_birth}}
                  </textarea>
                </div>

                <div class="form-group">
                  Gender:
                  <input  id="optionsRadios1"  name="gender" type="radio"
                    value="Female"
                    {{Auth::user()?->gender=='Femail'?'checked':''}}
                    {{Auth::user()?->gender?'readonly':''}}
                    >Female
                  <input id="optionsRadios2" name="gender" type="radio" value="Male"
                  {{Auth::user()?->gender=='Male'?'checked':''}}
                  {{Auth::user()?->gender?'readonly':''}}

                  > Male
                </div>


                <div class="form-group"> Date of Birth
                <input type="date" name="date_of_birth"
                {{Auth::user()?->date_of_birth?'readonly':''}}

                placeholder="Date of birth" value="{{Auth::user()?->date_of_birth}}">
                </div>

                <div class="form-group">
                  Place of Birth
                  <textarea class="form-control " id="BIRTHPLACE" name="place_of_birth" placeholder="Place of Birth"
                  {{Auth::user()?->place_of_birth?'readonly':''}}

                    type="text" value="{{Auth::user()?->place_of_birth}}" required >{{Auth::user()?->place_of_birth}}
                  </textarea>
                </div>
                <div class="form-group">
                  <input class="form-control " id="TELNO" name="phone_of_birth" placeholder="Contact No." type="text" any
                    value="{{Auth::user()?->phone_of_birth}}" required
                    {{Auth::user()?->phone_of_birth?'readonly':''}}
                    >
                </div>
                <div class="form-group">
                  <select class="form-control " name="martial_status"  id="CIVILSTATUS"
                  {{Auth::user()?->martial_status?'readonly':''}}
                  >
                    <option value="none" >Select Relationship  Status</option>
                    <option value="Single" {{Auth::user()?->martial_status=='Single'?"selected":''}}>Single</option>
                    <option value="Married" {{Auth::user()?->martial_status=='Married'?"selected":''}}>Married</option>
                    <option value="Widow" {{Auth::user()?->martial_status=='Widow'?"selected":''}}>Widow</option>
                  </select>

                </div>
                <div class="form-group">
                  <input type="Email" class="form-control " id="EMAILADDRESS" name="email"
                    placeholder="Email Address" autocomplete="false" value="{{Auth::user()?->email}}" 
                    @auth
                    readonly
                  @endauth
                    />
                </div>
                @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                <div class="form-group">
                  <input class="form-control " id="USERNAME" name="username" placeholder="Username"
                  value="{{Auth::user()?->username}}"
                  {{Auth::user()?->username?'readonly':''}}
                  >

                </div>
                @guest
                <div class="form-group">
                  <input class="form-control " id="PASS" name="password" placeholder="Password" type="password">
                </div>
                @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                @endguest
     
                <div class="form-group">
                  <input class="form-control " id="DEGREE" name="last degree" placeholder="Educational Attainment"
                  value="{{Auth::user()?->last_degree}}"
                  {{Auth::user()?->last_degree?'readonly':''}}

                  >


                </div>


                <div class="form-group">
                  Attach your Resume here.
                  <input id="picture" name="resume_file" type="file" required>
                  <input name="MAX_FILE_SIZE" type="hidden" value="1000000">
                  @error('resume_file')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>



                <div class="form-group">
                  <input type="submit" value="Submit Application" name="submit" class="btn btn-primary py-3 px-5">
                </div>
              </form>



            </form>
          </div>
          <div class="col-md-6 d-flex">
            <div class="panel">
              <div class="panel-header">
           
                <div
                  style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">
                  <a href="/joblisting?category={{$job->category_id}}">{{$job->title}}</a>
                </div>
              </div>
              <div class="panel-body">
                <div class="row contentbody">
                  <div class="col-md-6">
                    <ul>
                      <li><i class="fp-ht-bed"></i>Required No. of Employee's : {{$job->no_of_seats}}</li>
                      <li><i class="fp-ht-food"></i>Salary : {{$job->salary}}</li>
                      {{-- <li><i class="fa fa-sun-"></i>Duration of Employment : may 20</li> --}}
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul>
                      <li><i class="fp-ht-tv"></i>Prefered Gender : {{$job->preffered_gender}}</li>
                      <li><i class="fp-ht-computer"></i>Sector of Vacancy : yes</li>
                      <li><i class="fp-ht-computer"></i>Job type : {{$job->job_type}}</li>
                    </ul>
                  </div>
                  <div class="col-md-12">
                    <p>Qualification/Work Experience :</p>
                    <ul style="list-style: none;">
                      <li>{{$job->experice_required}}</li>
                    </ul>
                  </div>
                  <div class="col-md-12">
                    <p>Job Description:</p>
                    <ul style="list-style: none;">
                      <li>{{$job->job_description}}</li>
                    </ul>
                  </div>
                  <div class="col-md-12">
                    <p>Employer : {{$job->user->name}}</p>
                    {{-- <p>Location : {{$job->location}}</p> --}}
                  </div>
                </div>
              </div>
              <div class="panel-footer">
                Date Posted : {{$job->created_at->diffForHumans()}} </div>
            </div>

          </div>
        </div>
      </div>
    </section>





</x-app-layout>