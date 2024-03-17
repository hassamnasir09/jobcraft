<x-app-layout>
    
          
          
          <div class="hero-wrap js-fullheight" style="background-image: url('/plugins/jobportal/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Company</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Company</h1>
          </div>
        </div>
      </div>
    </div>



    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">

            @foreach ($companies as $company)
                <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch"> 
              <a href="/joblisting?company={{$company->id}}" class="block-20" 
                style="background-image: url('{{$company->image}}');">
              </a>
              <div class="text mt-3">
                <div class="meta mb-2">
                    <div><a href="#">{{ $company->created_at->diffForHumans() }}</a></div>
                    <div><a href="#">{{$company->user->name}}</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> {{$company->jobs_count}}</a></div>
                </div>
                <h3 class="heading"><a href="/index.php?q=hiring&search=URC">{{$company->name}}</a></h3>
                <p>Address :{{$company->location}}</p>
                            <p>Contact No. :{{$company->phone}}</p>
              </div>
            </div>
          </div> 
            @endforeach
          

 
         

 
         
           </div>
        </div>
<!--         <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
      </div>
    </section>
   


		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p> --}}
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

</x-app-layout>