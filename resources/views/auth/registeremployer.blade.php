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
                href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Register</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Become a employer</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section contact-section bg-light">
    <div class="container">

      <div class="row block-9">
        <div class="col-md-12 order-md-last d-flex">

          <form method="POST" action="{{ route('postregisteremployer') }}" class="bg-white p-5 contact-form" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
              <x-input-label for="name" :value="__('Name')" />
              <input class="form-control block mt-1 w-full" type="text" name="name" value="{{old('name')}}" required
                autocomplete="username">

              <x-input-error :messages="$errors->get('name')" class="mt-2" />

            </div>
            <div class="form-group">
              <x-input-label for="email" :value="__('Email')" />
              <input class="form-control block mt-1 w-full" type="email" name="email" value="{{old('email')}}" required
                autocomplete="username">

              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="form-group">
              <x-input-label for="password" :value="__('Password')" />
              <input class="form-control block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password">
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="form-group">
              <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
              <input class="form-control block mt-1 w-full" type="password" name="password_confirmation" required
                autocomplete="new-password" />
              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>


            <h5>Company detail</h5>


            <div class="form-group">
              <x-input-label for="name" :value="__('Company Name')" />
              <input class="form-control block mt-1 w-full" type="text" name="company_name"
                value="{{old('company_name')}}" required autocomplete="username">

              <x-input-error :messages="$errors->get('company_name')" class="mt-2" />

            </div>

            <div class="form-group">
              <x-input-label for="name" :value="__('Company Address')" />
              <input class="form-control block mt-1 w-full" type="text" name="location" value="{{old('location')}}"
                required autocomplete="username">

              <x-input-error :messages="$errors->get('location')" class="mt-2" />

            </div>

            <div class="form-group">
              <x-input-label for="name" :value="__('Company Logo')" />
              <input class="form-control block mt-1 w-full" type="file" name="image" value="{{old('image')}}" required
                autocomplete="username">
              <x-input-error :messages="$errors->get('image')" class="mt-2" />

            </div>

            <div class="form-group">
              <x-input-label for="name" :value="__('Company Phone Number')" />
              <input class="form-control block mt-1 w-full" type="text" name="phone" value="{{old('phone')}}" required
                autocomplete="username">
              <x-input-error :messages="$errors->get('phone')" class="mt-2" />

            </div>



            <div class="form-group">
              <input type="submit" value="Register" class="btn btn-primary py-3 px-5">
            </div>
            <a class="text-decoration-none text-sm text-secondary fw-light link-dark" href="{{ route('login') }}">
              {{ __('Already registered? Login here.') }}
            </a>
          </form>

        </div>


      </div>
    </div>
  </section>







</x-app-layout>