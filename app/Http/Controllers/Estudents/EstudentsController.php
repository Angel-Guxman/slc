<?php

namespace App\Http\Controllers\Estudents;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class EstudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students=Student::paginate(10);
        return view('students.students')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     * 'name_student', 
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_student' => 'required|max:50',
            'lastname_student' => 'required|max:50',
            'id_student' => 'required|numeric|unique:students,id_student',
            'email_student' => 'required|email|unique:students,email_student',
            'password_student' => 'required|min:6',
            'comments' => 'nullable',
        ]);
        $student = new Student; 
        $student->name_student = $request->name_student; 
        $student->lastname_student = $request->lastname_student;
        $student->id_student = $request->id_student;
        $student->email_student = $request->email_student;
        $student->password_student = $request->password_student;
        $student->comments = $request->comment;
        $student->save();
        return redirect()->route('students')->with('success', 'Estudiante creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //consulta con Eloquent
        $student=Student::find($id);
        return view ('show-student',compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $student=Student::find($id);
        return view('edit-student',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id)
    {
        //crear un student request
        $student=Student::find($id);
        $student->update($request->all());
        return redirect()->route('students')->with('notificacion','Estudiante Modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Student::destroy($id);
        return redirect()->route('students') -> with('notificacion','El estudiante se ha eliminado correctamente');
    }
}
