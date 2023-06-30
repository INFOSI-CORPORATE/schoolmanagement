<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ativitie;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Models\Log;

class AtivitieController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['ativities'] = Ativitie::OrderBy('id', 'Desc')->get();
        $this->Logger->log('info', 'Calendario de Atividades');
        return view('admin.ativities.list.index', $response);
    }

    public function create()
    {
        $this->Logger->log('info', 'Criar Atividade');
        return view('admin.ativities.create.index');
    }

    public function store(Request $request)
    {
        $data = $this->validate(
            $request,
            [
                'title' => 'required|string',
                'details' => 'required|string|max:500',
                'location' => 'required',
                'duration' => 'required',
                'price' => 'required|integer',
                'status' => 'required',
                'start' => 'required|date|after_or_equal:today',
            ],
            [
                'title.required' => 'O campo nome de Atividade é obrigatório.',
                'details.required' => 'O campo detalhes de Atividade é obrigatório.',
                'location.required' => 'O campo localização de Atividade é obrigatório.',
                'duration.required' => 'O campo duração de Atividade é obrigatório.',
                'price.required' => 'O campo preço de Atividade é obrigatório.',
                'status.required' => 'O campo estado de Atividade é obrigatório.',
                'start.required' => 'O campo Data Inicio deve ser selecionado',
                'start.after_or_equal' => 'Não pode adicionar uma data anterior',
                'details.max' => 'O campo detalhes não pode exceder do 500 caractéres',
                'price.integer' => 'O campo de preço não pode conter caractére não numérico',
            ]
        );

        // Obtenha a data de início do formulário
        $start = $request->start;

        // Defina a data de término como a data de início + 1 dia
        $end = date('Y-m-d', strtotime($start . ' +1 day'));

        // Adicione a data de término ao array de dados antes de criar o registro Exam
        $data['end'] = $end;

        Ativitie::create($data);
        $this->Logger->log('info', 'Cadastrou Atividade');
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['ativitie'] = Ativitie::find($id);
        if (!$response['ativitie']) {
            $this->Logger->log('info', 'Calendario de Atividades');
            return redirect()->route('admin.ativities.list');
        }
        $this->Logger->log('info', 'Detalhes da Atividade');
        return view('admin.ativities.details.index', $response);
    }

    public function edit($id)
    {
        $response['ativitie'] = Ativitie::find($id);
        $this->Logger->log('info', 'Editar Atividade');
        return view('admin.ativities.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'title' => 'required|string',
                'details' => 'required|string|max:500',
                'location' => 'required',
                'duration' => 'required',
                'price' => 'required|integer|max:999999',
                'status' => 'required',
            ],
            [
                'title.required' => 'O campo nome de Atividade é obrigatório.',
                'details.required' => 'O campo detalhes de Atividade é obrigatório.',
                'location.required' => 'O campo localização de Atividade é obrigatório.',
                'duration.required' => 'O campo duração de Atividade é obrigatório.',
                'price.required' => 'O campo preço de Atividade é obrigatório.',
                'status.required' => 'O campo estado de Atividade é obrigatório.',
                'details.max' => 'O campo não pode exceder do 500 caractéres',
                'price.integer' => 'O campo de preço não pode conter caractére não numérico',
                'price.max' => 'O campo de preço não pode os 999999 números',
            ]
        );

        // Obtenha a data de início do formulário
        $start = $request->start;

        // Defina a data de término como a data de início + 1 dia
        $end = date('Y-m-d', strtotime($start . ' +1 day'));

        // Adicione a data de término ao array de dados antes de criar o registro Exam
        $data['end'] = $end;

        Ativitie::find($id)->update($data);
        $this->Logger->log('info', 'Actualizou Atividade');
        return redirect()->route('admin.ativities.show',$id)->with('edit', '1');
    }

    public function destroy($id)
    {
        $atividade = Ativitie::find($id);
        $this->Logger->log('info', 'Eliminou a Atividade');

        if (!$atividade) {
            return response()->json(['success' => false, 'message' => 'Atividade não encontrada.'], 404);
        }

        $atividade->delete();
        return response()->json(['success' => true, 'message' => 'A Atividade foi excluída.']);
    }

}