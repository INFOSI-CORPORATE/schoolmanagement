<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function index()
    {
        $response['employees'] = Employee::OrderBy('id', 'Desc')->get();
        $this->Logger->log('info', 'Lista de Funcionários');
        return view('admin.employee.list.index', $response);
    }


    public function create()
    {
        $response['departments'] = Department::OrderBy('id','Desc')->get();
        $this->Logger->log('info', 'Criar Funcionário');
        return view('admin.employee.create.index', $response);
    }


    public function store(Request $request)
    {

        $data = $this->validate($request, [
            'name' => 'required',
            'nBi' => 'required',
            'address' => 'required',
            'country' => 'required',
            'contact' => 'required',
            'contactAlter' => 'required',
            'email' => 'required|email',
            'admission' => 'required',
            'office' => 'required',
            'fk_departments_id' => 'required',
            'sex' => 'required',
        ], [
            'name.required' => 'O campo do nome é obrigatório',
            'nBi.required' => 'O campo do BI é obrigatório',
            'address.required' => 'O campo do Endereço é obrigatório',
            'country.required' => 'O campo do País é obrigatório',
            'contact.required' => 'O campo do Contacto é obrigatório',
            'contactAlter.required' => 'O campo do Contacto Alternativo é obrigatório',
            'email.required' => 'O campo do E-mail é obrigatório',
            'email.email' => 'E-mail inserido é inválido',
            'admission.required' => 'O campo de Admitido é obrigatório',
            'office.required' => 'O campo do Cargo é obrigatório',
            'fk_departments_id.required' => 'O campo do Departamento é obrigatório',
            'sex.required' => 'O campo do Sexo é obrigatório',
        ]);


        Employee::create($data);
        $this->Logger->log('info', 'Cadastrou um Funcionário');
        return redirect()->back()->with('create', '1');
    }


    public function show($id)
    {
        $response['employee'] = Employee::find($id);

        $dateBirth = Carbon::parse($response['employee']->dateBirth);
        $response['employee']->dateBirth = $dateBirth->isoFormat('DD [de] MMMM [de] YYYY');


        $this->Logger->log('info', 'Detalhes do Funcionário');
        return view('admin.employee.details.index', $response);
    }


    public function edit($id)
    {
        $response['departments'] = Department::OrderBy('id','Desc')->get();
        $response['employee'] = Employee::find($id);
        $this->Logger->log('info', 'Editar o Funcionário');
        return view('admin.employee.edit.index', $response);
    }


    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'name' => 'required',
            'nBi' => 'required',
            'address' => 'required',
            'country' => 'required',
            'contact' => 'required',
            'contactAlter' => 'required',
            'email' => 'required|email',
            'admission' => 'required',
            'office' => 'required',
            'fk_departments_id' => 'required',
            'sex' => 'required',
        ], [
            'name.required' => 'O campo do nome é obrigatório',
            'nBi.required' => 'O campo do BI é obrigatório',
            'address.required' => 'O campo do Endereço é obrigatório',
            'country.required' => 'O campo do País é obrigatório',
            'contact.required' => 'O campo do Contacto é obrigatório',
            'contactAlter.required' => 'O campo do Contacto Alternativo é obrigatório',
            'email.required' => 'O campo do E-mail é obrigatório',
            'email.email' => 'E-mail inserido é inválido',
            'admission.required' => 'O campo de Admitido é obrigatório',
            'office.required' => 'O campo do Cargo é obrigatório',
            'fk_departments_id.required' => 'O campo do Departamento é obrigatório',
            'sex.required' => 'O campo do Sexo é obrigatório',
        ]);

        $data['dateBirth'] = $request->dateBirth;

        Employee::find($id)->update($data);
        $this->Logger->log('info', 'Atualizou o Funcionário');
        return redirect()->route('admin.employee.show', $id)->with('edit', '1');
    }


    public function destroy($id)
    {
        Employee::find($id)->delete();

        // Verifica se o Funcionário está associado a outro registro
        // if ($employee->departments->count() > 0) {
        //     return redirect()->back()->with('employees_destroy_error', '1');
        // }
        // $employee->delete();

        $this->Logger->log('info', 'Eliminou o Funcionário');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Funcionário foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }


    }
}