@extends('layouts.merge.dashboard')
@section('title', 'Detalhes da Atividade')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Detalhes</h1>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">


                            <div class="row justify-content-between mb-4">
                                <div class="col-12 col-md-6 col-lg-6 mt-5 ml-5">
                                    <h2 class="h3 page-title">
                                        Nome: {{ $ativitie->title }}
                                    </h2>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 text-right mt-5">
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('admin.ativities.edit', $ativitie->id) }}" class="btn btn-md btn-primary shadow-sm text-end">Editar</a>
                                        
                                        <a class="btn btn-md btn-danger shadow-sm text-end delete-button"
                                            data-based-id="{{ route('admin.ativities.destroy', $ativitie->id) }}">Remover</a>
                                    </div>
                                </div>
                            </div>


                            <div class="row align-items-center">

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Localização</b>
                                    </h5>
                                    <p class="text-dark">{{ $ativitie->location }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Duração</b>
                                    </h5>
                                    <p class="text-dark">{{ $ativitie->duration }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Preço</b>
                                    </h5>
                                    <p class="text-dark">{{number_format($ativitie->price, 2, '.', ',') }} KZ</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Estado</b>
                                    </h5>
                                    <p class="text-dark">{{ $ativitie->status }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Data de Realização</b>
                                    </h5>
                                    <p class="text-dark">{{ $ativitie->start }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Detalhes</b>
                                    </h5>
                                    <p class="text-dark">{{ $ativitie->details }}</p>
                                </div>


                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-7 mb-2">
                                    <hr>
                                    <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $ativitie->created_at }}
                                    </p>
                                    <p class="mb-1 text-dark"><b>Última Actualização</b> {{ $ativitie->updated_at }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>

    </div>
@endsection('content')
