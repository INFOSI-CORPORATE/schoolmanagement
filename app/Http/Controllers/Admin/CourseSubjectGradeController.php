<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseSubjectGrade;
use App\Models\Grade;
use App\Models\Subject;
use Illuminate\Http\Request;

class CourseSubjectGradeController extends Controller
{
    public function index()
    {
        $response['coursesSubjectsGrades'] = CourseSubjectGrade::OrderBy('id','Desc')->get();
        return view('admin.courseSubjectGrade.list.index', $response);
    }


    public function create()
    {
        $response['courses'] = Course::OrderBy('id','Desc')->get();
        $response['subjects'] = Subject::OrderBy('id','Desc')->get();
        $response['grades'] = Grade::OrderBy('id','Desc')->get();
        return view('admin.courseSubjectGrade.create.index', $response);
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'fk_courses_id' => 'required',
            'fk_subjects_id' =>  'required',
            'fk_grades_id' =>  'required',
        ],
        [
            'fk_courses_id.required' => 'O campo Curso deve ser selecionado',
            'fk_subjects_id.required' => 'O campo Disciplina deve ser selecionado',
            'fk_grades_id.required' => 'O campo Classe deve ser selecionado',
        ]);

        CourseSubjectGrade::create($data);
        return redirect()->back()->with('create', '1');
    }


    public function show($id)
    {
        $response['courseSubjectGrade'] = CourseSubjectGrade::find($id);
        return view('admin.courseSubjectGrade.details.index', $response);
    }


    public function edit($id)
    {
        $response['courses'] = Course::OrderBy('id','Desc')->get();
        $response['subjects'] = Subject::OrderBy('id','Desc')->get();
        $response['grades'] = Grade::OrderBy('id','Desc')->get();
        $response['courseSubjectGrade'] = CourseSubjectGrade::find($id);
        return view('admin.courseSubjectGrade.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'fk_courses_id' => 'required',
            'fk_subjects_id' =>  'required',
            'fk_grades_id' =>  'required',
        ],
        [
            'fk_courses_id.required' => 'O campo Curso deve ser selecionado',
            'fk_subjects_id.required' => 'O campo Disciplina deve ser selecionado',
            'fk_grades_id.required' => 'O campo Classe deve ser selecionado',
        ]);

        CourseSubjectGrade::find($id)->update($data);
        return redirect()->route('admin.courseSubjectGrade.list')->with('edit', '1');
    }


    public function destroy($id)
    {
        CourseSubjectGrade::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
