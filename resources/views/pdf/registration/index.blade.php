<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Maticulados-{{ date('d/m/Y', strtotime(now())) }}</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        header {
            text-align: center;
            padding: 1.5rem;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="img">
            <img src="dashboard/assets/img/insignia.png" alt="">
        </div>
        <div class="text-center">REPÚBLICA DE ANGOLA</div>
        <div class="text-center">MINISTÉRIO DA EDUCAÇÃO</div>
        <div class="text-center">SISTEMA DE GESTÃO ESCOLAR</div>
        <div class="text-center">LISTA DE ALUNOS MATRICULADOS</div>
        <div class="text-center">TURMA "{{ $classe }}"</div>
    </header>


    <main>
        <div class="main">
            @if ($studentSchoolYear->count() <= 0)
                <hr>
                <div class="text-center"> Não Existe nenhum Aluno na turma "{{ $classe }}" do ano lectivo de "{{ $schoolyear }}" </div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Nº de Processo</th>
                            <th>Classe</th>
                            <th>Ano lectivo</th>
                            <th>Turno</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studentSchoolYear as $item)
                            <tr>
                                <td scope="row">{{ $loop->index + 1 }}</td>
                                <td>{{ $item->students->name }}</td>
                                <td>{{ $item->students->nProcess }}</td>
                                <td>{{ $item->grades->name }}</td>
                                <td>{{ $item->schoolyears->name }}</td>
                                <td>{{ $item->season }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>
    <hr class="pylarge bg-dark">
    <footer class="col-12 mt-2 text-center" id="footer">

        <small class="text-left text-dark">
            Documento Processado por Computador. <br>
        </small>

    </footer>


</body>

</html>
