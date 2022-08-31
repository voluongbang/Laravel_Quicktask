<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Post') }}
        </h2>
    </x-slot>
    <div class="card w-1/3 shadow-lg mx-auto p-4 mt-5">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('users.store') }}">
            @csrf

            <!-- First name -->
            <div>
                <x-label for="firstName" :value="__('form.first_name')" />
                <x-input id="firstName" class="block mt-1 w-full" type="text" name="first_name" :value="old('firstName')" required autofocus />
            </div>

            <!-- Last name -->
            <div class="mt-4">
                <x-label for="lastName" :value="__('form.last_name')" />
                <x-input id="lastName" class="block mt-1 w-full" type="text" name="last_name" :value="old('lastName')" required autofocus />
            </div>


            <!-- Username -->
            <div class="mt-4">
                <x-label for="username" :value="__('form.username')" />
                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('form.email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('form.password')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('form.confirmPassword')" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn btn-primary bg-blue-600 mr-2">{{ __('form.submit') }}</button>
                <a type="button" class="btn btn-secondary bg-gray-600" href="{{route('users.index')}}">{{ __('form.cancel') }}</a>
            </div>
        </form>
    </div>

</x-app-layout>
