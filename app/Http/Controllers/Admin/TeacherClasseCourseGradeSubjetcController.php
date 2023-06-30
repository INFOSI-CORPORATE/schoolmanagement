<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Course;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\TeacherClasseCourseGradeSubjetc as Exam;
use App\Models\TeacherSubjectClasseRuleSchoolyear as Teacher;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;
use App\Classes\Logger;
use App\Models\Log;



//  Controller Principal

class TeacherClasseCourseGradeSubjetcController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    
    public function index()
    {
        $response['exams'] = Exam::OrderBy('id', 'Desc')->get();
        $this->Logger->log('info', 'Calendario de Exames');
        return view('admin.exam.list.index', $response);
    }


    public function create()
    {
        $response['teachers'] = Teacher::OrderBy('id', 'Desc')->get();
        $response['classes'] = Classe::OrderBy('id', 'Desc')->get();
        $response['courses'] = Course::OrderBy('id', 'Desc')->get();
        $response['grades'] = Grade::OrderBy('id', 'Desc')->get();
        $response['subjects'] = Subject::OrderBy('id', 'Desc')->get();
        $this->Logger->log('info', 'Criar Exame');

        return view('admin.exam.create.index', $response);
    }

    public function store(Request $request)
    {
        $data = $this->validate(
            $request,
            [
                'fk_teachers_id' => 'required',
                'fk_classes_id' => 'required',
                'fk_courses_id' => 'required',
                'fk_grades_id' => 'required',
                'fk_subjects_id' => 'required',
                'season' => 'required',
                'duration' => 'required',
                'start' => 'required|date|after_or_equal:today',
                'name' => 'required',
            ],
            [
                'fk_teachers_id.required' => 'O campo Professor deve ser selecionado',
                'fk_classes_id.required' => 'O campo Turma deve ser selecionado',
                'fk_courses_id.required' => 'O campo Curso deve ser selecionado',
                'fk_grades_id.required' => 'O campo Classe deve ser selecionado',
                'fk_subjects_id.required' => 'O campo Disciplina deve ser selecionado',
                'season.required' => 'O campo Turno deve ser selecionado',
                'duration.required' => 'O campo Duração deve ser preenchido',
                'start.required' => 'O campo Data Inicio deve ser selecionado',
                'start.after_or_equal' => 'Não pode adicionar uma data anterior',
                'name.required' => 'O campo Nome deve ser preenchido',
            ]
        );

        // Obtenha a data de início do formulário
        $start = $request->start;

        // Defina a data de término como a data de início + 1 dia
        $end = date('Y-m-d', strtotime($start . ' +1 day'));

        // Adicione a data de término ao array de dados antes de criar o registro Exam
        $data['end'] = $end;

        Exam::create($data);
        $this->Logger->log('info', 'Cadastrou Exame');
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['exam'] = Exam::find($id);
        if (!$response['exam']) {
            return redirect()->route('admin.exam.list');
        }
        $this->Logger->log('info', 'Detalhes do Exame');
        return view('admin.exam.details.index', $response);
    }

    public function edit($id)
    {
        $response['teachers'] = Teacher::OrderBy('id', 'Desc')->get();
        $response['classes'] = Classe::OrderBy('id', 'Desc')->get();
        $response['courses'] = Course::OrderBy('id', 'Desc')->get();
        $response['grades'] = Grade::OrderBy('id', 'Desc')->get();
        $response['subjects'] = Subject::OrderBy('id', 'Desc')->get();

        $response['exam'] = Exam::find($id);
        $this->Logger->log('info', 'Editar Exame');
        return view('admin.exam.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'fk_teachers_id' => 'required',
                'fk_classes_id' => 'required',
                'fk_courses_id' => 'required',
                'fk_grades_id' => 'required',
                'fk_subjects_id' => 'required',
                'season' => 'required',
                'duration' => 'required',
                'start' => 'required|date|after_or_equal:today',
                'name' => 'required',
            ],
            [
                'fk_teachers_id.required' => 'O campo Professor deve ser selecionado',
                'fk_classes_id.required' => 'O campo Turma deve ser selecionado',
                'fk_courses_id.required' => 'O campo Curso deve ser selecionado',
                'fk_grades_id.required' => 'O campo Classe deve ser selecionado',
                'fk_subjects_id.required' => 'O campo Disciplina deve ser selecionado',
                'season.required' => 'O campo Turno deve ser selecionado',
                'duration.required' => 'O campo Duração deve ser preenchido',
                'start.required' => 'O campo Data Inicio deve ser selecionado',
                'start.after_or_equal' => 'Não pode adicionar uma data anterior',
                'name.required' => 'O campo Nome deve ser preenchido',
            ]
        );

        // Obtenha a data de início do formulário
        $start = $request->start;

        // Defina a data de término como a data de início + 1 dia
        $end = date('Y-m-d', strtotime($start . ' +1 day'));

        // Adicione a data de término ao array de dados antes de criar o registro Exam
        $data['end'] = $end;
        
        Exam::find($id)->update($data);
        $this->Logger->log('info', 'Atualizou o Exame');
        return redirect()->route('admin.exam.show',$id)->with('edit', '1');
    }

    public function destroy($id)
    {
        Exam::find($id)->delete();
        $this->Logger->log('info', 'Eliminou a Exame');
        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Exame foi excluído.']);
        } else {
            return redirect()->route('admin.exam.list')->with('destroy', '1');
        }
    }
}