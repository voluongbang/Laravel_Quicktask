<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                    <!-- component -->
                    <div class="overflow-x-auto">
                        <div class="min-w-screen min-h-screen bg-gray-100 flex justify-center bg-gray-100 font-sans overflow-hidden pt-10">
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
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <span class="font-medium">Võ Lương Bằng</span>
                                                    </div>
                                                </td>
                                                <td class="py-3 px-6 text-left">
                                                    <div class="flex items-center">
                                                        <span>Eshal Rosas@gmail.com</span>
                                                    </div>
                                                </td>
                                                <td class="py-3 px-6 text-center">
                                                    Admin
                                                </td>
                                                <td class="py-3 px-6 text-center">
                                                    <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Active</span>
                                                </td>
                                                <td class="py-3 px-6 text-center">
                                                    <div class="">
                                                        <button type="button" class="btn btn-primary bg-blue-600" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            {{ __('form.detail') }}
                                                        </button>

                                                        <button type="button" class="btn btn-primary bg-blue-600" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            {{ __('form.edit') }}
                                                        </button>
                                                        <button type="button" class="btn btn-primary bg-blue-600" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            {{ __('form.delete') }}
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                                                <td class="py-3 px-6 text-left">
                                                    <div class="flex items-center">
                                                        <span class="font-medium">Vue Project</span>
                                                    </div>
                                                </td>
                                                <td class="py-3 px-6 text-left">
                                                    <div class="flex items-center">
                                                        <span>Anita Rodriquez@gmail.com</span>
                                                    </div>
                                                </td>
                                                <td class="py-3 px-6 text-center">
                                                    User
                                                </td>
                                                <td class="py-3 px-6 text-center">
                                                    <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Pendding</span>
                                                </td>
                                                <td class="py-3 px-6 text-center">
                                                    <div class="">
                                                        <button type="button" class="btn btn-primary bg-blue-600" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            {{ __('form.detail') }}
                                                        </button>

                                                        <button type="button" class="btn btn-primary bg-blue-600" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            {{ __('form.edit') }}
                                                        </button>
                                                        <button type="button" class="btn btn-primary bg-blue-600" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            {{ __('form.delete') }}
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ __('form.detail_modal')}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Detail about user
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary bg-blue-600" data-bs-dismiss="modal">{{ __('form.close') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
