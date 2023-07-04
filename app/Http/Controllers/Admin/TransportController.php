<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransportController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['transports'] = Transport::OrderBy('id', 'Desc')->get();

        $this->Logger->log('info', 'Lista de Transportes');
        return view('admin.transport.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        $this->Logger->log('info', 'Criar Transporte');
        return view('admin.transport.create.index');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'plate' => 'required',
            'model' => 'required',
            'capacity' => 'required|max:100',
            'route' => 'required',
            'state' => 'required',
            'safe' => 'required',
            'documentation' => 'required|mimes:pdf',
            'details' => 'required|max:500',
        ], [
            'plate.required' => 'O campo Placa é obrigatório.',
            'model.required' => 'O campo Model é obrigatório.',
            'capacity.required' => 'O campo Capacidade é obrigatório.',
            'route.required' => 'O campo Rota é obrigatório.',
            'state.required' => 'O campo Estado é obrigatório.',
            'safe.required' => 'O campo Seguro é obrigatório.',
            'documentation.required' => 'O campo Documentação é obrigatório.',
            'details.required' => 'O campo Detalhes é obrigatório.',
            'details.max' => 'O campo detalhes não pode exceder os 500 caractéres.',
            'capacity.max' => 'A capacidade do transporte não pode exceder os 100 lugares .',
        ]);

        if ($request->documentation) {
            
            $image = Storage::putFile('public/transport', $request->documentation);
            $imageName = str_replace('public/transport/','',$image);
            $data['documentation'] = $imageName;
        }

        Transport::create($data);

        $this->Logger->log('info', 'Cadastrou Transporte');
        return redirect()->back()->with('create', '1');


        
    }

    public function show($id)
    {
        $response['transport'] = Transport::find($id);

        $this->Logger->log('info', 'Detalhes do Transporte');
        return view('admin.transport.details.index', $response);
    }

    public function edit($id)
    {
        $response['transport'] = Transport::find($id);

        $this->Logger->log('info', 'Editar Transporte');
        return view('admin.transport.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'plate' => 'required',
            'model' => 'required',
            'capacity' => 'required|max:100',
            'route' => 'required',
            'state' => 'required',
            'safe' => 'required',
            'documentation' => 'mimes:pdf',
            'details' => 'required|max:500',
        ], [
            'plate.required' => 'O campo Placa é obrigatório.',
            'model.required' => 'O campo Model é obrigatório.',
            'capacity.required' => 'O campo Capacidade é obrigatório.',
            'route.required' => 'O campo Rota é obrigatório.',
            'state.required' => 'O campo Estado é obrigatório.',
            'safe.required' => 'O campo Seguro é obrigatório.',
            'documentation.mimes' => 'O campo Documentação deve ser um arquivo PDF.',
            'details.required' => 'O campo Detalhes é obrigatório.',
            'details.max' => 'O campo detalhes não pode exceder os 500 caractéres.',
            'capacity.max' => 'A capacidade do transporte não pode exceder os 100 lugares .',
        ]);

        $transport = Transport::find($id);

        if ($request->documentation) {
            Storage::disk('transport')->delete($transport->documentation);
            
            $image = Storage::putFile('public/transport', $request->documentation);
            $imageName = str_replace('public/transport/','',$image);
            $data['documentation'] = $imageName;

        }
        $transport->update($data);

        $this->Logger->log('info', 'Atualizou o Transporte');
        return redirect()->route('admin.transport.show',$id)->with('edit', '1');
    }

    public function destroy($id)
    {
        Transport::find($id)->delete();

        $this->Logger->log('info', 'Eliminou o Transporte');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Transporte foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}


// Ao trabalhar com o storage do laravel 8, com o comando "php artisan storage:link" ele cria um link entre o directório "storage/app/public" e o directório "public storage"
// Então para o salvamento dos meus documentos pdf, estou usando o seguinte código no meu controller:

// $data['documentation'] = Storage::putFile('transport', $request->documentation);
// Transport::create($data);
