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

<script src="/dashboard/assets/js/jquery-3.6.0.min.js"></script>
<script src="/dashboard/assets/js/jquery-ui.min.js"></script>
<script src="/dashboard/assets/js/moment.min.js"></script>
<script src='/dashboard/assets/js/pt-br.js'></script>

<script>
    $(function() {

        $('#calendar').fullCalendar({
            lang: 'pt-br'
        });

    });
</script>

<script src="/dashboard/assets/js/popper.min.js"></script>
<script src="/dashboard/assets/js/bootstrap.min.js"></script>
<script src="/dashboard/assets/js/fullcalendar.min.js"></script>

<!-- Depois, os plugins -->
<script src="/dashboard/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/dashboard/assets/vendor/chart.js/Chart.min.js"></script>
<script src="/dashboard/assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/dashboard/assets/vendor/datatables/Portuguese-Brasil.json"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            language: {
                url: "/dashboard/assets/vendor/datatables/Portuguese-Brasil.json"
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
<script src="/dashboard/assets/js/jquery.validate.min.js"></script>


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
@elseif(session('error_password'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'A password atual está incorrecta!',
            showConfirmButton: true
        })
    </script>
@elseif(session('error_Repassword'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'As passwords não coecidem!',
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
@elseif(session('documentation_not_exist'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Não existe nenhuma documentação deste transporte',
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
@elseif(session('classes_destroy_error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Esta Turma Tem associação e não pode ser excluída!',
            showConfirmButton: false,
            timer: 4500
        })
    </script>
@elseif(session('propinas_destroy_error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Esta Propina Tem associação e não pode ser excluída!',
            showConfirmButton: false,
            timer: 4500
        })
    </script>
@elseif(session('transports_destroy_error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Este Pagamento de Transporte Tem associação e não pode ser excluída!',
            showConfirmButton: false,
            timer: 4500
        })
    </script>
@elseif(session('bedroom_students_destroy_error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Este Aluno ao Dormitório Tem associação e não pode ser excluída!',
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
                            'Ocorreu um erro ou o dado não pode ser deletado.',
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
