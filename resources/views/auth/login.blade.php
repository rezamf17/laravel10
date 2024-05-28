<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
               <a href="../../index2.html"><b>Admin</b>LTE</a>
            </div>
            <div class="card">
               <div class="card-body login-card-body">
                  <p class="login-box-msg">Sign in to start your session</p>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                     <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                           <div class="input-group-text">
                              <span class="fas fa-envelope"></span>
                           </div>
                        </div>
                     </div>
                     <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                           <div class="input-group-text">
                              <span class="fas fa-lock"></span>
                           </div>
                        </div>
                     </div>
                     @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                     <div class="row">
                        <div class="col-8">
                           {{-- <div class="icheck-primary">
                              <input type="checkbox" id="remember">
                              <label for="remember">
                              Remember Me
                              </label>
                           </div> --}}
                        </div>

                        <div class="col-4">
                           <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                     </div>
                  </form>
    {{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}

               </div>
            </div>
         </div>
    </div>
</x-guest-layout>
