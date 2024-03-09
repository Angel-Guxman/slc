<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Detalles del Estudiante
        </h2>
    </x-slot>

    <x-slot name="content">
        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="text-lg leading-6 font-medium space-y-1">
                            <h3 class="text-2xl font-bold text-gray-900">{{ $student->name_student }} {{ $student->lastname_student }}</h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                Información personal del estudiante.
                            </p>
                        </div>
                        <div class="mt-5 border-t border-gray-200 pt-5">
                            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500 flex items-center">
                                        <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        Nombre Completo
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $student->name_student }} {{ $student->lastname_student }}</dd>
                                </div>

                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500 flex items-center">
                                        <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 1a5 5 0 005 5H7a5 5 0 009 5l3-3m-6 3l-3 3m6-16a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        Email
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $student->email_student }}</dd>
                                </div>

                                <div class="sm:col-span-2">
                                    <dt class="text-sm font-medium text-gray-500 flex items-center">
                                        <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path d="M7 8h10M7 12h4m1 8H6a2 2 0 01-2-2V6a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V18a2 2 0 01-2 2h-3m10 0a8 8 0 11-16 0 8 8 0 0116 0z" />
                                        </svg>
                                        Comentarios
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $student->comments }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <a href="/students" class="inline-flex items-center px-4 py-2 bg-violet-500 border border-transparent rounded-md font-semibold text-xs text-white  uppercase tracking-widest hover:bg-violet-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                        Regresar
                    </a>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
