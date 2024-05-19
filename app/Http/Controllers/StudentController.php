<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use App\Models\Student;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = Student::paginate(2);
        return view('etudiant.index')->with('students', $students);
    }

    public function create()
    {
        return view('etudiant.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required| mimes:png,jpg,jpeg,webp',
            'name' => 'required',

            'level' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);
        if ($request->has("image")) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "_" . $extension;
            $path = public_path('images');
            $file->move($path, $filename);
        }
        $input = $request->all();
        $input["image"] = $filename;
        Student::create($input);

        return redirect()->route('etudiant.index')->with('success', 'New student is added successfully');
    }


    public function show(string $id): View
    {
        $students = Student::find($id);
        return view('etudiant.show')->with('students', $students);
    }


    public function edit(string $id): View
    {
        $students = Student::find($id);
        return view('etudiant.edit')->with('students', $students);
    }


    public function update(Request $request, string $id): RedirectResponse
    {
        $students = Student::find($id);
        $input = $request->all();
        $students->update($input);
        return redirect('etudiant')->with('flash_message', 'student Updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('etudiant')->with('flash_message', 'deleted!');
    }
}
