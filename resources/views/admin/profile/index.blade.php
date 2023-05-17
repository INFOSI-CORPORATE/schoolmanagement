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
                        <h6 class="m-0 font-weight-bold text-primary">Perfil do Usuário</h6>
                    </div>

                    <div class="card-body">
                        <p>Nome: {{ auth()->user()->name }}</p>
                        <p>Email: {{ auth()->user()->email }}</p>

                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ auth()->user()->created_at }}
                            </p>
                            <p class="mb-1 text-dark"><b>Última Actualização</b> {{ auth()->user()->updated_at }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
@endsection('content')
