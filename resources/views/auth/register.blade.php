{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="registration-form">
        <form name="frm-register" method="POST" action="{{route('register')}}">
            @csrf
            <div class="form-icon">
                <img src="asset/images/logo/icon2.png" alt="">
               <!-- <span><i class="icon icon-user"></i></span>-->
            </div>
            <x-jet-validation-errors class="mb-4" />

            <div class="form-group">
                <input type="text" id="name" name="name" class="form-control item"  placeholder="Your Name" :value="old('name')" required autofocus autocomplete="name">
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" class="form-control item"  placeholder="Email" :value="old('email')" required="autofocus">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" name="password" placeholder="Password" required autocomplete="new-password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
            </div>
            
            <fieldset class="form-group">
                <a  href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </fieldset>
            
            <div class="form-group">
                <input type="submit"  class="btn btn-block create-account" value="Create Account" name="submit">
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