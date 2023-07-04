@extends('layouts.merge.dashboard')
@section('title', 'Lista de Alunos ao Dormitório')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de Alunos ao Dormitório</h1>
        </div>

        <!-- DataTales employeeple -->
        <div class="card shadow">

            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">Alunos ao Dormitório</h6>
                    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                        data-toggle="modal" data-target="#myModal">
                        <i class="fas fa-file-pdf fa-sm text-white-50"></i> Imprimir lista
                    </button>
                </div>
                <div class="container">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <form action="{{ route('pdf.bedroomStudent') }}" method="get" target="_blank">
                                @csrf
                                <!-- Modal content-->
                                <div class="modal-content">
                                    @include('form.formPDF._formBedroomStudent.index')
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nº PROCESSO</th>
                                <th>NOME DO ESTUDANTE</th>
                                <th>NOME DO QUARTO</th>
                                <th>ANO LECTIVO</th>
                                <th>ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bedroomStudents as $bedroomStudent)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $bedroomStudent->students->nProcess }}</td>
                                    <td>{{ $bedroomStudent->students->name }}</td>
                                    <td>{{ $bedroomStudent->bedrooms->name }}</td>
                                    <td>{{ $bedroomStudent->schoolyears->name }}</td>
                                    <td>
                                        <div class="dropdown mb-4">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu animated--fade-in"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.bedroomStudent.show', $bedroomStudent->id) }}">Detalhes</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.bedroomStudent.edit', $bedroomStudent->id) }}">Editar</a>
                                                <a class="dropdown-item delete-button" href="#"
                                                    data-based-id="{{ route('admin.bedroomStudent.destroy', $bedroomStudent->id) }}">Remover</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
@endsection('content')
