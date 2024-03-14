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
                            <h3 class="text-2xl font-bold text-gray-900">{{ $studentWithActivities->name_student }} {{ $studentWithActivities->lastname_student }}</h3>
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
                                    <dd class="mt-1 text-sm text-gray-900">{{ $studentWithActivities->name_student }} {{ $studentWithActivities->lastname_student }}</dd>
                                </div>

                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500 flex items-center">
                                        <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 1a5 5 0 005 5H7a5 5 0 009 5l3-3m-6 3l-3 3m6-16a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        Email
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $studentWithActivities->email_student }}</dd>
                                </div>

                                <div class="sm:col-span-2">
                                    <dt class="text-sm font-medium text-gray-500 flex items-center">
                                        <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path d="M7 8h10M7 12h4m1 8H6a2 2 0 01-2-2V6a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V18a2 2 0 01-2 2h-3m10 0a8 8 0 11-16 0 8 8 0 0116 0z" />
                                        </svg>
                                        Comentarios
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $studentWithActivities->comments }}</dd>
                                </div>
                                <div class="sm:col-span-2">
                                    <dt class="text-sm font-medium text-gray-500 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-gray-400 mr-2">
                                            <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z" clip-rule="evenodd" />
                                            <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                                          </svg>
                                          
                                        Actividades
                                    </dt>
                                    <ul>
                                        
                                        @foreach ($studentWithActivities->activities as $activity)
                                            <li> Nombre: {{ $activity->activity_name }} - Porcentaje: {{ $activity->percentage }}</li>
                                        @endforeach
                                      
                                    </ul>
                                    
                                </div>
                                <a class=" border rounded  w-fit p-1 font-medium hover:bg-blue-600 text-slate-100 bg-blue-500" href=" {{ route('students.report', $studentWithActivities->id) }}" >Generar Reporte</a>
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
