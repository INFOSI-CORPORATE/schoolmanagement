@extends('layouts.merge.dashboard')
@section('title', 'Detalhes do Chefe de Departamento')
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
                                        Nome: {{ $departmentBoss->employees->name }}
                                    </h2>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 text-right mt-5">
                                    <a href="{{ route('admin.departmentBoss.edit', $departmentBoss->id) }}"
                                        class="btn btn-md btn-primary shadow-sm text-end">Editar</a>
                                </div>
                            </div>


                            <div class="row align-items-center">

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Nº do BI</b>
                                    </h5>
                                    <p class="text-dark">{{ $departmentBoss->employees->nBi }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Sexo</b>
                                    </h5>

                                    @if ($departmentBoss->employees->sex == 'Male')
                                        <p class="text-dark">Masculino</p>
                                    @elseif($departmentBoss->employees->sex == 'Female')
                                        <p class="text-dark">Feminino</p>
                                    @elseif($departmentBoss->employees->sex == 'Other')
                                        <p class="text-dark">Não Especificado</p>
                                    @endif
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Email</b>
                                    </h5>
                                    <p class="text-dark">{{ $departmentBoss->employees->email }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Contacto</b>
                                    </h5>
                                    <p class="text-dark">{{ $departmentBoss->employees->contact }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Cargo</b>
                                    </h5>
                                    <p class="text-dark">{{ $departmentBoss->employees->office }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Chefe do Departamento</b>
                                    </h5>
                                    <p class="text-dark">{{ $departmentBoss->departments->name }}</p>
                                </div>


                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-7 mb-2">
                                    <hr>
                                    <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $departmentBoss->created_at }}
                                    </p>
                                    <p class="mb-1 text-dark"><b>Última Actualização</b> {{ $departmentBoss->updated_at }}
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
