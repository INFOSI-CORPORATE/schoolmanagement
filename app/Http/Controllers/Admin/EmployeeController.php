<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $response['employees'] = Employee::OrderBy('id','Desc')->get();
        return view('admin.employee.list.index', $response);
    }

    
    public function create()
    {
        return view('admin.employee.create.index');
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
            'email' => 'required',
            'admission' => 'required',
            'office' => 'required',
            'department' => 'required',
            'sex' => 'required',
            'dateBirth' => 'required'
        ], [
                'name.required' => 'O campo do nome é obrigatório',
                'details.required' => 'O campo do detalhes é obrigatório',
                'details.max' => 'O campo de detalhes não pode exceder os 500 caractéres',
            ]);

            // Name
            // nBi
            // address
            // country
            // contact
            // contactAlter
            // email
            // admission
            // office
            // department
            // sex
            // dateBirth
            

            Employee::create($data);

        return redirect()->back()->with('create','1');
    }

    
    public function show($id)
    {
        $response['employee'] = Employee::find($id);
        return view('admin.employee.details.index', $response);
    }

    
    public function edit($id)
    {
        $response['employee'] = Employee::find($id);
        return view('admin.employee.edit.index', $response);
    }

    
    public function update(Request $request, $id)
    {
        return redirect()->route('admin.employee.list.index')->with('edit','1');
    }

    
    public function destroy($id)
    {
        Employee::find($id)->delete();
        return redirect()->back()->with('destroy','1');
    }
}
