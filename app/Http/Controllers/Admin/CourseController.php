<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Exception;

class CourseController extends Controller
{
    public function index()
    {
        $response['courses'] = Course::OrderBy('id', 'Desc')->get();
        return view('admin.course.list.index', $response)->with('success', '1');
    }


    public function create()
    {
        return view('admin.course.create.index');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'details' => 'required',
            'duration' => 'required',
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

        return redirect()->back()->with('create', '1');
    }

    public function show($id)
    {
        $response['course'] = Course::find($id);
        return view('admin.course.details.index', $response);
    }

    public function edit($id)
    {
        $response['course'] = Course::find($id);
        return view('admin.course.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'details' => 'required',
            'duration' => 'required',
        ]);

        Course::find($id)->update($data);
        return redirect()->back()->with('edit', '1');
    }

    public function destroy($id)
    {
        Course::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
