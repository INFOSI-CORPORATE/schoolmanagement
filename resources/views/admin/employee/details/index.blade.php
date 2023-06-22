@extends('layouts.merge.dashboard')
@section('title', 'Detalhes do Funcionário')
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
                                        Nome: {{ $employee->name }}
                                    </h2>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 text-right mt-5">
                                    <a href="{{ route('admin.employee.edit', $employee->id) }}"
                                        class="btn btn-md btn-primary shadow-sm text-end">Editar</a>
                                </div>
                            </div>


                            <div class="row align-items-center">

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Número do BI</b>
                                    </h5>
                                    <p class="text-dark">{{ $employee->nBi }}</p>
                                </div>


                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Número de BI</b>
                                    </h5>
                                    <p class="text-dark">{{ $employee->nBi }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">E-mail do Funcionário</b>
                                    </h5>
                                    <p class="text-dark">{{ $employee->email }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Data de Nascimento</b>
                                    </h5>
                                    @if ($employee->dateBirth == '' || $employee->dateBirth == null)
                                        <p class="text-dark">Não especificado</p>
                                    @else
                                        <p class="text-dark">{{ $employee->dateBirth }}</p>
                                    @endif

                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Sexo</b>
                                    </h5>

                                    @if ($employee->sex == 'Male')
                                        <p class="text-dark">Masculino</p>
                                    @elseif($employee->sex == 'Female')
                                        <p class="text-dark">Feminino</p>
                                    @elseif($employee->sex == 'Other')
                                        <p class="text-dark">Não Especificado</p>
                                    @endif

                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Contacto do Aluno / Alternativo</b>
                                    </h5>
                                    <p class="text-dark">{{ $employee->contact }} / {{ $employee->contactAlter }}</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">País / Endereço</b>
                                    </h5>
                                    <p class="text-dark">{{ $employee->country }} / {{ $employee->address }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Cargo / Departamento</b>
                                    </h5>
                                    <p class="text-dark">{{ $employee->office }} / {{ $employee->department }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Admissão</b>
                                    </h5>
                                    <p class="text-dark">{{ $employee->admission }}</p>
                                </div>




                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-7 mb-2">
                                    <hr>
                                    <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $employee->created_at }}
                                    </p>
                                    <p class="mb-1 text-dark"><b>Última Actualização</b> {{ $employee->updated_at }}
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
