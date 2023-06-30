<?php

namespace App\Http\Controllers\Admin;

use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Models\Log;

class TeacherController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    
    public function index()
    {
        $response['teachers'] = Teacher::OrderBy('id','Desc')->get();
        $this->Logger->log('info', 'Lista de Professores');
        return view('admin.teacher.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        $this->Logger->log('info', 'Criar Professor');
        return view('admin.teacher.create.index');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'nBi' =>  'required',
            'email' =>  'email',
            'contact' =>  'required',
            'contactAlter' =>  'required',
            'literary' =>  'required',
            'specialty' =>  'required',
        ]);

        Teacher::create($data);
        $this->Logger->log('info', 'Cadastrou Professor');
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['teacher'] = Teacher::find($id);
        $this->Logger->log('info', 'Detalhes do Professor');
        return view('admin.teacher.details.index', $response);
    }

    public function edit($id)
    {
        $response['teacher'] = Teacher::find($id);
        $this->Logger->log('info', 'Editar Professor');
        return view('admin.teacher.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'nBi' =>  'required',
            'email' =>  'email',
            'contact' =>  'required',
            'contactAlter' =>  'required',
            'literary' =>  'required',
            'specialty' =>  'required',
        ]);

        Teacher::find($id)->update($data);
        $this->Logger->log('info', 'Atualizou o Professor');
        return redirect()->route('admin.teacher.show',$id)->with('edit', '1');
    }

    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        // Verifica se o Professor está associado a outro registro
        if ($teacher->subjects->count() > 0) {
            return redirect()->back()->with('teachers_destroy_error', '1');
        }
        $teacher->delete();
        $this->Logger->log('info', 'Eliminou o Professor');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Professor foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
