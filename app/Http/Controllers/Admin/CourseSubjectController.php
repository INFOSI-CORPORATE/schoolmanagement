<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseSubject;
use App\Models\Subject;
use Illuminate\Http\Request;

class CourseSubjectController extends Controller
{
    public function index()
    {
        $response['coursesSubjects'] = CourseSubject::OrderBy('id','Desc')->get();
        return view('admin.courseSubject.list.index', $response);
    }


    public function create()
    {
        $response['courses'] = Course::OrderBy('id','Desc')->get();
        $response['subjects'] = Subject::OrderBy('id','Desc')->get();
        return view('admin.courseSubject.create.index', $response);
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'fk_courses_id' => 'required',
            'fk_subjects_id' =>  'required',
        ],
        [
            'fk_courses_id.required' => 'O campo Curso deve ser selecionado',
            'fk_subjects_id.required' => 'O campo Disciplina deve ser selecionado',
        ]);

        CourseSubject::create($data);
        return redirect()->back()->with('create', '1');
    }


    public function show($id)
    {
        $response['courseSubject'] = CourseSubject::find($id);
        return view('admin.courseSubject.details.index', $response);
    }


    public function edit($id)
    {
        $response['courses'] = Subject::OrderBy('id','Desc')->get();
        $response['subjects'] = Subject::OrderBy('id','Desc')->get();
        $response['courseSubject'] = courseSubject::find($id);
        return view('admin.courseSubject.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'fk_courses_id' => 'required',
            'fk_subjects_id' =>  'required',
        ],
        [
            'fk_courses_id.required' => 'O campo Curso deve ser selecionado',
            'fk_subjects_id.required' => 'O campo Disciplina deve ser selecionado',
        ]);

        CourseSubject::find($id)->update($data);
        return redirect()->back()->with('edit', '1');
    }


    public function destroy($id)
    {
        CourseSubject::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
