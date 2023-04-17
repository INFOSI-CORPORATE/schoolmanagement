<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseClasseGradeStudent;
use App\Models\Course;
use App\Models\Classe;
use App\Models\Grade;
use App\Models\Student;
use App\Models\StudentSchoolyear;
use Illuminate\Http\Request;

class CourseClasseGradeStudentController extends Controller
{
    public function index()
    {
        $response['coursesClassesGradesStudents'] = CourseClasseGradeStudent::OrderBy('id','Desc')->get();
        return view('admin.courseClasseGradeStudent.list.index', $response);
    }


    public function create()
    {
        $response['courses'] = Course::OrderBy('id','Desc')->get();
        $response['classes'] = Classe::OrderBy('id','Desc')->get();
        $response['grades'] = Grade::OrderBy('id','Desc')->get();
        $response['studentsSchoolyears'] = StudentSchoolyear::OrderBy('id','Desc')->get();
        return view('admin.courseClasseGradeStudent.create.index', $response);
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'fk_courses_id' => 'required',
            'fk_classes_id' =>  'required',
            'fk_grades_id' => 'required',
            'fk_students_id' =>  'required',
        ],
        [
            'fk_courses_id.required' => 'O campo Curso deve ser selecionado',
            'fk_classes_id.required' => 'O campo Turma deve ser selecionado',
            'fk_grades_id.required' => 'O campo Classe deve ser selecionado',
            'fk_students_id.required' => 'O campo Aluno deve ser selecionado',
        ]);

        CourseClasseGradeStudent::create($data);
        return redirect()->back()->with('create', '1');
    }


    public function show($id)
    {
        $response['courseClasseGradeStudent'] = CourseClasseGradeStudent::find($id);
        return view('admin.courseClasseGradeStudent.details.index', $response);
    }


    public function edit($id)
    {
        $response['courses'] = Course::OrderBy('id','Desc')->get();
        $response['classes'] = Classe::OrderBy('id','Desc')->get();
        $response['grades'] = Grade::OrderBy('id','Desc')->get();
        $response['studentsSchoolyears'] = StudentSchoolyear::OrderBy('id','Desc')->get();
        $response['courseClasseGradeStudent'] = CourseClasseGradeStudent::find($id);
        return view('admin.courseClasseGradeStudent.create.index', $response);
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate( [
            'fk_courses_id' => 'required',
            'fk_classes_id' =>  'required',
            'fk_grades_id' => 'required',
            'fk_students_id' =>  'required',
        ],
        [
            'fk_courses_id.required' => 'O campo Curso deve ser selecionado',
            'fk_classes_id.required' => 'O campo Turma deve ser selecionado',
            'fk_grades_id.required' => 'O campo Classe deve ser selecionado',
            'fk_students_id.required' => 'O campo Aluno deve ser selecionado',
        ]);

        CourseClasseGradeStudent::find($id)->update($data);
        return redirect()->back()->with('edit', '1');
    }


    public function destroy($id)
    {
        CourseClasseGradeStudent::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
