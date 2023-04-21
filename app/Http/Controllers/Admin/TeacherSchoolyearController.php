<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeacherSchoolyear;
use App\Models\Teacher;
use App\Models\Schoolyear;

class TeacherSchoolyearController extends Controller
{
    public function index()
    {
        $response['teachersSchoolyears'] = TeacherSchoolyear::OrderBy('id','Desc')->get();
        return view('admin.teacherSchoolyear.list.index', $response)->with('success', '1');
    }



    public function create()
    {
        $response['teachers'] = Teacher::OrderBy('id','Desc')->get();
        $response['schoolyears'] = Schoolyear::OrderBy('id','Desc')->get();
        return view('admin.teacherSchoolyear.create.index', $response);
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'fk_teachers_id' => 'required',
            'fk_schoolyears_id' =>  'required',
        ],
        [
            'fk_teachers_id.required' => 'O campo Professor deve ser selecionado',
            'fk_schoolyears_id.required' => 'O campo Ano Letivo deve ser selecionado',
        ]);

        TeacherSchoolyear::create($data);
        return redirect()->back()->with('create', '1');
    }


    public function show($id)
    {
        $response['teacherSchoolyear'] = TeacherSchoolyear::find($id);
        return view('admin.teacherSchoolyear.details.index', $response);
    }


    public function edit($id)
    {
        $response['teachers'] = Teacher::OrderBy('id','Desc')->get();
        $response['schoolyears'] = Schoolyear::OrderBy('id','Desc')->get();
        $response['teacherSchoolyear'] = TeacherSchoolyear::find($id);
        return view('admin.teacherSchoolyear.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'fk_teachers_id' => 'required',
            'fk_schoolyears_id' =>  'required',
        ],
        [
            'fk_teachers_id.required' => 'O campo Professor deve ser selecionado',
            'fk_schoolyears_id.required' => 'O campo Ano Letivo deve ser selecionado',
        ]);

        TeacherSchoolyear::find($id)->update($data);
        return redirect()->back()->with('edit', '1');
    }


    public function destroy($id)
    {
        TeacherSchoolyear::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
