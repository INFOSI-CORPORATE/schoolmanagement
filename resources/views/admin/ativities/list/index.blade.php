@extends('layouts.merge.dashboard')
@section('title', 'Calendário de Atividades')
@section('content')
<script>
    $(document).ready(function() {
        var ativities = @json($ativities);
        var calendar = $('#calendar').fullCalendar({
            locale: 'pt-br',
            editable: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month'
            },
            events: ativities,
            selectable: true,
            selectHelper: true,
            eventClick: function(event, jsEvent, view) {
                var id = event.id;
                $.get('/admin/ativities/show/' + id, function(data) {
                    window.location = '/admin/ativities/show/' + id;
                });
            }

        });
    });
</script>

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Calendário de Atividades</h1>
        </div>


        <!-- DataTales Example -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">Calendário de Atividades</h6>
                    <a href="/pdf/ativitie" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-file-pdf fa-sm text-white-50"></i> Imprimir lista de Atividades
                    </a>
                </div>

            </div>

            <div class="card-body">
                <div class="container">
                    <div class="col-12">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection('content')
