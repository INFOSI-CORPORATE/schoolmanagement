@extends('layouts.merge.dashboard')
@section('title', 'Detalhes da Matrícula')
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
                                        Nome do Aluno: {{ $courseClasseGradeStudentSchoolyear->students->name }}
                                    </h2>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 text-right mt-5">
                                    
                                    <a href="{{ route('pdf.studentCard', $courseClasseGradeStudentSchoolyear->id) }}"
                                        target="_blank" class="btn btn-md btn-warning shadow-sm text-end">Cartão</a>
                                    <a href="{{ route('admin.courseClasseGradeStudentSchoolyear.edit', $courseClasseGradeStudentSchoolyear->id) }}"
                                        class="btn btn-md btn-primary shadow-sm text-end">Editar</a>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Nº de Processo</b>
                                    </h5>
                                    <p class="text-dark">{{ $courseClasseGradeStudentSchoolyear->students->nProcess }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Curso</b>
                                    </h5>
                                    <p class="text-dark">{{ $courseClasseGradeStudentSchoolyear->courses->name }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Classe</b>
                                    </h5>
                                    <p class="text-dark">{{ $courseClasseGradeStudentSchoolyear->grades->name }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Turma</b>
                                    </h5>
                                    <p class="text-dark">{{ $courseClasseGradeStudentSchoolyear->classes->name }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Turno</b>
                                    </h5>
                                    <p class="text-dark">{{ $courseClasseGradeStudentSchoolyear->season }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Ano lectivo</b>
                                    </h5>
                                    <p class="text-dark">{{ $courseClasseGradeStudentSchoolyear->schoolyears->name }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Contacto | Alternativo</b>
                                    </h5>
                                    <p class="text-dark">{{ $courseClasseGradeStudentSchoolyear->students->contact }} |
                                        {{ $courseClasseGradeStudentSchoolyear->students->contactAlter }} </p>
                                </div>
                                <hr>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <img src="/storage/images/{{ $courseClasseGradeStudentSchoolyear->image }}"
                                        alt="Imagem - {{ $courseClasseGradeStudentSchoolyear->students->name }}">
                                    <p class="text-dark"> </p>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-7 mb-2">
                                    <hr>
                                    <p class="mb-1 text-dark"><b>Data de Cadastro</b>
                                        {{ $courseClasseGradeStudentSchoolyear->created_at }}
                                    </p>
                                    <p class="mb-1 text-dark"><b>Última Actualização</b>
                                        {{ $courseClasseGradeStudentSchoolyear->updated_at }}
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
