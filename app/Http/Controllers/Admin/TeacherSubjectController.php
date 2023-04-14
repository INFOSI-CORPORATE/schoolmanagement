<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeacherSubject;
use Illuminate\Http\Request;

class TeacherSubjectController extends Controller
{

    public function index()
    {
        $response['teachersSubjects'] = TeacherSubject::OrderBy('id','Desc')->get();
        return view('admin.teacherSubject.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        $response['teachers'] = Teacher::get();
        $response['subjects'] = Subject::get();
        return view('admin.teacherSubject.create.index', $response);
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'fk_teachers_id' => 'required',
            'fk_subjects_id' =>  'required',
        ]);

        TeacherSubject::create($data);
        return redirect()->back()->with('create', '1');
    }


    public function show($id)
    {
        $response['teacherSubject'] = TeacherSubject::find($id);
        return view('admin.teacherSubject.details.index', $response);
    }


    public function edit($id)
    {
        $response['teachers'] = Teacher::get();
        $response['subjects'] = Subject::get();
        $response['teacherSubject'] = TeacherSubject::find($id);
        return view('admin.teacherSubject.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'fk_teachers_id' => 'required',
            'fk_subjects_id' =>  'required',
        ]);

        TeacherSubject::find($id)->update($data);
        return redirect()->back()->with('edit', '1');
    }


    public function destroy($id)
    {
        TeacherSubject::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
