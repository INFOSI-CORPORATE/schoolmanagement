@extends('layouts.merge.dashboard')
@section('title', 'Detalhes do Exame')
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
                                        Nome do Exame: {{ $exam->name }}
                                    </h2>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 text-right mt-5 p-0">
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('admin.exam.edit', $exam->id) }}"
                                            class="btn btn-md btn-primary shadow-sm text-end">Editar</a>

                                        <a class="btn btn-md btn-danger shadow-sm text-end delete-button"
                                            data-based-id="{{ route('admin.exam.destroy', $exam->id) }}">Remover</a>
                                    </div>
                                </div>

                            </div>


                            <div class="row align-items-center">

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Curso</b>
                                    </h5>
                                    <p class="text-dark">{{ $exam->courses->name }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Professor</b>
                                    </h5>
                                    <p class="text-dark">{{ $exam->teachers->name }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Turma</b>
                                    </h5>
                                    <p class="text-dark">{{ $exam->classes->name }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Classe</b>
                                    </h5>
                                    <p class="text-dark">{{ $exam->grades->name }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Turma</b>
                                    </h5>
                                    <p class="text-dark">{{ $exam->classes->name }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Perído</b>
                                    </h5>
                                    <p class="text-dark">{{ $exam->season }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Duração</b>
                                    </h5>
                                    <p class="text-dark">{{ $exam->duration }}</p>
                                </div>



                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-7 mb-2">
                                    <hr>
                                    <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $exam->created_at }}
                                    </p>
                                    <p class="mb-1 text-dark"><b>Última Actualização</b> {{ $exam->updated_at }}
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
