<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    //

    public function index()
    {
        $data = Student::latest()->get();
        return view('admin.students.index', compact('data'));
    }

    public function create()
    {
        return view('admin.students.create');
    }


    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.students.edit', compact('student'));
    }

    // Destroy method
    public function destroy($id)
    {
        $contact = Student::findOrFail($id);
        $contact->delete();

        return redirect()->route('student')->with('success', 'Contact deleted successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'address' => 'required',
            'password' => 'required'
        ]);
        $request['password'] = Hash::make('password');
        Student::create($request->all());
        return redirect()->route('student')->with('success', 'Contact created successfully.');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'address' => 'required',

        ]);

        $contact = Student::findOrFail($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->contact_number = $request->contact_number;
        $contact->address = $request->address;
        $contact->save();

        return redirect()->route('student')->with('success', 'Contact updated successfully.');
    }

}
