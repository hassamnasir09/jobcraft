<x-app-layout>
    
  <div class="hero-wrap js-fullheight" style="background-image: url('/plugins/jobportal/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Hirring</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hirring</h1>
          </div>
        </div>
      </div>
    </div>

<section class="ftco-section bg-light">
            <div class="container">
    
                <div class="row">

                     

@foreach ($jobs as $job)
     <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3">{{$job->title}}</h2>
                  <div class="badge-wrap">
                   <span class="bg-primary text-white badge py-2 px-3">{{$job->category->name}}</span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#">{{$job->company->name}}</a></div>
                  <div><span class="icon-my_location"></span> <span>{{$job->company->location}}</span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="{{url('applyJob?id='.$job->id)}}" class="btn btn-primary py-2 mr-1">Apply Job</a>
              
              </div>
            </div>
          </div><!-- end -->
@endforeach
         
 


        
         </div>
<!--                 <div class="row mt-5">
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