<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $response['classes'] = Classe::OrderBy('id','Desc')->get();
        return view('admin.classe.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        return view('admin.classe.create.index');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'details' =>  'required',
        ]);

        Classe::create($data);
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['classe'] = classe::find($id);
        return view('admin.classe.details.index', $response);
    }

    public function edit($id)
    {
        $response['classe'] = Classe::find($id);
        return view('admin.classe.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'details' =>  'required',
        ]);

        Classe::find($id)->update($data);
        return redirect()->route('admin.classe.list')->with('edit', '1');
    }

    public function destroy($id)
    {
        Classe::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
