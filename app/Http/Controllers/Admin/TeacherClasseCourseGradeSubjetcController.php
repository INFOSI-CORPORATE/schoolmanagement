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



//  Controller Principal

class TeacherClasseCourseGradeSubjetcController extends Controller
{
    public function index()
    {
        $response['exams'] = Exam::OrderBy('id', 'Desc')->get();
        return view('admin.exam.list.index', $response);
    }


    public function create()
    {
        $response['teachers'] = Teacher::OrderBy('id', 'Desc')->get();
        $response['classes'] = Classe::OrderBy('id', 'Desc')->get();
        $response['courses'] = Course::OrderBy('id', 'Desc')->get();
        $response['grades'] = Grade::OrderBy('id', 'Desc')->get();
        $response['subjects'] = Subject::OrderBy('id', 'Desc')->get();

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
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['exam'] = Exam::find($id);
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
        return redirect()->back()->with('edit', '1');
    }

    public function destroy($id)
    {
        Exam::find($id)->delete();
        return redirect('/admin/exam/list')->with('destroy', '1');
    }
}