<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\CourseClasseGradeStudentSchoolyear;
use App\Models\Schoolyear;
use App\Models\Student;
use App\Models\Transport;
use App\Models\TransportPay;
use Illuminate\Http\Request;

class TransportPayController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['transportPays'] = TransportPay::OrderBy('id', 'Desc')->get();
        $response['schoolyears'] = Schoolyear::OrderBy('id', 'Desc')->get();

        $this->Logger->log('info', 'Lista de Pagamentos de Transportes');
        return view('admin.transportPay.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        $response['schoolyears'] = Schoolyear::OrderBy('id','Desc')->get();
        $response['transports'] = Transport::OrderBy('id', 'Desc')->get();
        $response['students'] = Student::orderBy('id', 'desc')
            ->get();

        $response['registrations'] = CourseClasseGradeStudentSchoolyear::orderBy('id', 'desc')
            ->get();

        $this->Logger->log('info', 'Criar Pagamento de Transporte');
        return view('admin.transportPay.create.index', $response);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'month' => 'required',
            'price' => 'required|integer',
            'state' => 'required',
            'fk_students_id' => 'required',
            'fk_transports_id' => 'required',
            'fk_schoolyears_id' => 'required'
        ], [
                'name.required' => 'O campo do mês é obrigatório',
                'price.required' => 'O campo do preço é obrigatório',
                'state.required' => 'O campo do Estado é obrigatório',
                'fk_students_id.required' => 'O campo do Aluno é obrigatório',
                'fk_transports_id.required' => 'O campo do Transporte é obrigatório',
                'fk_schoolyears_id.required' => 'O campo do Ano Lectivo é obrigatório',
                'price.integer' => 'O campo de preço não pode conter caractéres não numericos',

            ]);

        TransportPay::create($data);

        $this->Logger->log('info', 'Cadastrou Pagamento de Transporte');
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['transportPay'] = TransportPay::find($id);

        $this->Logger->log('info', 'Detalhes da Pagamento de Transporte');
        return view('admin.transportPay.details.index', $response);
    }

    public function edit($id)
    {
        $response['schoolyears'] = Schoolyear::OrderBy('id','Desc')->get();
        $response['transports'] = Transport::OrderBy('id', 'Desc')->get();
        $response['registrations'] = CourseClasseGradeStudentSchoolyear::orderBy('id', 'desc')
            ->get();
        $response['transportPay'] = TransportPay::find($id);

        $this->Logger->log('info', 'Editar Pagamento de Transporte');
        return view('admin.transportPay.edit.index', $response);
    }

    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'month' => 'required',
            'price' => 'required|integer',
            'state' => 'required',
            'fk_schoolyears_id' => 'required',
            'fk_transports_id' => 'required',
            'fk_students_id' => 'required'
        ], [
                'name.required' => 'O campo do mês é obrigatório',
                'price.required' => 'O campo do preço é obrigatório',
                'state.required' => 'O campo do Estado é obrigatório',
                'fk_students_id.required' => 'O campo do Aluno é obrigatório',
                'fk_transports_id.required' => 'O campo do Transporte é obrigatório',
                'fk_schoolyears_id.required' => 'O campo do Ano Lectivo é obrigatório',
                'price.integer' => 'O campo de preço não pode conter caractéres não numericos',
            ]);


        TransportPay::find($id)->update($data);

        $this->Logger->log('info', 'Atualizou a Pagamento de Transporte');
        return redirect()->route('admin.transportPay.show',$id)->with('edit', '1');
    }

    public function destroy($id)
    {
        $TransportPay = TransportPay::find($id);

        // Verifica se a Pagamento de Transporte está associada a outro registro
        if ($TransportPay->students->count() > 0) {
            return redirect()->back()->with('transports_destroy_error', '1');
        }
        TransportPay::find($id)->delete();
        $this->Logger->log('info', 'Eliminou a Pagamento de Transporte');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Pagamento de Transporte foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
