<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseClasseGradeStudentSchoolyear;
use App\Models\Classe;
use App\Models\Course;
use App\Models\Grade;
use App\Models\Schoolyear;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Models\Log;

class CourseClasseGradeStudentSchoolyearController extends Controller
{
private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['coursesClassesGradesStudentsSchoolyears'] = CourseClasseGradeStudentSchoolyear::OrderBy('id','Desc')->get();
        $response['schoolyears'] = Schoolyear::OrderBy('id','Desc')->get();
        return view('admin.courseClasseGradeStudentSchoolyear.list.index', $response);
    }


    public function create()
    {
        $response['courses'] = Course::OrderBy('id','Desc')->get();
        $response['classes'] = Classe::OrderBy('id','Desc')->get();
        $response['grades'] = Grade::OrderBy('id','Desc')->get();
        $response['students'] = Student::OrderBy('id','Desc')->get();
        $response['schoolyears'] = Schoolyear::OrderBy('id','Desc')->get();
        return view('admin.courseClasseGradeStudentSchoolyear.create.index', $response);
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'fk_courses_id' => 'required',
            'fk_classes_id' =>  'required',
            'fk_grades_id' => 'required',
            'fk_students_id' =>  'required',
            'fk_schoolyears_id' =>  'required',
            'season' => 'required',
        ],
        [
            'fk_courses_id.required' => 'O campo Curso deve ser selecionado',
            'fk_classes_id.required' => 'O campo Turma deve ser selecionado',
            'fk_grades_id.required' => 'O campo Classe deve ser selecionado',
            'fk_students_id.required' => 'O campo Aluno deve ser selecionado',
            'fk_schoolyears_id.required' => 'O campo Ano Lectivo deve ser selecionado',
            'season.required' => 'O campo Turno deve ser selecionado',
        ]);

        CourseClasseGradeStudentSchoolyear::create($data);
        return redirect()->back()->with('create', '1');
    }


    public function show($id)
    {
        $response['courseClasseGradeStudentSchoolyear'] = CourseClasseGradeStudentSchoolyear::find($id);
        return view('admin.courseClasseGradeStudentSchoolyear.details.index', $response);
    }


    public function edit($id)
    {
        $response['courses'] = Course::OrderBy('id','Desc')->get();
        $response['classes'] = Classe::OrderBy('id','Desc')->get();
        $response['grades'] = Grade::OrderBy('id','Desc')->get();
        $response['students'] = Student::OrderBy('id','Desc')->get();
        $response['schoolyears'] = Schoolyear::OrderBy('id','Desc')->get();
        $response['courseClasseGradeStudentSchoolyear'] = CourseClasseGradeStudentSchoolyear::find($id);
        return view('admin.courseClasseGradeStudentSchoolyear.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'fk_courses_id' => 'required',
            'fk_classes_id' =>  'required',
            'fk_grades_id' => 'required',
            'fk_students_id' =>  'required',
            'fk_schoolyears_id' =>  'required',
            'season' => 'required',
        ],
        [
            'fk_courses_id.required' => 'O campo Curso deve ser selecionado',
            'fk_classes_id.required' => 'O campo Turma deve ser selecionado',
            'fk_grades_id.required' => 'O campo Classe deve ser selecionado',
            'fk_students_id.required' => 'O campo Aluno deve ser selecionado',
            'fk_schoolyears_id.required' => 'O campo Ano lectivo deve ser selecionado',
            'season.required' => 'O campo Turno deve ser selecionado',
        ]);

        CourseClasseGradeStudentSchoolyear::find($id)->update($data);
        return redirect()->route('admin.courseClasseGradeStudentSchoolyear.list')->with('edit', '1');
    }


    public function destroy($id)
    {
        CourseClasseGradeStudentSchoolyear::find($id)->delete();
        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'A Matrícula foi excluída.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }

    
    /** methods get */


    public function getStudent($nProcess)
    {
        $students = Student::where('nProcess', $nProcess)->first();
        return response()->json($students);
    }
}
