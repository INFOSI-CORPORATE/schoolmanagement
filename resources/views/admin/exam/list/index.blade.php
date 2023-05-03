@extends('layouts.merge.dashboard')

@section('content')
    <script>
        $(document).ready(function() {
            var exams = @json($exams);
            var calendar = $('#calendar').fullCalendar({
                editable: true,
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
                }

            });
        });
    </script>

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de Exame</h1>
        </div>

        <br />
        <div class="container">
            <div class="col-12">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
@endsection('content')
