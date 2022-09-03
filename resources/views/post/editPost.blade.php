<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('form.edit_post') }}
        </h2>
    </x-slot>
    <div class="card w-1/3 shadow-lg mx-auto p-4 mt-5">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PUT')
            <!-- Title -->
            <div>
                <label for="InputTitle1" class="form-label">{{ __('form.title')}}</label>
                <input type="title" class="form-control" name="title" value="{{ $post->title }}" id="InputTitle1">
            </div>

            <!-- Content -->
            <div class="mt-4">
                <label for="exampleFormControlTextarea1" class="form-label">{{ __('form.content')}}</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="5">{{ $post->content }}</textarea>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn btn-primary bg-blue-600 mr-2">{{ __('form.submit')}}</button>
                <a type="button" class="btn btn-secondary bg-gray-600" href="{{route('posts.index')}}">{{ __('form.cancel')}}</a>
            </div>
        </form>
    </div>

</x-app-layout>
