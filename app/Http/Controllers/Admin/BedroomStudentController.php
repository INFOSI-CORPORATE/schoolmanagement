<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Bedroom;
use App\Models\BedroomStudent;
use App\Models\CourseClasseGradeStudentSchoolyear;
use App\Models\Schoolyear;
use App\Models\Student;
use Illuminate\Http\Request;

class BedroomStudentController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['bedroomStudents'] = BedroomStudent::OrderBy('id', 'Desc')->get();
        $response['schoolyears'] = Schoolyear::OrderBy('id', 'Desc')->get();

        $this->Logger->log('info', 'Lista de Alunos ao Dormitório');
        return view('admin.bedroomStudent.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        $response['schoolyears'] = Schoolyear::OrderBy('id', 'Desc')->get();
        $response['bedrooms'] = Bedroom::OrderBy('id', 'Desc')->get();
        $response['students'] = Student::orderBy('id', 'desc')
            ->get();

        $response['registrations'] = CourseClasseGradeStudentSchoolyear::orderBy('id', 'desc')
            ->get();

        $this->Logger->log('info', 'Criar Alunos ao Dormitório');
        return view('admin.bedroomStudent.create.index', $response);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'state' => 'required',
            'fk_students_id' => 'required',
            'fk_bedrooms_id' => 'required',
            'fk_schoolyears_id' => 'required',
            'description' => 'required|max:500',
        ], [
            'state.required' => 'O campo do Estado é obrigatório',
            'fk_students_id.required' => 'O campo do Aluno é obrigatório',
            'fk_bedrooms_id.required' => 'O campo do Dormitório é obrigatório',
            'fk_schoolyears_id.required' => 'O campo do Ano Lectivo é obrigatório',
            'description.required' => 'O campo detalhes sobre o Quarto  é obrigatório.',
            'description.max' => 'O campo detalhes sobre o Quarto não pode exceder os 500 caractéres.',
        ]);

        BedroomStudent::create($data);

        $this->Logger->log('info', 'Cadastrou Alunos ao Dormitório');
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['bedroomStudent'] = BedroomStudent::find($id);

        $this->Logger->log('info', 'Detalhes da Alunos ao Dormitório');
        return view('admin.bedroomStudent.details.index', $response);
    }

    public function edit($id)
    {
        $response['schoolyears'] = Schoolyear::OrderBy('id', 'Desc')->get();
        $response['bedrooms'] = Bedroom::OrderBy('id', 'Desc')->get();
        $response['registrations'] = CourseClasseGradeStudentSchoolyear::orderBy('id', 'desc')
            ->get();
        $response['bedroomStudent'] = BedroomStudent::find($id);

        $this->Logger->log('info', 'Editar Alunos ao Dormitório');
        return view('admin.bedroomStudent.edit.index', $response);
    }

    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'state' => 'required',
            'fk_schoolyears_id' => 'required',
            'fk_bedrooms_id' => 'required',
            'fk_students_id' => 'required',
            'description' => 'required|max:500',
        ], [
            'state.required' => 'O campo do Estado é obrigatório',
            'fk_students_id.required' => 'O campo do Aluno é obrigatório',
            'fk_bedrooms_id.required' => 'O campo do Dormitório é obrigatório',
            'fk_schoolyears_id.required' => 'O campo do Ano Lectivo é obrigatório',
            'description.required' => 'O campo detalhes sobre o Quarto  é obrigatório.',
            'description.max' => 'O campo detalhes sobre o Quarto não pode exceder os 500 caractéres.',
        ]);


        BedroomStudent::find($id)->update($data);

        $this->Logger->log('info', 'Atualizou a Alunos ao Dormitório');
        return redirect()->route('admin.bedroomStudent.show', $id)->with('edit', '1');
    }

    public function destroy($id)
    {
        $bedroomStudent = BedroomStudent::find($id);

        BedroomStudent::find($id)->delete();
        $this->Logger->log('info', 'Eliminou a Alunos ao Dormitório');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'Alunos ao Dormitório foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
