<!-- resources/views/students/create.blade.php -->
{{-- crear students formulario --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
</head>
<body>
    <x-app-layout>

        <script src="https://kit.fontawesome.com/58362e24f4.js" crossorigin="anonymous"></script>
        <x-slot name="content">
        <header class=" flex justify-around items-center border py-3">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Crea un Nuevo Estudiante
          </h2>
          <a href="{{route('students')}}" class=" border  p-2 rounded-lg text-white bg-slate-500 hover:bg-slate-600">
            Regresar
            <i class="fa-solid fa-rotate-left"></i>
        </a>
    </header>
    
    <div class="max-w-lg mx-auto my-10 bg-white p-8 rounded-lg shadow-xl">
        <h1 class="text-2xl font-bold mb-6">Crear Estudiante</h1>
        
        <form action="{{ route('students.store')  }}"  class="w-full max-w-lg mx-auto" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name_student" class="block text-gray-700 font-bold mb-2">Nombre</label>
                <input type="text" name="name_student" id="name_student" placeholder="Nombre" value="{{ old('name_student') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('name_student')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="lastname_student" class="block text-gray-700 font-bold mb-2">Apellidos</label>
                <input type="text" name="lastname_student" id="lastname_student" placeholder="Apellidos" value="{{ old('lastname_student') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('lastname_student')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_student" class="block text-gray-700 font-bold mb-2">Matrícula</label>
                <input type="text" name="id_student" id="id_student" placeholder="Matrícula" value="{{ old('id_student') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('id_student')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email_student" class="block text-gray-700 font-bold mb-2">Correo Electrónico</label>
                <input type="text" name="email_student" id="email_student" placeholder="Correo Electrónico" value="{{ old('email_student') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('email_student')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password_student" class="block text-gray-700 font-bold mb-2">Contraseña</label>
                <input type="password" name="password_student" id="password_student" placeholder="Contraseña" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('password_student')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Registrar</button>
            </div>
        </form>
    </div>
</x-slot>
    
    
    
</x-app-layout>
    
</body>
</html>
