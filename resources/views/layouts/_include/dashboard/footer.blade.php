<!-- Footer -->
</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2023</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>


<!-- Carregue primeiro os scripts do Bootstrap e do jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/pt-br.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Depois, os plugins -->
<script src="/dashboard/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/dashboard/assets/vendor/chart.js/Chart.min.js"></script>
<script src="/dashboard/assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json"
            }
        });
    });
</script>

<script src="/dashboard/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="/dashboard/assets/js/sweetalert2.all.min.js"></script>
<!-- E, finalmente, os scripts personalizados -->
<script src="/dashboard/assets/js/demo/chart-area-demo.js"></script>
<script src="/dashboard/assets/js/demo/chart-pie-demo.js"></script>
<script src="/dashboard/assets/js/demo/datatables-demo.js"></script>
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>



</main>

@if (session('create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Cadastrado com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('destroy'))

    <script>
        Swal.fire({
            icon: 'info',
            title: 'Eliminado com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('candidates'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Este estudante não consta na lista de estudantes por favor cadastre primeiro!',
            showConfirmButton: true
        })
    </script>
@elseif(session('edit'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Alterações foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('create_image'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Imagens foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('erro_students'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Este estudante já esta cadastrado nesta turma e curso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('students_exist'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Este Aluno já existe!',
            showConfirmButton: true
        })
    </script>
@elseif(session('courses_exist'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Existe um curso com este nome!',
            showConfirmButton: true
        })
    </script>
@elseif(session('existing_candidate'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Já existe um estudante com este Número de Identificação',
            showConfirmButton: true
        })
    </script>
@elseif(session('NoAuth'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Não tem autorização para visualizar esta página!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
@elseif(session('students_destroy_error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Este aluno está matriculado e não pode ser excluído!',
            showConfirmButton: false,
            timer: 4500
        })
    </script>
@elseif(session('teachers_destroy_error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Este Professor está Admitido e não pode ser excluído!',
            showConfirmButton: false,
            timer: 4500
        })
    </script>
@endif

<script>
    $('.delete-button').click(function(event) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        event.preventDefault();
        var dadoId = $(this).data('based-id');
        Swal.fire({
            title: 'Tem certeza?',
            text: "Você não poderá desfazer esta ação!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, deletar!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Faz a requisição AJAX para o controlador com o ID do aluno
                $.ajax({
                    url: dadoId,
                    type: 'DELETE',
                    success: function(response) {
                        Swal.fire(
                            'Deletado!',
                            'O registro foi deletado.',
                            'success'
                        ).then(() => {
                            // Recarrega a página após a exclusão
                            location.reload();
                        });
                    },
                    error: function(xhr, status, error) {
                        Swal.fire(
                            'Erro!',
                            'Ocorreu um erro ao deletar.',
                            'error'
                        );
                    }
                });
            }
        });
    });
</script>



<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<script></script>



</body>

</html>
<!-- EndFooter -->
