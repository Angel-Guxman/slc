<form action="{{route('students.update',$student->id)}}" method="POST">
@csrf
@method('put')
<input type="text" name="name_student" placeholder="Nombre" value="{{$student->name_student}}">
@error('name_student')
<div style="color:red">
    {{$message}}
</div>
@enderror
<input type="text" name="lastname_student" placeholder="Apellido" value="{{$student->lastname_student}}">
@error('lastname_student')
<div style="color:red">
    {{$message}}
</div>
@enderror
<button type="submit">Editar</button>
    




</form>