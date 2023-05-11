@extends('layouts.merge.dashboard')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">

            <div class="col-lg-12 mb-4">


                <!-- Approach -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
                    </div>

                    <div class="card-body">
                        <p>Estás na dashboard do Sistema de Gestão Escolar. Bem-vindo ao Sistena de Gestão Escolar</p>
                        <div class="my-5"></div>
                        <p class="mb-0">Seja bem-vindo</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection('content')
