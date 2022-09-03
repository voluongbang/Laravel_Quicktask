<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('form.edit_user') }}
        </h2>
    </x-slot>
    <div class="card w-1/3 shadow-lg mx-auto p-4 mt-5">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')
            <!-- First name -->
            <div>
                <label for="InputFirstname1" class="form-label">{{ __('form.first_name') }}</label>
                <input type="firstName" class="form-control" name="first_name" value="{{ $user->first_name }}" id="InputFirstname1">
            </div>

            <!-- Last name -->
            <div class="mt-4">
                <label for="InputLastname1" class="form-label">{{ __('form.last_name') }}</label>
                <input type="firstName" class="form-control" name="last_name" value="{{ $user->last_name }}" id="InputLastname1">
            </div>


            <!-- Username -->
            <div class="mt-4">
                <label for="InputUser1" class="form-label">{{ __('form.username') }}</label>
                <input type="username" class="form-control" name="username" value="{{ $user->username }}" id="InputUser1">
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="InputEmail1" class="form-label">{{ __('form.email') }}</label>
                <input type="" class="form-control" name="email" value="{{ $user->email }}" id="InputEmail1">
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn btn-primary bg-blue-600 mr-2">{{ __('form.submit') }}</button>
                <a type="button" class="btn btn-secondary bg-gray-600" href="{{route('users.index')}}">{{ __('form.cancel') }}</a>
            </div>
        </form>
    </div>

</x-app-layout>
