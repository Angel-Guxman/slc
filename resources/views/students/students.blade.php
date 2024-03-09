<x-app-layout>
    <x-slot name="header">
        <header class=" flex justify-around items-center">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Students
            </h2>
            <a href="{{route('students.create')}}" class=" border  p-2 rounded-lg text-white bg-violet-500 hover:bg-violet-600">
                Agregar Usuario
                <i class="fa-solid fa-plus"></i>
            </a>
        </header>
    </x-slot>

    <x-slot name="content">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 class="text-lg leading-6 font-medium text-gray-900">Lista de Estudiantes</h1>
                        <div class="mt-4">
                            <table class="min-w-full divide-y  divide-gray-200 ">
                                <thead class="bg-slate-500">
                                    <tr class=" " >
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                            Nombre
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                            Apellido
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                            Email
                                        </th>
                                        <th scope="col" class=" px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                            Comentario
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-white uppercase tracking-wider">
                                            
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                            Acciones
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                          
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 ">
                                    @foreach($students as $student)
                                        <tr class=" ">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center align-middle">
                                                {{$student->name_student}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center align-middle">
                                                {{$student->lastname_student}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center align-middle">
                                                {{$student->email_student}}
                                            </td>
                                            <td class="px-6 py-4  text-sm text-gray-500 text-center align-middle ">
                                                {{$student->comments}}
                                            </td>
                                            <td class=" whitespace-nowrap text-center align-middle text-sm font-medium">
                                                <a href="{{ route('students.edit', $student->id) }}" class="text-indigo-600 hover:text-indigo-900 ">Editar</a>
                                            </td>
                                            <td class=" whitespace-nowrap text-center align-middle text-sm font-medium">
                                                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-indigo-600 hover:text-indigo-900 ">Eliminar</button>
                                                </form>
                                                
                                            </td>
                                            <td class="whitespace-nowrap  align-middle text-sm font-medium text-left">
                                                <a href="{{ route('students.show', $student->id) }}" class="text-indigo-600 hover:text-indigo-900">Ver Detalles</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Paginación -->
                        <div class="mt-4">
                            {{ $students->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
