@extends('layouts.merge.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de Atividades</h1>
        </div>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="ativitieModal" tabindex="-1" role="dialog" aria-labelledby="ativitieModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ativitieModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="title" name="title" class="form-control">
                        <span id="titleError" class="text-danger"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="saveBtn" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>



        <br />
        <div class="container">
            <div class="col-12">
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var ativitie = @json($ativities);
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            var calendar = $('#calendar').fullCalendar({
                editable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay'
                },
                
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    $('#ativitieModal').modal('toggle');

                    $('#saveBtn').click(function() {
                        var title = $('#title').val();
                        var start_date = moment(start).format('YYYY-MM-DD');
                        var end_date = moment(end).format('YYYY-MM-DD');

                        $.ajax({
                            url: "{{ route('admin.ativities.store') }}",
                            type: "POST",
                            dataType: 'json',
                            data: {
                                title,
                                start_date,
                                end_date
                            },
                            success: function(response) {
                                /* $('#ativitieModal').modal('hide')
                                 $('#calendar').fullCalendar('renderEvent', {
                                     'title': response.title,
                                     'start' : response.start,
                                     'end'  : response.end,
                                     'color' : response.color
                                 });*/
                                console.log(response);
                            },
                            error: function(error) {
                                if (error.responseJSON.errors) {
                                    $('#titleError').html(error.responseJSON.errors
                                        .title);
                                }
                            },
                        });

                    })
                }


            });
        });
    </script>
@endsection('content')
