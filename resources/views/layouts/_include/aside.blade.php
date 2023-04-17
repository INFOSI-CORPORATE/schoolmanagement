
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SchoolTec</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

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
                <h6 class="collapse-header">Components:</h6>
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
                <h6 class="collapse-header">Components:</h6>
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
                <h6 class="collapse-header">Components:</h6>
                <a class="collapse-item" href="{{ route('admin.teacher.create') }}">Cadastrar</a>
                <a class="collapse-item" href="{{ route('admin.teacher.list') }}">Listar</a>
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
        <div id="collapsetree" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Components:</h6>
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
        <div id="collapseFour" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Components:</h6>
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
        <div id="collapseFive" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Components:</h6>
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
        <div id="collapseSix" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Components:</h6>
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMat"
            aria-expanded="true" aria-controls="collapseMat">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Matrículas</span>
        </a>
        <div id="collapseMat" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Components:</h6>
                <a class="collapse-item $active" href="{{ route('admin.studentsSchoolyear.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.studentsSchoolyear.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfDisc"
            aria-expanded="true" aria-controls="collapseProfDisc">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Profs e Disciplinas</span>
        </a>
        <div id="collapseProfDisc" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Components:</h6>
                <a class="collapse-item $active" href="{{ route('admin.teacherSubject.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.teacherSubject.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCursProf"
            aria-expanded="true" aria-controls="collapseCursProf">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Curso e Professor</span>
        </a>
        <div id="collapseCursProf" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Components:</h6>
                <a class="collapse-item $active" href="{{ route('admin.courseTeacher.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.courseTeacher.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCursDisc"
            aria-expanded="true" aria-controls="collapseCursDisc">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Curso e Disciplina</span>
        </a>
        <div id="collapseCursDisc" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Components:</h6>
                <a class="collapse-item $active" href="{{ route('admin.courseSubject.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.courseSubject.list') }}">Listar</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAlunoAll"
            aria-expanded="true" aria-controls="collapseAlunoAll">
            <i class="fas fa-fw fa-user"></i>
            <span>Associar Aluno</span>
        </a>
        <div id="collapseAlunoAll" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Components:</h6>
                <a class="collapse-item $active" href="{{ route('admin.courseClasseGradeStudent.create') }}">Cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.courseClasseGradeStudent.list') }}">Listar</a>
            </div>
        </div>
    </li>


</ul>
<!-- End of Sidebar -->
