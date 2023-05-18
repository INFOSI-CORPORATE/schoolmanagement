@extends('layouts.merge.dashboard')
@section('title', 'Detalhes do Professor Admitido')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Detalhes da Admissão do Professor</h1>
                </div>
            </div>
            
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">

                            <div class="row justify-content-between mb-4">
                                <div class="col-12 col-md-6 col-lg-6 mt-5 ml-5">
                                    <h2 class="h3 page-title">
                                        Nome do Professor: {{ $teacherSubjectClasseRuleSchoolyear->teachers->name }}
                                    </h2>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 text-right mt-5">
                                    <a href="{{ route('admin.teacherSubjectClasseRuleSchoolyear.edit', $teacherSubjectClasseRuleSchoolyear->id) }}"
                                        class="btn btn-md btn-primary shadow-sm text-end">Editar</a>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Cargo</b>
                                    </h5>
                                    <p class="text-dark">{{ $teacherSubjectClasseRuleSchoolyear->rules->name }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Turma</b>
                                    </h5>
                                    <p class="text-dark">{{ $teacherSubjectClasseRuleSchoolyear->classes->name }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Disciplina</b>
                                    </h5>
                                    <p class="text-dark">{{ $teacherSubjectClasseRuleSchoolyear->subjects->name }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Turno</b>
                                    </h5> 
                                    <p class="text-dark">{{ $teacherSubjectClasseRuleSchoolyear->season }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Ano Lectivo</b>
                                    </h5>
                                    <p class="text-dark">{{ $teacherSubjectClasseRuleSchoolyear->schoolyears->name }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Contacto | Alternativo</b>
                                    </h5>
                                    <p class="text-dark">{{ $teacherSubjectClasseRuleSchoolyear->teachers->contact }} | {{ $teacherSubjectClasseRuleSchoolyear->teachers->contactAlter }} </p>
                                </div>

                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-7 mb-2">
                                    <hr>
                                    <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $teacherSubjectClasseRuleSchoolyear->created_at }}
                                    </p>
                                    <p class="mb-1 text-dark"><b>Última Actualização</b> {{ $teacherSubjectClasseRuleSchoolyear->updated_at }}
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
