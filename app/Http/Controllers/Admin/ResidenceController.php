<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Residence;
use Illuminate\Http\Request;

class ResidenceController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function index()
    {
        $response['residences'] = Residence::OrderBy('id', 'Desc')->get();

        $this->Logger->log('info', 'Lista de Residência');
        return view('admin.residence.list.index', $response)->with('success', '1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->Logger->log('info', 'Criar Residência');
        return view('admin.residence.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['residences'] = Residence::find($id);

        $this->Logger->log('info', 'Detalhes da  Residência');
        return view('admin.residence.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['residences'] = Residence::find($id);

        $this->Logger->log('info', 'Editar Residência');
        return view('admin.residence.edit.index', $response);
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
        Residence::find($id)->delete();

        $this->Logger->log('info', 'Eliminou uma  Residência');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Residência foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
