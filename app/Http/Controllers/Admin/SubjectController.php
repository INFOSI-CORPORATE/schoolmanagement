<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Models\Log;

class SubjectController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['subjects'] = Subject::OrderBy('id','Desc')->get();
        $this->Logger->log('info', 'Lista de Disciplinas');
        return view('admin.subject.list.index', $response);
    }


    public function create()
    {
        $this->Logger->log('info', 'Criar Disciplina');
        return view('admin.subject.create.index');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'details' => 'required|max:500',
        ]);

        Subject::create($data);
        $this->Logger->log('info', 'Cadastrou Disciplina');
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['subject'] = Subject::find($id);
        $this->Logger->log('info', 'Detalhes da Disciplina');
        return view('admin.subject.details.index', $response);
    }

    public function edit($id)
    {
        $response['subject'] = Subject::find($id);
        $this->Logger->log('info', 'Editar Disciplina');
        return view('admin.subject.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'details' => 'required|max:500',
        ]);

        Subject::find($id)->update($data);
        $this->Logger->log('info', 'Atualizou a Disciplina');
        return redirect()->route('admin.subject.show',$id)->with('edit', '1');
    }

    public function destroy($id)
    {
        Subject::find($id)->delete();
        $this->Logger->log('info', 'Eliminou a Disciplina');
        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'A Disciplina foi excluída.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
