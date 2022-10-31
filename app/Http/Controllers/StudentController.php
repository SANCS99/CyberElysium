<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view ('students.index')->with('students', $students);
    }
    
    public function create()
    {
        return view('students.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();

        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $input["image"] = '/storage/'.$path;

        Student::create($input);
        return redirect('student')->with('flash_message', 'Student Addedd!');  
    }
    
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }
    
    public function edit($id)
    {
        $student = Student::find($id);

        

        return view('students.edit')->with('students', $student);
    }
  
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $input["image"] = '/storage/'.$path;
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');  
    }
  
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');  
    }
}
