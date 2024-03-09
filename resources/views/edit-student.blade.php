<x-app-layout>

    <x-slot name="content">
    
    <form action="{{route('students.update',$student->id)}}" method="POST" class=" flex flex-col gap-12 min-h-[500px]  ">
        @csrf
        @method('put')
        <div class=" flex justify-center gap-6 mt-16  ">
            <label class=" font-semibold justify-center items-center flex" for="">Nombre:</label>

            <input type="text" name="name_student" placeholder="Nombre" value="{{$student->name_student}}" class=" rounded-lg border-purple-700 ">
            @error('name_student')
            <div style="color:red">
            {{$message}}
        </div>
        @enderror
        <label for="" class=" font-semibold items-center flex">Apellido:</label>
        <input type="text" name="lastname_student" placeholder="Apellido" value="{{$student->lastname_student}}" class=" rounded-lg border-purple-700 ">
        @error('lastname_student')
<div style="color:red">
    {{$message}}
</div>
@enderror
</div>
<div class=" flex justify-center ">

    <button class=" border bg-violet-500 hover:bg-violet-600 text-white p-2 rounded-md" type="submit">Editar</button>
    
</div>



</form>
</x-slot>
</x-app-layout>