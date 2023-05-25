<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Rule;
use App\Models\Schoolyear;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeacherSubjectClasseRuleSchoolyear;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Models\Log;

class TeacherSubjectClasseRuleSchoolyearController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    
    public function index()
    {
        $response['teachersSubjectsClassesRulesSchoolyears'] = TeacherSubjectClasseRuleSchoolyear::OrderBy('id','Desc')->get();
        return view('admin.teacherSubjectClasseRuleSchoolyear.list.index', $response);
    }


    public function create()
    {
        $response['teachers'] = Teacher::OrderBy('id','Desc')->get();
        $response['subjects'] = Subject::OrderBy('id','Desc')->get();
        $response['classes'] = Classe::OrderBy('id','Desc')->get();
        $response['rules'] = Rule::OrderBy('id','Desc')->get();
        $response['schoolyears'] = Schoolyear::OrderBy('id','Desc')->get();
        return view('admin.teacherSubjectClasseRuleSchoolyear.create.index', $response);
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'fk_teachers_id' => 'required',
            'fk_subjects_id' =>  'required',
            'fk_classes_id' => 'required',
            'fk_rules_id' =>  'required',
            'fk_schoolyears_id' =>  'required',
            'season' => 'required',
        ],
        [
            'fk_teachers_id.required' => 'O campo Professor deve ser selecionado',
            'fk_subjects_id.required' => 'O campo Disciplina deve ser selecionado',
            'fk_classes_id.required' => 'O campo Turma deve ser selecionado',
            'fk_rules_id.required' => 'O campo Cargo deve ser selecionado',
            'fk_schoolyears_id.required' => 'O campo Ano lectivo deve ser selecionado',
            'season.required' => 'O campo Turno deve ser selecionado',
        ]);

        TeacherSubjectClasseRuleSchoolyear::create($data);
        return redirect()->back()->with('create', '1');
    }


    public function show($id)
    {
        $response['teacherSubjectClasseRuleSchoolyear'] = TeacherSubjectClasseRuleSchoolyear::find($id);
        return view('admin.teacherSubjectClasseRuleSchoolyear.details.index', $response);
    }


    public function edit($id)
    {
        $response['teachers'] = Teacher::OrderBy('id','Desc')->get();
        $response['subjects'] = Subject::OrderBy('id','Desc')->get();
        $response['classes'] = Classe::OrderBy('id','Desc')->get();
        $response['rules'] = Rule::OrderBy('id','Desc')->get();
        $response['schoolyears'] = Schoolyear::OrderBy('id','Desc')->get();
        $response['teacherSubjectClasseRuleSchoolyear'] = TeacherSubjectClasseRuleSchoolyear::find($id);
        return view('admin.teacherSubjectClasseRuleSchoolyear.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'fk_teachers_id' => 'required',
            'fk_subjects_id' =>  'required',
            'fk_classes_id' => 'required',
            'fk_rules_id' =>  'required',
            'fk_schoolyears_id' =>  'required',
            'season' => 'required',
        ],
        [
            'fk_teachers_id.required' => 'O campo Professor deve ser selecionado',
            'fk_subjects_id.required' => 'O campo Disciplina deve ser selecionado',
            'fk_classes_id.required' => 'O campo Turma deve ser selecionado',
            'fk_rules_id.required' => 'O campo Cargo deve ser selecionado',
            'fk_schoolyears_id.required' => 'O campo Ano lectivo deve ser selecionado',
            'season.required' => 'O campo Turno deve ser selecionado',
        ]);

        TeacherSubjectClasseRuleSchoolyear::find($id)->update($data);
        return redirect()->route('admin.teacherSubjectClasseRuleSchoolyear.list')->with('edit', '1');
    }


    public function destroy($id)
    {
        TeacherSubjectClasseRuleSchoolyear::find($id)->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Contrato foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
