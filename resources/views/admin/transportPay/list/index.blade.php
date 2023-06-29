@extends('layouts.merge.dashboard')
@section('title', 'Lista de Pagamentos de Transporte')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de Pagamentos de Transporte</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">Pagamento de Transporte</h6>
                    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                        data-toggle="modal" data-target="#myModal">
                        <i class="fas fa-file-pdf fa-sm text-white-50"></i> Factura Geral
                    </button>
                </div>
                <div class="container">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <form action="{{ route('pdf.transportPay') }}" method="get" target="_blank">
                                @csrf
                                <!-- Modal content-->
                                <div class="modal-content">
                                    @include('form.formPDF._formTransportPay.index')
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
                                <th>Aluno</th>
                                <th>Nº de Processo</th>
                                <th>Ano lectivo</th>
                                <th>Mês</th>
                                <th>Estado</th>
                                <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($transportPays as $transportPay)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $transportPay->students->name }}</td>
                                    <td>{{ $transportPay->students->nProcess }}</td>
                                    <td>{{ $transportPay->schoolyears->name }}</td>
                                    <td>{{ $transportPay->month }}</td>
                                    @if ($transportPay->state == 'Pago')
                                        <td>
                                            <h5><span class="badge badge-success"> {{ $transportPay->state }}</span></h5>
                                        </td>
                                    @elseif($transportPay->state == 'Pendente')
                                        <td>
                                            <h5><span class="badge badge-warning"> {{ $transportPay->state }}</span></h5>
                                        </td>
                                    @elseif($transportPay->state == 'Cancelado')
                                        <td>
                                            <h5><span class="badge badge-danger"> {{ $transportPay->state }}</span></h5>
                                        </td>
                                    @else
                                        <td>
                                            <h5><span class="badge badge-secondary"> {{ $transportPay->state }}</span></h5>
                                        </td>
                                    @endif

                                    <td>
                                        <div class="dropdown mb-4">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu animated--fade-in"
                                                aria-labelledby="dropdownMenuButton">


                                                @if ($transportPay->state == 'Pago')
                                                    <a class="dropdown-item"
                                                        href="{{ route('pdf.transportPay.student', $transportPay->id) }}"
                                                        target="_blank">Factura</a>
                                                @endif


                                                <a class="dropdown-item"
                                                    href="{{ route('admin.transportPay.show', $transportPay->id) }}">Detalhes</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.transportPay.edit', $transportPay->id) }}">Editar</a>
                                                <a class="dropdown-item delete-button" href="#"
                                                    data-based-id="{{ route('admin.transportPay.destroy', $transportPay->id) }}">Remover</a>
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
