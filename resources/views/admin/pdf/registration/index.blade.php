<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Lista de Matrículados</title>
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
        </div>
        <div class="text-center">REPÚBLICA DE ANGOLA</div>
        <div class="text-center">MINISTÉRIO DA EDUCAÇÃO</div>
        <div class="text-center">SISTEMA DE GESTÃO ESCOLAR</div>
    </header>


    <main>
        <div class="main">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nº de Processo</th>
                        <th>Nome</th>
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
        </div>
    </main>

    <footer>

    </footer>


</body>

</html>
