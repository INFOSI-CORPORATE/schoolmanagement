<?php

namespace App\Http\Controllers\Admin;

use App\Models\Grade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $response['grades'] = Grade::OrderBy('id','Desc')->get();
        return view('admin.grade.list.index', $response);
    }


    public function create()
    {
        return view('admin.grade.create.index');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'details' => 'required|max:500',
        ],[
            'name.required' => 'O campo do nome é obrigatório',
            'details.required' => 'O campo do detalhes é obrigatório',
            'details.max' => 'O campo de detalhes não pode exceder os 500 caractéres',
        ]);

        Grade::create($data);
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['grade'] = Grade::find($id);
        return view('admin.grade.details.index', $response);
    }

    public function edit($id)
    {
        $response['grade'] = Grade::find($id);
        return view('admin.grade.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'details' => 'required|max:500',
        ]);

        Grade::find($id)->update($data);
        return redirect()->route('admin.grade.list')->with('edit', '1');
    }

    public function destroy($id)
    {
        Grade::find($id)->delete();
        
        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'A Classe foi excluída.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
