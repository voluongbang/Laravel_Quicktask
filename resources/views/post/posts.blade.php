<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('form.post_management') }}
        </h2>
    </x-slot>
    <div>
        @foreach($posts as $post)
        <div class="card w-50 mx-auto mt-10 shadow-lg">
            <div class="card-header">
                {{ $post->title }}
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>{{ $post->content }}</p>
                </blockquote>
            </div>
            <div class="card-footer h-14">
                <div class="container flex justify-content-end">
                    <a type="button" class="btn btn-primary bg-blue-600 ml-2 mb-3" href="{{ route('posts.edit', $post->id) }}">
                        {{ __('form.edit') }}
                    </a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="ml-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary bg-blue-600">
                            {{ __('form.delete') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="fixed-bottom">
        <a type="button" class="btn btn-primary bg-blue-600 mb-5 ml-40 rounded-pill" href="{{ route('posts.create') }}">
            {{ __('form.create_post') }}
        </a>
    </div>
</x-app-layout>
