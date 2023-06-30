@extends('layouts.merge.dashboard')
@section('title', 'Detalhes do Departamento')
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
                                        Nome: {{ $transport->plate }}
                                    </h2>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 text-right mt-5">
                                    <a href="{{ route('admin.transport.edit', $transport->id) }}"
                                        class="btn btn-md btn-primary shadow-sm text-end">Editar</a>
                                </div>
                            </div>


                            <div class="row align-items-center">

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Modelo</b>
                                    </h5>
                                    <p class="text-dark">{{ $transport->model }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Capacidade de Alunos</b>
                                    </h5>
                                    <p class="text-dark">{{ $transport->capacity }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Rota de Viajem</b>
                                    </h5>
                                    <p class="text-dark">{{ $transport->route }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Estado</b>
                                    </h5>
                                    <p class="text-dark">{{ $transport->state }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Seguro</b>
                                    </h5>
                                    <p class="text-dark">{{ $transport->safe }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Documentação</b>
                                    </h5>
                                    <p class="text-dark"><a href="{{ route('pdf.transportdocumentation', $transport->id ) }}">Documentação.pdf</a></p>

                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Detalhes</b>
                                    </h5>
                                    <p class="text-dark">{{ $transport->details }}</p>
                                </div>


                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-7 mb-2">
                                    <hr>
                                    <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $transport->created_at }}
                                    </p>
                                    <p class="mb-1 text-dark"><b>Última Actualização</b> {{ $transport->updated_at }}
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
