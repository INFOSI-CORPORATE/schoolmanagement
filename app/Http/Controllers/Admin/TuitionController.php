<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\CourseClasseGradeStudentSchoolyear;
use App\Models\Schoolyear;
use App\Models\Student;
use App\Models\Tuition;
use Illuminate\Http\Request;

class TuitionController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['tuitions'] = Tuition::OrderBy('id', 'Desc')->get();
        $response['schoolyears'] = Schoolyear::OrderBy('id', 'Desc')->get();
        $this->Logger->log('info', 'Lista de Propinas');
        return view('admin.tuition.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        $response['schoolyears'] = Schoolyear::OrderBy('id','Desc')->get();
        $response['students'] = Student::orderBy('id', 'desc')
            ->get();

        $response['registrations'] = CourseClasseGradeStudentSchoolyear::orderBy('id', 'desc')
            ->get();

        $this->Logger->log('info', 'Criar Propina');
        return view('admin.tuition.create.index', $response);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'month' => 'required',
            'price' => 'required|integer',
            'state' => 'required',
            'fk_students_id' => 'required',
            'fk_schoolyears_id' => 'required'
        ], [
                'name.required' => 'O campo do mês é obrigatório',
                'price.required' => 'O campo do preço é obrigatório',
                'state.required' => 'O campo do Estado é obrigatório',
                'fk_students_id.required' => 'O campo do Aluno é obrigatório',
                'fk_schoolyears_id.required' => 'O campo do Ano Lectivo é obrigatório',
                'price.integer' => 'O campo de preço não pode conter caractéres não numericos',

            ]);

        Tuition::create($data);

        $this->Logger->log('info', 'Cadastrou Propina');
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['tuition'] = Tuition::find($id);

        $this->Logger->log('info', 'Detalhes da Propina');
        return view('admin.tuition.details.index', $response);
    }

    public function edit($id)
    {
        $response['schoolyears'] = Schoolyear::OrderBy('id','Desc')->get();
        $response['registrations'] = CourseClasseGradeStudentSchoolyear::orderBy('id', 'desc')
            ->get();
        $response['tuition'] = Tuition::find($id);

        $this->Logger->log('info', 'Editar Propina');
        return view('admin.tuition.edit.index', $response);
    }

    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'month' => 'required',
            'price' => 'required|integer',
            'state' => 'required',
            'fk_schoolyears_id' => 'required',
            'fk_students_id' => 'required'
        ], [
                'name.required' => 'O campo do mês é obrigatório',
                'price.required' => 'O campo do preço é obrigatório',
                'state.required' => 'O campo do Estado é obrigatório',
                'fk_students_id.required' => 'O campo do Aluno é obrigatório',
                'fk_schoolyears_id.required' => 'O campo do Ano Lectivo é obrigatório',
                'price.integer' => 'O campo de preço não pode conter caractéres não numericos',
            ]);


        Tuition::find($id)->update($data);

        $this->Logger->log('info', 'Atualizou a Propina');
        return redirect()->route('admin.tuition.show',$id)->with('edit', '1');
    }

    public function destroy($id)
    {
        $tuition = Tuition::find($id);

        // Verifica se a propina está associada a outro registro
        if ($tuition->students->count() > 0) {
            return redirect()->back()->with('propinas_destroy_error', '1');
        }
        Tuition::find($id)->delete();
        $this->Logger->log('info', 'Eliminou a Propina');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'A Propina foi excluída.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
