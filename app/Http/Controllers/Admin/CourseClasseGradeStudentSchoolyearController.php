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
use Illuminate\Support\Facades\Storage;

class CourseClasseGradeStudentSchoolyearController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['coursesClassesGradesStudentsSchoolyears'] = CourseClasseGradeStudentSchoolyear::OrderBy('id', 'Desc')->get();
        $response['schoolyears'] = Schoolyear::OrderBy('id', 'Desc')->get();
        $response['classes'] = Classe::OrderBy('id', 'Desc')->get();
        $this->Logger->log('info', 'Lista de Alunos Matriculados');
        return view('admin.courseClasseGradeStudentSchoolyear.list.index', $response);
    }


    public function create()
    {
        $response['courses'] = Course::OrderBy('id', 'Desc')->get();
        $response['classes'] = Classe::OrderBy('id', 'Desc')->get();
        $response['grades'] = Grade::OrderBy('id', 'Desc')->get();
        $response['students'] = Student::OrderBy('id', 'Desc')->get();
        $response['schoolyears'] = Schoolyear::OrderBy('id', 'Desc')->get();
        $this->Logger->log('info', 'Matricular Aluno');
        return view('admin.courseClasseGradeStudentSchoolyear.create.index', $response);
    }


    public function store(Request $request)
    {
        $data = $this->validate(
            $request,
            [
                'fk_courses_id' => 'required',
                'fk_classes_id' => 'required',
                'fk_grades_id' => 'required',
                'fk_students_id' => 'required',
                'fk_schoolyears_id' => 'required',
                'season' => 'required',
                'image' => 'required|image|mimes:png,jpg,jpeg|max:500',
            ],
            [
                'fk_courses_id.required' => 'O campo Curso deve ser selecionado',
                'fk_classes_id.required' => 'O campo Turma deve ser selecionado',
                'fk_grades_id.required' => 'O campo Classe deve ser selecionado',
                'fk_students_id.required' => 'O campo Aluno deve ser selecionado',
                'fk_schoolyears_id.required' => 'O campo Ano Lectivo deve ser selecionado',
                'season.required' => 'O campo Turno deve ser selecionado',
                'image.required' => 'O campo da imagem é obrigatória.',
                'image.mimes' => 'O campo de imagem só pode receber arquivos do tipo: png, jpg ou jpeg',
                'image.max' => 'A imagem é muito grande, deve conter no máximo 500KB'
            ]
        );

        $image = Storage::putFile('public/images', $request->image);
        $imageName = str_replace('public/images/', '', $image);
        $data['image'] = $imageName;

        CourseClasseGradeStudentSchoolyear::create($data);
        $this->Logger->log('info', 'Matriculou um Aluno');
        return redirect()->back()->with('create', '1');
    }


    public function show($id)
    {
        $response['courseClasseGradeStudentSchoolyear'] = CourseClasseGradeStudentSchoolyear::find($id);
        $this->Logger->log('info', 'Detalhes da Matricula');
        return view('admin.courseClasseGradeStudentSchoolyear.details.index', $response);
    }


    public function edit($id)
    {
        $response['courses'] = Course::OrderBy('id', 'Desc')->get();
        $response['classes'] = Classe::OrderBy('id', 'Desc')->get();
        $response['grades'] = Grade::OrderBy('id', 'Desc')->get();
        $response['students'] = Student::OrderBy('id', 'Desc')->get();
        $response['schoolyears'] = Schoolyear::OrderBy('id', 'Desc')->get();
        $response['courseClasseGradeStudentSchoolyear'] = CourseClasseGradeStudentSchoolyear::find($id);
        $this->Logger->log('info', 'Editar Matricula');
        return view('admin.courseClasseGradeStudentSchoolyear.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'fk_courses_id' => 'required',
                'fk_classes_id' => 'required',
                'fk_grades_id' => 'required',
                'fk_students_id' => 'required',
                'fk_schoolyears_id' => 'required',
                'season' => 'required',
                'image' => 'required|image|mimes:png,jpg,jpeg|dimensions:min_width=100,min_height=100,max_width=500,max_height=500|max:500',
            ],
            [
                'fk_courses_id.required' => 'O campo Curso deve ser selecionado',
                'fk_classes_id.required' => 'O campo Turma deve ser selecionado',
                'fk_grades_id.required' => 'O campo Classe deve ser selecionado',
                'fk_students_id.required' => 'O campo Aluno deve ser selecionado',
                'fk_schoolyears_id.required' => 'O campo Ano Lectivo deve ser selecionado',
                'season.required' => 'O campo Turno deve ser selecionado',
                'image.required' => 'O campo da imagem é obrigatória.',
                'image.mimes' => 'O campo de imagem só pode receber arquivos do tipo: png, jpg ou jpeg'
            ]
        );



        $registration = CourseClasseGradeStudentSchoolyear::find($id);

        if ($request->image) {
            Storage::disk('images')->delete($registration->image);
            
            $image = Storage::putFile('public/images', $request->image);
            $imageName = str_replace('public/images/','',$image);
            $data['image'] = $imageName;

        }
        $registration->update($data);

        $this->Logger->log('info', 'Atualizou a Matricula');
        return redirect()->route('admin.courseClasseGradeStudentSchoolyear.show', $id)->with('edit', '1');
    }


    public function destroy($id)
    {
        CourseClasseGradeStudentSchoolyear::find($id)->delete();
        $this->Logger->log('info', 'Removeu a Matricula');

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

    /** methods get alunos matriculados */
    public function getRegistration($nProcess)
    {
        $students = Student::where('nProcess', $nProcess)->first();
        $studentExists = CourseClasseGradeStudentSchoolyear::where('fk_students_id', $students->id)->first();

        if (isset($studentExists)) {
            return response()->json($students);
        } else {
            return response()->json("");
        }

    }

    public function getNProcess($student)
    {
        $nProcess = $student;
        return response()->json($nProcess);
    }

}
