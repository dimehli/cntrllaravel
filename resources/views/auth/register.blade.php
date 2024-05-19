<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            background-c
            olor: #357ABD;
        }
        .panel h1 {
            font-family: 'Roboto', sans-serif; 
            font-size: 2rem; 
            font-weight: 700; 
            margin-bottom: 1rem;
            text-align: center;
            
	text-shadow: 4px 3px 0px #fff, 9px 8px 0px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>
    <x-guest-layout>
        <div class="panel" >
        <h1>Register</h1>
            <div class="panel__form-wrapper">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="form__row">
                        <x-input-label for="name" :value="__('Name')" class="form__label" />
                        <x-text-input id="name" class="form__input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="form__error" />
                    </div>

                    <!-- Email Address -->
                    <div class="form__row mt-8">
                        <x-input-label for="email" :value="__('Email')" class="form__label" />
                        <x-text-input id="email" class="form__input" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="form__error" />
                    </div>

                    <!-- Password -->
                    <div class="form__row mt-8">
                        <x-input-label for="password" :value="__('Password')" class="form__label" />
                        <x-text-input id="password" class="form__input" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="form__error" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="form__row mt-8">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="form__label" />
                        <x-text-input id="password_confirmation" class="form__input" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="form__error" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button type="submit" class="form__submit ms-4">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-guest-layout>
</body>
</html>
