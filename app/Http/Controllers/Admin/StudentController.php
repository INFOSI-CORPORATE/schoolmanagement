<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Classes\Logger;
use App\Models\Log;

class StudentController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['students'] = Student::OrderBy('id', 'Desc')->get();
        return view('admin.student.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        $response['total'] = Student::withTrashed()->count();
        return view('admin.student.create.index', $response);
    }


    public function store(Request $request)
    {

        $data = $this->validate($request, [
            'name' => 'required',
            'nProcess' => 'required',
            'nBi' => 'required|unique:students,nBi,' . $request->id . ',id',
            'contact' => 'required',
            'contactAlter' => 'required',
            'email' => 'required|email',
            'dateBirth' => 'required',
        ], [
                'name.required' => 'O campo Nome deve ser preenchido',
                'nProcess.required' => 'O campo Nº de Processo deve ser preenchido',
                'nBi.required' => 'O campo BI deve ser preenchido',
                'nBi.unique' => 'Este BI já está cadastrado',
                'contact.required' => 'O campo Contacto deve ser preenchido',
                'contactAlter.required' => 'O campo Contacto Alternativo deve ser preenchido',
                'email.required' => 'O campo E-mail deve ser preenchido',
                'email.email' => 'O E-mail é invalido',
                'dateBirth.required' => 'O campo Data de Nascimento deve ser preenchido',
            ]);

        $Exists = Student::where('name', $data['name'])->exists();

        if ($Exists) {
            return redirect()->back()->with('students_exist', '1');
        }

        try {
            Student::create($data);
        } catch (Exception $ex) {
            return $ex;
        }

        return redirect()->back()->with('create', '1');
    }


    public function show($id)
    {
        $response['student'] = Student::find($id);
        return view('admin.student.details.index', $response);

    }


    public function edit($id)
    {
        $response['student'] = Student::find($id);
        $response['total'] = Student::withTrashed()->count();
        return view('admin.student.edit.index', $response);
    }


    public function update(Request $request, $id)
    {


        $data = $request->validate([
            'name' => 'required',
            'nProcess' => 'required',
            'nBi' => 'required',
            'contact' => 'required',
            'contactAlter' => 'required',
            'email' => 'required',
            'dateBirth' => 'required',
        ]);
        Student::find($id)->update($data);
        return redirect()->route('admin.student.list')->with('edit', '1');
    }


    public function destroy($id)
    {

        $student = Student::find($id);
        
        // Verifica se o aluno está associado a outro registro
        if ($student->schoolyears->count() > 0) {
            return redirect()->back()->with('students_destroy_error', '1');
        }

        $student->delete();
        
        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O aluno foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }

    }


}