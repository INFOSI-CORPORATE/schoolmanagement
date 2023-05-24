<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    public function index()
    {
        $response['rules'] = Rule::OrderBy('id','Desc')->get();
        return view('admin.rule.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        return view('admin.rule.create.index');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'details' => 'required|max:500',
        ],[
            'name.required' => 'O campo nome do cargo é obrigatório',
            'details.max' => 'O campo detalhes não deve exceder os 500 caracteres',
        ]
    );

        Rule::create($data);
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['rule'] = Rule::find($id);
        return view('admin.rule.details.index', $response);
    }

    public function edit($id)
    {
        $response['rule'] = Rule::find($id);
        return view('admin.rule.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'details' => 'required|max:500',
        ],[
            'name.required' => 'O campo nome do cargo é obrigatório',
            'details.max' => 'O campo detalhes não deve exceder os 500 caracteres',
        ]);

        Rule::find($id)->update($data);
        return redirect()->route('admin.rule.list')->with('edit', '1');
    }

    public function destroy($id)
    {
        Rule::find($id)->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Cargo foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
