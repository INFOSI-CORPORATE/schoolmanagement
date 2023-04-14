<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schoolyear;
use App\Models\Student;
use App\Models\StudentSchoolyear;
use Illuminate\Http\Request;

class StudentSchoolyearController extends Controller
{
    public function index()
    {
        $response['studentsSchoolyears'] = StudentSchoolyear::OrderBy('id','Desc')->get();
        return view('admin.studentSchoolyear.list.index', $response)->with('success', '1');
    }



    public function create()
    {
        $response['students'] = Student::get();
        $response['schoolyears'] = Schoolyear::get();
        return view('admin.studentSchoolyear.create.index', $response);
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'fk_students_id' => 'required',
            'fk_schoolyears_id' =>  'required',
        ]);

        StudentSchoolyear::create($data);
        return redirect()->back()->with('create', '1');
    }


    public function show($id)
    {
        $response['studentSchoolyear'] = StudentSchoolyear::find($id);
        return view('admin.studentSchoolyear.details.index', $response);
    }


    public function edit($id)
    {
        $response['students'] = Student::get();
        $response['schoolyears'] = Schoolyear::get();
        $response['studentSchoolyear'] = StudentSchoolyear::find($id);
        return view('admin.studentSchoolyear.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'fk_students_id' => 'required',
            'fk_schoolyears_id' =>  'required',
        ]);

        StudentSchoolyear::find($id)->update($data);
        return redirect()->back()->with('edit', '1');
    }


    public function destroy($id)
    {
        StudentSchoolyear::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
