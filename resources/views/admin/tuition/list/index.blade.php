@extends('layouts.merge.dashboard')
@section('title', 'Lista de Disciplinas')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de Propinas</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Propinas</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Aluno</th>
                                <th>Nº de Processo</th>
                                <th>Ano lectivo</th>
                                <th>Mês</th>
                                <th>Estado</th>
                                <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($tuitions as $tuition)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $tuition->students->name }}</td>
                                    <td>{{ $tuition->students->nProcess }}</td>
                                    <td>{{ $tuition->schoolyears->name }}</td>
                                    <td>{{ $tuition->month }}</td>
                                    @if ($tuition->state == 'Pago')
                                        <td><h5><span class="badge badge-success"> {{ $tuition->state }}</span></h5></td>
                                    @elseif($tuition->state == 'Pendente')
                                        <td><h5><span class="badge badge-warning"> {{ $tuition->state }}</span></h5></td>
                                    @elseif($tuition->state == 'Cancelado')
                                        <td><h5><span class="badge badge-danger"> {{ $tuition->state }}</span></h5></td>
                                    @else
                                        <td><h5><span class="badge badge-secondary"> {{ $tuition->state }}</span></h5></td>
                                    @endif

                                    <td>
                                        <div class="dropdown mb-4">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu animated--fade-in"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="{{ route('pdf.tuition', $tuition->id) }}" target="_blank">Factura</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.tuition.show', $tuition->id) }}">Detalhes</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.tuition.edit', $tuition->id) }}">Editar</a>
                                                <a class="dropdown-item delete-button" href="#"
                                                    data-based-id="{{ route('admin.tuition.destroy', $tuition->id) }}">Remover</a>
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
