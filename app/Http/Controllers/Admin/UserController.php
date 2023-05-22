<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $response['users'] = User::OrderBy('id', 'Desc')->get();
        return view('admin.user.list.index', $response);
    }

    public function create()
    {
        $response['roles'] = Role::get();
        return view('admin.user.create.index', $response);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'roles' => 'required',
        ]);
        if ($request->password != $request->password_confirmation) {
            return redirect()->back()->with('');
        } else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->roles()->attach($request->roles);

            return redirect()->back()->with('create', '1');
        }

    }

    public function show($id)
    {
        $response['user'] = User::find($id);
        return view('admin.user.details.index', $response);
    }

    public function edit($id)
    {
        $response['user'] = User::find($id);
        $response['roles'] = Role::get();
        return view('admin.user.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'roles' => 'required',
        ]);

        if ($request->password != $request->password_confirmation) {
            return redirect()->back()->with('');
        } else {
            $user = User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->roles()->attach($request->roles);

            return redirect()->back()->with('edit', '1');
        }
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('destroy','1');
    }
}