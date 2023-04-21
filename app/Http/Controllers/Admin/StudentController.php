<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

class StudentController extends Controller
{
    public function index()
    {
        $response['students'] = Student::OrderBy('id', 'Desc')->get();
        return view('admin.student.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        return view('admin.student.create.index');
    }


    public function store(Request $request)
    {

        $data = $this->validate($request, [
            'name' => 'required',
            'nProcess' => 'required|numeric',
            'nBi' => 'required',
            'contact' => 'required',
            'contactAlter' => 'required',
            'email' => 'required',
            'dateBirth' => 'required',
        ]);

        $Exists = Student::where('name', $data['name'])->exists();

        if ($Exists) {
            return redirect()->back()->with('students_exist', '1');
        }

        try {
            Student::create($data);
        } catch (Exception $ex) {
            return $ex;
        }

        return redirect()->back()->with('create', '1');
    }


    public function show($id)
    {
        $response['student'] = Student::find($id);
        return view('admin.student.details.index', $response);

    }


    public function edit($id)
    {
        $response['student'] = Student::find($id);
        return view('admin.student.edit.index', $response);
    }


    public function update(Request $request, $id)
    {


        $data = $request->validate([
            'name' => 'required',
            'nProcess' => 'required|numeric',
            'nBi' => 'required',
            'contact' => 'required',
            'contactAlter' => 'required',
            'email' => 'required',
            'dateBirth' => 'required',
        ]);
        Student::find($id)->update($data);
        return redirect()->back()->with('edit', '1');
    }


    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect()->back()->with('destroy', '1');

    }
}