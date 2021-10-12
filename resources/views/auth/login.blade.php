{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<x-guest-layout>
    <div class="login-form">
        <form name="frm-login" method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-icon">
                <img src="asset/images/logo/icon2.png" alt="">
               <!-- <span><i class="icon icon-user"></i></span>-->
            </div>
            <x-jet-validation-errors class="mb-4" />
            <div class="form-group">
                <input type="email" id="email" name="email" class="form-control item"  placeholder="Email" :value="old('email')" required="autofocus">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" name="password" placeholder="Password" required autocomplete="current-password">
            </div>
            
            <fieldset class="form-group">
                <label class="remember-field">
                    <input class="frm-input" type="checkbox" name="remember" id="rememberme" value="forever">
                        <span>Remember me </span>
                </label>
                <a class="forgot-field" href="{{route('password.request')}}" title="Forgotten Password?">Forgotten Password?</a>
            </fieldset>
            
            
            <div class="form-group">
                <input type="submit"  class="btn btn-block submit" value="Login" name="submit">
            </div>
        </form>
        <div class="social-media">
            <h5>Login with social media</h5>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook-f" title="Facebook"></i></a>
                <a href="#"><i class="fa fa-google" title="Google"></i></a>
                <a href="#"><i class="fa fa-twitter" title="Twitter"></i></a>
            </div>
        </div>
    </div>
</x-guest-layout>