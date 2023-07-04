<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SGE - Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Painel</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-globe"></i>
            <span>Site</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Sistema
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
            aria-expanded="true" aria-controls="collapseUser">
            <i class="fas fa-fw fa-user"></i>
            <span>Usuários</span>
        </a>
        <div id="collapseUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.user.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.user.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        Registro
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseYear"
            aria-expanded="true" aria-controls="collapseYear">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Ano Lectivo</span>
        </a>
        <div id="collapseYear" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.schoolyear.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.schoolyear.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Inscrição de Alunos</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.student.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.student.list') }}">Listar</a>
            </div>
        </div>
    </li>



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven"
            aria-expanded="true" aria-controls="collapseSeven">
            <i class="fas fa-fw fa-user"></i>
            <span>Professor</span>
        </a>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('admin.teacher.create') }}">Cadastrar</a>
                <a class="collapse-item" href="{{ route('admin.teacher.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRule"
            aria-expanded="true" aria-controls="collapseRule">
            <i class="fas fa-fw fa-user"></i>
            <span>Cargos</span>
        </a>
        <div id="collapseRule" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('admin.rule.create') }}">Cadastrar</a>
                <a class="collapse-item" href="{{ route('admin.rule.list') }}">Listar</a>
            </div>
        </div>
    </li><!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
            aria-expanded="true" aria-controls="collapseFour">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Cursos</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('admin.course.create') }}">Cadastrar</a>
                <a class="collapse-item" href="{{ route('admin.course.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetree"
            aria-expanded="true" aria-controls="collapsetree">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Turmas</span>
        </a>
        <div id="collapsetree" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('admin.classe.create') }}">Cadastrar</a>
                <a class="collapse-item" href="{{ route('admin.classe.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
            aria-expanded="true" aria-controls="collapseFive">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Classe</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('admin.grade.create') }}">Cadastrar</a>
                <a class="collapse-item" href="{{ route('admin.grade.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
            aria-expanded="true" aria-controls="collapseSix">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Disciplina</span>
        </a>
        <div id="collapseSix" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('admin.subject.create') }}">Cadastrar</a>
                <a class="collapse-item" href="{{ route('admin.subject.list') }}">Listar</a>
            </div>
        </div>
    </li>



    <div class="sidebar-heading">
        Instituição
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTtttaa"
            aria-expanded="true" aria-controls="collapseTtttaa">
            <i class="fas fa-fw fa-user"></i>
            <span>Casa dos Professores</span>
        </a>
        <div id="collapseTtttaa" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.residence.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.residence.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetttttt"
            aria-expanded="true" aria-controls="collapsetttttt">
            <i class="fas fa-fw fa-user"></i>
            <span>Dormitório</span>
        </a>
        <div id="collapsetttttt" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.bedroom.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.bedroom.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmployee"
            aria-expanded="true" aria-controls="collapseEmployee">
            <i class="fas fa-fw fa-user"></i>
            <span>Funcionários</span>
        </a>
        <div id="collapseEmployee" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.employee.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.employee.list') }}">Listar</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsedddddd"
            aria-expanded="true" aria-controls="collapsedddddd">
            <i class="fas fa-fw fa-user"></i>
            <span>Departamento</span>
        </a>
        <div id="collapsedddddd" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.department.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.department.list') }}">Listar</a>
            </div>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDepartmentBoss"
            aria-expanded="true" aria-controls="collapseDepartmentBoss">
            <i class="fas fa-fw fa-user"></i>
            <span>Chefe de Departamento</span>
        </a>
        <div id="collapseDepartmentBoss" class="collapse" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.departmentBoss.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.departmentBoss.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransport"
            aria-expanded="true" aria-controls="collapseTransport">
            <i class="fas fa-fw fa-user"></i>
            <span>Transporte</span>
        </a>
        <div id="collapseTransport" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.transport.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.transport.list') }}">Listar</a>
            </div>
        </div>
    </li>



    <!-- Independent Views-->

    <div class="sidebar-heading">
        Gerenciamento
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAlunoAll"
            aria-expanded="true" aria-controls="collapseAlunoAll">
            <i class="fas fa-fw fa-user"></i>
            <span>Aluno Maticulados</span>
        </a>
        <div id="collapseAlunoAll" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active"
                    href="{{ route('admin.courseClasseGradeStudentSchoolyear.create') }}">Cadastrar</a>
                <a class="collapse-item $active"
                    href="{{ route('admin.courseClasseGradeStudentSchoolyear.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfAll"
            aria-expanded="true" aria-controls="collapseProfAll">
            <i class="fas fa-fw fa-user"></i>
            <span>Professores Admitidos</span>
        </a>
        <div id="collapseProfAll" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active"
                    href="{{ route('admin.teacherSubjectClasseRuleSchoolyear.create') }}">Cadastrar</a>
                <a class="collapse-item $active"
                    href="{{ route('admin.teacherSubjectClasseRuleSchoolyear.list') }}">Listar</a>
            </div>
        </div>
    </li>

    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseExam"
            aria-expanded="true" aria-controls="collapseExam">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Exame</span>
        </a>
        <div id="collapseExam" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.exam.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.exam.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAtiv"
            aria-expanded="true" aria-controls="collapseAtiv">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Atividades</span>
        </a>
        <div id="collapseAtiv" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.ativities.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.ativities.list') }}">Listar</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTttta"
            aria-expanded="true" aria-controls="collapseTttta">
            <i class="fas fa-fw fa-user"></i>
            <span>Aluno ao Dormitório</span>
        </a>
        <div id="collapseTttta" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.bedroomStudent.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.bedroomStudent.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        Pagamentos
    </div>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTuition"
            aria-expanded="true" aria-controls="collapseTuition">
            <i class="fas fa-fw fa-user"></i>
            <span>Pagar Propina</span>
        </a>
        <div id="collapseTuition" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.tuition.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.tuition.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransportPay"
            aria-expanded="true" aria-controls="collapseTransportPay">
            <i class="fas fa-fw fa-user"></i>
            <span>Pagar Transporte</span>
        </a>
        <div id="collapseTransportPay" class="collapse" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.transportPay.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.transportPay.list') }}">Listar</a>
            </div>
        </div>
    </li>



</ul>
<!-- End of Sidebar -->
