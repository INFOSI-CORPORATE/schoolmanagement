<?php

namespace App\Http\Controllers;

use App\Models\Dormitory;
use Illuminate\Http\Request;

class DormitoryController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }


    public function index()
    {
        $response['dormitories'] = Dormitory::OrderBy('id', 'Desc')->get();
        $this->Logger->log('info', 'Lista de Dormitórios');
        return view('admin.dormitory.list.index', $response)->with('success', '1');
    }

    public function create()
    {
        $response['dormitories']=Dormitory::get();
        $this->Logger->log('info', 'Criar Aluno');
        return view('admin.student.create.index', $response);
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
            'description' => 'required',
        ],


        [
            'name.required' => 'O campo do nome do Dormitório é obrigatório',
            'numberStudent.required' => 'O campo  Número de estudante  é obrigatório',
            'numberBad.required' => 'O campo do Endereço é obrigatório',
            'description.required' => 'O campo descrição é obrigatório',
        ]);


        Dormitory::create($data);
        $this->Logger->log('info', 'Cadastrou um Dormitório');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
