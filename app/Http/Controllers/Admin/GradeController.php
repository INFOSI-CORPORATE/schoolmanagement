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
        return view('admin.grade.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        return view('admin.grade.create.index');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'details' =>  'required',
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
            'details' =>  'required',
        ]);

        Grade::find($id)->update($data);
        return redirect()->back()->with('edit', '1');
    }

    public function destroy($id)
    {
        Grade::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
