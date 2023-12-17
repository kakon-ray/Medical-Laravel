@extends('layouts.admin.guest')
@section('content')
<style>
    /* password visibility */

.password-container {
  position: relative;
}

#togglePassword {
    position: absolute;
    right: 24px;
    top: 66%;
    transform: translateY(-50%);
    cursor: pointer;
}
#toggleConfirmPassword {
    position: absolute;
    right: 24px;
    top: 66%;
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
                            <h2 class="text-uppercase mb-5 text-center">Registration</h2>
                            @if (session()->has('error'))
                                <p class="alert alert-danger small">{{ session('error') }}</p>
                            @endif
                            <form method="POST" action="{{ route('admin.register') }}" id="adminregalert">
                                @csrf
                        
                                <!-- Name -->
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="form-control form-control-lg" placeholder="Name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                        
                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="form-control form-control-lg" placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                        
                                <!-- Password -->
                                <div class="mt-4 password-container">
                                    <x-input-label for="password" :value="__('Password')" />
                        
                                    <x-text-input id="password" class="form-control form-control-lg" placeholder="Password"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                                    <div id="togglePassword" onclick="togglePasswordVisibility()">
                                                        👁️ <!-- Unicode eye icon -->
                                                      </div>
                        
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                        
                                <!-- Confirm Password -->
                                <div class="mt-4 password-container">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        
                                    <x-text-input id="password_confirmation" class="form-control form-control-lg" placeholder="Confirm Password"
                                                    type="password"
                                                    name="password_confirmation" required autocomplete="new-password" />
                                                    <div id="toggleConfirmPassword" onclick="toggleConfirmPasswordVisibility()">
                                                        👁️ <!-- Unicode eye icon -->
                                                      </div>
                        
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                    
                                    <x-primary-button class="mt-4 btn btn-info btn-block btn-lg gradient-custom-4 text-light">
                                        {{ __('Register') }}
                                    </x-primary-button>

                                    <div class="flex align-items-center justify-center mt-4">
                                        <p class="flex items-center">Do not have an Account? <a class="ps-2"
                                                href="{{ route('admin.login') }}">
                                                Login
                                            </a></p>


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
    function toggleConfirmPasswordVisibility() {
        var passwordInput = document.getElementById("password_confirmation");
        var togglePasswordButton = document.getElementById("toggleConfirmPassword");

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
