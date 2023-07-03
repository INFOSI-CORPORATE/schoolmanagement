<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Models\Log;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function index($id)
    {

        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {

            $response['logs'] = Log::where('USER_ID', $id)->orderBy('id', 'desc')->get();
            
            //Logger
            $this->Logger->log('info', 'Visualizou o Próprio Perfil');

            return view('admin.user.profile.index', $response);
        }
    }

    // Controller do nome e email
    public function dados(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ], [
                'name.required' => 'O campo nome deve ser preenchido.',
                'email.required' => 'O campo email deve ser preenchido.',
                'email.email' => 'O campo email deve ser um e-mail válido.',
            ]);

        $user = User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $this->Logger->log('info', 'Atualizou suas informações de perfil');
        return redirect()->back()->with('edit', '1');

    }

    //Controller da Password
    public function password(Request $request, $id)
    {

        $request->validate([
            'password' => ['required', 'confirmed', rules\password::defaults()],
        ],[
            'password.required' => 'o campo password deve ser preenchido.'
        ]);

        $hashSenha = User::find($id)->password;
        
        if (!password_verify($request->originPassword, $hashSenha)) {
            return redirect()->back()->with('error_password', '1');
        } elseif ($request->password == $request->password_confirmation) {
            $user = User::find($id)->update([
                'password' => Hash::make($request->password),
            ]);

            $this->Logger->log('info', 'Atualizou sua Palavra-Passe');
            return redirect()->back()->with('edit', '1');
        } else {
            return redirect()->back()->with('error_password', '1');
        }
    }


    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        $this->Logger->log('info', 'Eliminou seu perfil');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O User foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}