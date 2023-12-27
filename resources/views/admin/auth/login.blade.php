@extends('layouts.admin.guest')
@section('content')
<style>
    /* password visibility */

.password-container {
  position: relative;
}

#togglePassword {
  position: absolute;
  right: 60px;
  top: 54%;
  transform: translateY(-50%);
  cursor: pointer;
}
</style>
    <section class="vh-100 bg-image my-5 ">
        <div class="mask d-flex align-items-center gradient-custom-3">
            <div class="container ">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase mb-5 text-center">Login</h2>
                                @if (session()->has('error'))
                                    <p class="alert alert-danger small">{{ session('error') }}</p>
                                @endif

                                <form method="POST" id="admin_login_alert" action="{{ route('admin.login') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div>
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="form-control form-control-lg" type="email"
                                            name="email" :value="old('email')" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input id="password" class="form-control form-control-lg" type="password"
                                            name="password" id="password" required autocomplete="current-password" />
                                        <div id="togglePassword" onclick="togglePasswordVisibility()">
                                            👁️ <!-- Unicode eye icon -->
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="block mt-4 password-container">

                                        <input id="remember_me" type="checkbox"
                                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                            name="remember">
                                        <span
                                            class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                      
                                    </div>


                                    <x-primary-button class="btn mt-4 btn-info btn-block btn-lg gradient-custom-4 text-light">
                                        {{ __('Log in') }}
                                    </x-primary-button>

                                    <div class="flex align-items-center justify-between mt-4">
                                        <p class="flex items-center">Do not have an Account? <a class="ps-2"
                                                href="{{ route('admin.register') }}">
                                                Registration
                                            </a></p>


                                        @if (Route::has('admin.password.reset'))
                                            <p>
                                                <a class="" href="{{ route('admin.password.reset') }}">
                                                    Forgot your password?
                                                </a>
                                            </p>
                                        @endif


                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var togglePasswordButton = document.getElementById("togglePassword");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                togglePasswordButton.innerHTML = "👁️"; // Unicode open eye icon
            } else {
                passwordInput.type = "password";
                togglePasswordButton.innerHTML = "👁️"; // Unicode eye icon
            }
        }
    </script>
@endsection
