<?php

namespace App\Http\Controllers\Admin;

use App\Models\Grade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Models\Log;

class GradeController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['grades'] = Grade::OrderBy('id', 'Desc')->get();

        $this->Logger->log('info', 'Lista de Classes');
        return view('admin.grade.list.index', $response);
    }


    public function create()
    {

        $this->Logger->log('info', 'Criar Classe');
        return view('admin.grade.create.index');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'details' => 'required|max:500',
        ], [
                'name.required' => 'O campo do nome é obrigatório',
                'details.required' => 'O campo do detalhes é obrigatório',
                'details.max' => 'O campo de detalhes não pode exceder os 500 caractéres',
            ]);

        Grade::create($data);

        $this->Logger->log('info', 'Cadastrou Classe');
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['grade'] = Grade::find($id);

        $this->Logger->log('info', 'Detalhes da Classe');
        return view('admin.grade.details.index', $response);
    }

    public function edit($id)
    {
        $response['grade'] = Grade::find($id);

        $this->Logger->log('info', 'Editar Classe');
        return view('admin.grade.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'details' => 'required|max:500',
        ]);

        Grade::find($id)->update($data);

        $this->Logger->log('info', 'Atualizou a Classe');
        return redirect()->route('admin.grade.show',$id)->with('edit', '1');
    }

    public function destroy($id)
    {
        Grade::find($id)->delete();
        $this->Logger->log('info', 'Eliminou a Classe');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'A Classe foi excluída.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}