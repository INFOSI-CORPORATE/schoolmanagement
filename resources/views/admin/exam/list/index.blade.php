@extends('layouts.merge.dashboard')
@section('title', 'Exames')
@section('content')
    <script>
        $(document).ready(function() {
            var exams = {!! json_encode($exams) !!};

            var events = exams.map(function(exam) {
                return {
                    id: exam.id,
                    title: exam.name, // adicionando a propriedade title com o nome do exame
                    start: exam.start_date,
                    end: exam.end_date,
                    allDay: true // se o exame durar o dia inteiro, defina como true
                }
            });
            var calendar = $('#calendar').fullCalendar({
                editable: false,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay'
                },
                events: exams,
                selectable: true,
                selectHelper: true,
                eventClick: function(event, jsEvent, view) {
                    var id = event.id;
                    $.get('/admin/exam/show/' + id, function(data) {
                        window.location = '/admin/exam/show/' + id;
                    });
                },
                eventRender: function(event, element) {
                    element.find('.fc-title').text(event.name);
                }

            });
        });
    </script>

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Calendário de Exames</h1>
        </div>

        <br />
        <div class="container">
            <div class="col-12">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
@endsection('content')
