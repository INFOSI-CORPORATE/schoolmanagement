<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schoolyear;
use Illuminate\Http\Request;

class SchoolyearController extends Controller
{
    public function index()
    {
        $response['schoolyears'] = Schoolyear::OrderBy('id','Desc')->get();
        return view('admin.schoolyear.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        return view('admin.schoolyear.create.index');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'details' => 'required|max:500',
        ]);

        Schoolyear::create($data);
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['schoolyear'] = Schoolyear::find($id);
        return view('admin.schoolyear.details.index', $response);
    }

    public function edit($id)
    {
        $response['schoolyear'] = Schoolyear::find($id);
        return view('admin.schoolyear.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'details' => 'required|max:500',
        ]);

        Schoolyear::find($id)->update($data);
        return redirect()->route('admin.schoolyear.list')->with('edit', '1');
    }

    public function destroy($id)
    {
        Schoolyear::find($id)->delete();
        
        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Ano Lectivo foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
