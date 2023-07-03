<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Exception;
use App\Classes\Logger;
use App\Models\Log;

class CourseController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function index()
    {
        $response['courses'] = Course::OrderBy('id', 'Desc')->get();
        $this->Logger->log('info', 'Lista de Curso');
        return view('admin.course.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        $this->Logger->log('info', 'Criar Curso');
        return view('admin.course.create.index');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'details' => 'required|max:500',
            'duration' => 'required',
        ], [
                'name.required' => 'O campo nome do Curso é obrigatório.',
                'details.required' => 'O campo Detalhes do Curso é obrigatório.',
                'details.max' => 'O campo Detalhes não pode exceder do 500 caractéres',
                'duration.required' => 'O campo Duração de Curso é obrigatório.'
            ]);

        $Exists = Course::where('name', $data['name'])->exists();

        if ($Exists) {
            return redirect()->back()->with('courses_exist', '1');
        }

        try {
            Course::create($data);
        } catch (Exception $ex) {
            return $ex;
        }

        $this->Logger->log('info', 'Cadastrou Curso');
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['course'] = Course::find($id);
        $this->Logger->log('info', 'Detalhes do Curso');
        return view('admin.course.details.index', $response);
    }

    public function edit($id)
    {
        $response['course'] = Course::find($id);
        $this->Logger->log('info', 'Editar o Curso');
        return view('admin.course.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'details' => 'required|max:500',
            'duration' => 'required',
        ], [
                'name.required' => 'O campo nome do Curso é obrigatório.',
                'details.required' => 'O campo Detalhes do Curso é obrigatório.',
                'details.max' => 'O campo Detalhes não pode exceder do 500 caractéres',
            ]);

        Course::find($id)->update($data);
        $this->Logger->log('info', 'Atualizou o Curso');
        return redirect()->route('admin.course.show',$id)->with('edit', '1');

        
    }



    public function destroy($id)
    {
        Course::find($id)->delete();
        $this->Logger->log('info', 'Eliminou o Curso');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O curso foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
