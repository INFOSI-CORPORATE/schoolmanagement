@extends('layouts.merge.dashboard')
@section('title', 'Painel')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Content Row -->
        <div class="row">

            <div class="col-lg-12 mb-4">


                <!-- Approach -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Estás na dashboard do Sistema de Gestão Escolar. Bem-vindo ao Sistena de Gestão Escolar
                                </p>
                                <div class="my-5"></div>
                                <p class="mb-0">Seja bem-vindo</p>

                            </div>
                            <div class="col-lg-6">
                                <img src="/site/assets/img/intro-img.svg" alt="" class="img-fluid">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection('content')
