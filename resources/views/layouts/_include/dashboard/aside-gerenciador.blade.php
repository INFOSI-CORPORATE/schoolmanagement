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


    <!-- Heading -->
    
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

    {{--  <!-- nav item - pages collapse menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecursdisc"
            aria-expanded="true" aria-controls="collapsecursdisc">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>cursos associados</span>
        </a>
        <div id="collapsecursdisc" class="collapse" aria-labelledby="headingtwo" data-parent="#accordionsidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item $active" href="{{ route('admin.coursesubjectgrade.create') }}">cadastrar</a>
                <a class="collapse-item $active" href="{{ route('admin.coursesubjectgrade.list') }}">listar</a>
            </div>
        </div>
    </li>  --}}

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

</ul>
<!-- End of Sidebar -->
