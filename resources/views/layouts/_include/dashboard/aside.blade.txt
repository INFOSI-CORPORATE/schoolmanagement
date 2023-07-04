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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Inscrição</span>
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCursDisc"
            aria-expanded="true" aria-controls="collapseCursDisc">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Cursos Associados</span>
        </a>
        <div id="collapseCursDisc" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.courseSubjectGrade.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.courseSubjectGrade.list') }}">Listar</a>
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

    <!-- Heading -->
    <div class="sidebar-heading">
        Adicionais
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
            aria-expanded="true" aria-controls="collapseUser">
            <i class="fas fa-fw fa-user"></i>
            <span>Propina</span>
        </a>
        <div id="collapseUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.tuition.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.tuition.list') }}">Listar</a>
            </div>
        </div>
    </li>

</ul>
<!-- End of Sidebar -->
