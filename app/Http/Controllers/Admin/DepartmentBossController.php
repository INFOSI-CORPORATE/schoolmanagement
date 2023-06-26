<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\DepartmentBoss;
use App\Models\Employee;
use Illuminate\Http\Request;

class DepartmentBossController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function index()
    {
        $response['departmentsBosses'] = DepartmentBoss::OrderBy('id','Desc')->get();
        $this->Logger->log('info', 'Lista de Chefes de Departamentos');
        return view('admin.departmentboss.list.index', $response);
    }

    public function create()
    {
        $response['employees'] = Employee::OrderBy('id','Desc')->get();
        $response['departments'] = Department::OrderBy('id','Desc')->get();
        $this->Logger->log('info', 'Criar Chefe de Departamento');
        return view('admin.departmentboss.create.index', $response);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'fk_employees_id' => 'required',
            'fk_departments_id' => 'required',
        ], [
            'fk_employees_id.required' => 'O campo do Funcionário é obrigatório',
            'fk_departments_id.required' => 'O campo do Departamento é obrigatório',
        ]);


        DepartmentBoss::create($data);
        $this->Logger->log('info', 'Cadastrou um Chefe de Departamento');
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['departmentBoss'] = DepartmentBoss::find($id);
        $this->Logger->log('info', 'Detalhes do Chefe de Departamento');
        return view('admin.departmentboss.details.index', $response);
    }

    public function edit($id)
    {
        $response['employees'] = Employee::OrderBy('id','Desc')->get();
        $response['departments'] = Department::OrderBy('id','Desc')->get();
        $response['departmentBoss'] = DepartmentBoss::find($id);
        $this->Logger->log('info', 'Editar o Chefe de Departamento');
        return view('admin.departmentboss.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'fk_employees_id' => 'required',
            'fk_departments_id' => 'required',
        ], [
            'fk_employees_id.required' => 'O campo do Funcionário é obrigatório',
            'fk_departments_id.required' => 'O campo do Departamento é obrigatório',
        ]);

        $data['dateBirth'] = $request->dateBirth;

        DepartmentBoss::find($id)->update($data);
        $this->Logger->log('info', 'Atualizou o Chefe de Departamento');
        return redirect()->route('admin.employee.show', $id)->with('edit', '1');
    }

    public function destroy($id)
    {
        DepartmentBoss::find($id)->delete();

        $this->Logger->log('info', 'Eliminou o Chefe do Departamento');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Chefe do Departamento foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}


