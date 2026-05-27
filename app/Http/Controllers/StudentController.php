<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

     public function index()
    {   
        $students = Student::all();
        return view ('studentmngt.index', compact('students'));
    }

    public function create()
    {
    
        return view ('studentmngt.create');
    }


    public function store(Request $request)
    {
    $request->validate([
        'fname' => 'required|max:255|string',
        'lname' => 'required|max:255|string',
        'midname' => 'required|max:255|string',
        'age' => 'required|integer|min:0',
        'address' => 'required|max:255|string',
        'zip' => 'required|integer|digits:4',

    ]);

    Student::create($request->all());
    return view ('studentmngt.create');
    }

    public function edit( int $id)
    {
        $students = Student::find($id);
        return view ('studentmngt.edit', compact('students'));
    }

    public function update(Request $request, int $id) {
        {
            $request->validate([
                'fname' => 'required|max:255|string',
                'lname' => 'required|max:255|string',
                'midname' => 'required|max:255|string',
                'age' => 'required|integer|min:0',
                'address' => 'required|max:255|string',
                'zip' => 'required|integer|digits:4',
                
            ]);
        
            Student::findOrFail($id)->update($request->all());
            return redirect ()->back()->with('status','Student Updated Successfully!');
            }
    }

    public function destroy (int $id){
        $students = Student::findOrFail($id);
        $students->delete();
        return redirect ()->back()->with('status','Student Deleted');
    }
}
