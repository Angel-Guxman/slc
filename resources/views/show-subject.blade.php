<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subjects') }}
        </h2>
    </x-slot>

    <x-slot name="content">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h1 class="text-2xl font-semibold">Bienvenido al Dashboard</h1>
                        <h2 class="text-xl font-semibold my-4">Lista de Unidades</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr class=" bg-slate-500">
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                            Nombre
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                            Objetivo
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                  
                                    @foreach ($units as $unit)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{$unit->unit_name}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{$unit->objetive}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <h2 class="text-lg font-medium mt-6">Nombre de la asignatura</h2>
                        <p class="mt-1">{{$subject[0]->subject_name}}</p>

                        <h1 class=" font-bold text-lg">Lista de actividades</h1>
                    @foreach ( $activities  as $act)
                    <h1 class=" ">Nombre de la Actividad: {{$act->activity_name}}</h1>
                    <h2>Unidad: {{$act->units_id}}</h2>
                    <h2>Porcentaje: {{$act->percentage}}</h2>      
                    @endforeach
                    
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>


    