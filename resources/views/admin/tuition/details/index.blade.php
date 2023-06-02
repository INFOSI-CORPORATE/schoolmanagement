@extends('layouts.merge.dashboard')
@section('title', 'Detalhes da Disciplina')
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
                                        Nome: {{ $tuition->students->name }}
                                    </h2>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 text-right mt-5">
                                    <a href="{{ route('admin.tuition.edit', $tuition->id) }}"
                                        class="btn btn-md btn-primary shadow-sm text-end">Editar</a>
                                </div>
                            </div>


                            <div class="row align-items-center">

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Ano lectivo</b>
                                    </h5>
                                    <p class="text-dark">{{ $tuition->schoolyears->name }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Mês</b>
                                    </h5>
                                    <p class="text-dark">{{ $tuition->month }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Preço</b>
                                    </h5>
                                    <p class="text-dark">{{ number_format($tuition->price, 2, '.', ',') }} KZ</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Estado</b>
                                    </h5>
                                    @if ($tuition->state == 'Pago')
                                        <h5><span class="badge badge-success">{{ $tuition->state }}</span></h5>
                                    @elseif($tuition->state == 'Pendente')
                                        <h5><span class="badge badge-warning">{{ $tuition->state }}</span></h5>
                                    @elseif($tuition->state == 'Cancelado')
                                        <h5><span class="badge badge-danger">{{ $tuition->state }}</span></h5>
                                    @else
                                        <h5><span class="badge badge-secondary">{{ $tuition->state }}</span></h5>
                                    @endif
                                </div>



                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-7 mb-2">
                                    <hr>
                                    <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $tuition->created_at }}
                                    </p>
                                    <p class="mb-1 text-dark"><b>Última Actualização</b> {{ $tuition->updated_at }}
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
