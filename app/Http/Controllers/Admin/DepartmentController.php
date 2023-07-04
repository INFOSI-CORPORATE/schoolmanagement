<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function index()
    {
        $response['departments'] = Department::OrderBy('id','Desc')->get();

        $this->Logger->log('info', 'Lista de Departamentos');
        return view('admin.department.list.index', $response)->with('success', '1');
    }


    public function create()
    {

        $this->Logger->log('info', 'Criar Departamento');
        return view('admin.department.create.index');
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

        Department::create($data);

        $this->Logger->log('info', 'Cadastrou Departamento');
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['department'] = Department::find($id);

        $this->Logger->log('info', 'Detalhes do Departamento');
        return view('admin.department.details.index', $response);
    }

    public function edit($id)
    {
        $response['department'] = Department::find($id);

        $this->Logger->log('info', 'Editar Departamento');
        return view('admin.department.edit.index', $response);
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

        Department::find($id)->update($data);

        $this->Logger->log('info', 'Atualizou Departamento');
        return redirect()->route('admin.department.show',$id)->with('edit', '1');
    }

    public function destroy($id)
    {
        Department::find($id)->delete();

        $this->Logger->log('info', 'Eliminou o Departamento');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Departamento foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
