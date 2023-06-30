<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schoolyear;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Models\Log;

class SchoolyearController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['schoolyears'] = Schoolyear::OrderBy('id','Desc')->get();
        
        $this->Logger->log('info', 'Lista de Anos Lectivos');
        return view('admin.schoolyear.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        
        $this->Logger->log('info', 'Criar Ano Lectivo');
        return view('admin.schoolyear.create.index');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'details' => 'required|max:500',
        ],[
            'name.required' => 'O campo nome é obrigatório.',
            'details.required' => 'O campo detalhes é obrigatório.',
            'details.max' => 'O campo detalhes não pode exceder os 500 caractéres.',
        ]);

        Schoolyear::create($data);
        
        $this->Logger->log('info', 'Cadastrou Ano Lectivo');
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['schoolyear'] = Schoolyear::find($id);
        
        $this->Logger->log('info', 'Detalhes do Ano Lectivo');
        return view('admin.schoolyear.details.index', $response);
    }

    public function edit($id)
    {
        $response['schoolyear'] = Schoolyear::find($id);
        
        $this->Logger->log('info', 'Editar Ano Lectivo');
        return view('admin.schoolyear.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'details' => 'required|max:500',
        ],[
            'name.required' => 'O campo nome é obrigatório.',
            'details.required' => 'O campo detalhes é obrigatório.',
            'details.max' => 'O campo detalhes não pode exceder os 500 caractéres.',
        ]);

        Schoolyear::find($id)->update($data);
        
        $this->Logger->log('info', 'Atualizou o Ano Lectivo');
        return redirect()->route('admin.schoolyear.show',$id)->with('edit', '1');
    }

    public function destroy($id)
    {
        Schoolyear::find($id)->delete();
        
        $this->Logger->log('info', 'Eliminou o Ano Lectivo');
        
        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Ano Lectivo foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
