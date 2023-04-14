<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseTeacher;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseTeacherController extends Controller
{
    public function index()
    {
        $response['coursesTeachers'] = CourseTeacher::OrderBy('id','Desc')->get();
        return view('admin.courseTeacher.list.index', $response);
    }


    public function create()
    {
        $response['courses'] = Course::get();
        $response['teachers'] = Teacher::get();
        return view('admin.courseTeacher.create.index', $response);
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'fk_courses_id' => 'required',
            'fk_teachers_id' =>  'required',
        ]);

        CourseTeacher::create($data);
        return redirect()->back()->with('create', '1');
    }


    public function show($id)
    {
        $response['courseTeacher'] = CourseTeacher::find($id);
        return view('admin.courseTeacher.details.index', $response);
    }


    public function edit($id)
    {
        $response['courses'] = Teacher::get();
        $response['teachers'] = Teacher::get();
        $response['courseTeacher'] = CourseTeacher::find($id);
        return view('admin.courseTeacher.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'fk_courses_id' => 'required',
            'fk_teachers_id' =>  'required',
        ]);

        CourseTeacher::find($id)->update($data);
        return redirect()->back()->with('edit', '1');
    }


    public function destroy($id)
    {
        CourseTeacher::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
