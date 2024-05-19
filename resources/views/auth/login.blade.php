





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    
<style>
 
 

        .panel {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px brown;
            width: 100%;
            max-width: 400px;
        }
        .form__submit:hover {
            background-color: #357ABD;
        }
    
        .panel h1 {
            font-family: 'Roboto', sans-serif; /* New font family */
            font-size: 2rem; /* Larger font size */
            font-weight: 700; /* Bold text */
            margin-bottom: 1rem;
            text-align: center;
            
	text-shadow: 4px 3px 0px #fff, 9px 8px 0px rgba(0,0,0,0.15);
        }
       

    </style>

    

</head>
<body>
    <x-guest-layout>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="panel">
        <h1>Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form__row">
                    <x-input-label for="email" :value="__('Email')" class="form__label" />
                    <x-text-input id="email" class="form__input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="form__error" />
                    <span class="form__bar"></span>
                </div>

                <!-- Password -->
                <div class="form__row">
                    <x-input-label for="password" :value="__('Password')" class="form__label" />
                    <x-text-input id="password" class="form__input" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="form__error" />
                    <span class="form__bar"></span>
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

                    <x-primary-button class="form__submit">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>

            <!-- Register Link -->
            <div class="mt-4 text-center">
                <a href="{{ route('register') }}" class="underline text-sm text-gray-600 hover:text-gray-900">{{ __('Don\'t have an account? Register') }}</a>
            </div>
        </div>
    </x-guest-layout>
</body>
</html>
