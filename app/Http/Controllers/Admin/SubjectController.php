<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $response['subjects'] = Subject::OrderBy('id','Desc')->get();
        return view('admin.subject.list.index', $response);
    }


    public function create()
    {
        return view('admin.subject.create.index');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'details' => 'required|max:500',
        ]);

        Subject::create($data);
        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['subject'] = Subject::find($id);
        return view('admin.subject.details.index', $response);
    }

    public function edit($id)
    {
        $response['subject'] = Subject::find($id);
        return view('admin.subject.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'details' => 'required|max:500',
        ]);

        Subject::find($id)->update($data);
        return redirect()->route('admin.subject.list')->with('edit', '1');
    }

    public function destroy($id)
    {
        Subject::find($id)->delete();
        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'A Disciplina foi excluída.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
