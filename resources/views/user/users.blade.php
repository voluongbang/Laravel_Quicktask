<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('form.user_management') }}
        </h2>
    </x-slot>
    <div class="">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                    <!-- component -->
                    <div class="overflow-x-auto">
                        <div class="min-w-screen min-h-screen flex justify-center bg-gray-100 font-sans overflow-hidden pt-10">
                            <div class="w-full lg:w-5/6">
                                <div class="bg-white shadow-md rounded my-6">
                                    <table class="min-w-max w-full table-auto">
                                        <thead>
                                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                                <th class="py-3 px-6 text-left">{{ __('form.user') }}</th>
                                                <th class="py-3 px-6 text-left">{{ __('form.email') }}</th>
                                                <th class="py-3 px-6 text-center">{{ __('form.role') }}</th>
                                                <th class="py-3 px-6 text-center">{{ __('form.status') }}</th>
                                                <th class="py-3 px-6 text-center">{{ __('form.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 text-sm font-light">
                                            @foreach ($users as $user)
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <span class="font-medium">{{$user->full_name}}</span>
                                                    </div>
                                                </td>
                                                <td class="py-3 px-6 text-left">
                                                    <div class="flex items-center">
                                                        <span>{{$user->email}}</span>
                                                    </div>
                                                </td>
                                                @if ($user->is_admin === 1)
                                                <td class="py-3 px-6 text-center">
                                                    {{ __('form.admin') }}
                                                </td>
                                                @else
                                                <td class="py-3 px-6 text-center">
                                                    {{ __('form.user') }}
                                                </td>
                                                @endif

                                                @if ($user->is_active === 1)
                                                <td class="py-3 px-6 text-center">
                                                    <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">{{ __('form.active') }}</span>
                                                </td>
                                                @else
                                                <td class="py-3 px-6 text-center">
                                                    <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">{{ __('form.unactive') }}</span>
                                                </td>
                                                @endif
                                                <td class="py-3 px-6 text-center">
                                                    <div class="flex justify-center">
                                                        <a type="button" class="btn btn-primary bg-blue-600" href="{{ route('users.show', $user->id) }}">
                                                            {{ __('form.detail') }}
                                                        </a>
                                                        <a type="button" class="btn btn-primary bg-blue-600 ml-2" href="{{ route('users.edit', $user->id) }}">
                                                            {{ __('form.edit') }}
                                                        </a>
                                                        <form action="{{ route('users.destroy', $user->id) }}" method="post" class="ml-2">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-primary bg-blue-600">
                                                                {{ __('form.delete') }}
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-bottom">
        <a type="button" class="btn btn-primary bg-blue-600 mb-5 ml-10 rounded-pill" href="{{ route('users.create') }}">
            {{ __('form.create_user') }}
        </a>
    </div>
</x-app-layout>
