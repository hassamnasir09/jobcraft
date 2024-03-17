<x-app-layout>
    <!-- Session Status -->
    <div class="hero-wrap js-fullheight" style="background-image: url('/plugins/jobportal/images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
            data-scrollax-parent="true">
            <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
                
                <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="margin-top: 100px"><span>Login</span></h1>

                <div class="ftco-search">
                    <div class="row">
                        {{-- <div class="col-md-12 nav-link-wrap">
                            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill"
                                    href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Login</a>
                            </div>
                        </div> --}}
                        <div class="col-md-12 tab-wrap">

                            <div class="tab-content p-4" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="v-pills-nextgen-tab">

                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                
                                        <!-- Email Address -->
                                        <div>
                                            <x-input-label for="email" :value="__('Email')" />
                                            <input class="form-control" id="email"
                                            class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                
                                        <!-- Password -->
                                        <div class="mt-4">
                                            <x-input-label for="password" :value="__('Password')" />
                                            <input 
                                            class="form-control"
                                            id="password" class="block mt-1 w-full"
                                                            type="password"
                                                            name="password"
                                                            required autocomplete="current-password"
                                            >
                                            
                                        
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                
                                       
                                        <x-primary-button class="ms-3 btn btn-info mt-3">
                                            {{ __('Log in') }}
                                        </x-primary-button>
                                        <h5 class="mt-1">Do not have account register <a href="/register" >here</a></h5>
                                        <h5 class="mt-1">Become an employer Click <a href="/registeremployer" >here</a></h5>
                                
                                      
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   
   
</x-app-layout>
