<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Bedroom;
use App\Models\Student;
use Illuminate\Http\Request;
use PDF;
class BedroomController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function index()
    {
        $response['bedrooms'] = Bedroom::OrderBy('id','Desc')->get();
        $this->Logger->log('info', 'Lista de Quarto');
        return view('admin.bedroom.list.index', $response)->with('success', '1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->Logger->log('info', 'Criar Quarto');
        return view('admin.bedroom.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'numberStudent' => 'required',
            'numberBad' => 'required',
            'description' => 'required|max:500',
        ],[
            'name.required' => 'O campo nome do Quarto é obrigatório.',
            'numberStudent.required' => 'O campo Número de Estudante  é obrigatório.',
            'numberBad.required' => 'O campo Número de Cama  é obrigatório.',
            'description.required' => 'O campo detalhes sobre o Quarto  é obrigatório.',
            'description.max' => 'O campo detalhes sobre o Quarto não pode exceder os 500 caractéres.',
        ]);

        Bedroom::create($data);

        $this->Logger->log('info', 'Cadastrou un Quarto');
        return redirect()->back()->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['bedrooms'] = Bedroom::find($id);

        $this->Logger->log('info', 'Detalhes do Quarto');
        return view('admin.bedroom.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['bedrooms'] = Bedroom::find($id);
        $this->Logger->log('info', 'Editar o Quarto');
        return view('admin.bedroom.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {




        $data = $request->validate([
            'name' => 'required',
            'numberStudent' => 'required',
            'numberBad' => 'required',
            'description' => 'required|max:500',
        ], [
            'name.required' => 'O campo nome do Quarto é obrigatório.',
            'numberStudent.required' => 'O campo Número de Estudante  é obrigatório.',
            'numberBad.required' => 'O campo Número de Cama  é obrigatório.',
            'description.required' => 'O campo detalhes sobre o Quarto  é obrigatório.',
            'description.max' => 'O campo detalhes sobre o Quarto não pode exceder os 500 caractéres.',
        ]);

        $data['dateBirth'] = $request->dateBirth;

        Bedroom::find($id)->update($data);
        $this->Logger->log('info', 'Atualizou o Quarto');
        return redirect()->route('admin.bedroom.show', $id)->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bedroom::find($id)->delete();

        $this->Logger->log('info', 'Eliminou o Quarto');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Quarto foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
