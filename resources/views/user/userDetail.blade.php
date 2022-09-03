<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('form.detail') }}
        </h2>
    </x-slot>
    @foreach ($user->posts as $post)
    <div class="card w-50 mx-auto mt-10">
        <div class="card-header">
            {{ $post->title }}
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>{{ $post->content }}</p>
                <footer class="blockquote-footer mt-2"><cite class="pr-2" title="Source Title">{{ __('form.written') }}</cite> {{ $user->full_name}} </footer>
            </blockquote>
        </div>
    </div>
    @endforeach

    <div class="fixed-bottom">
        <a type="button" class="btn btn-secondary bg-blue-600 mb-10 ml-40 pt-2 rounded-pill w-40 h-10" href="{{route('users.index')}}">{{ __('form.cancel') }}</a>
    </div>
</x-app-layout>
