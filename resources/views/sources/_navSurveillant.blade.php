
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="dashboard">
                <i class="bi bi-grid"></i>
                <span>Tableau Bord</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-layout-text-window-reverse"></i><span>Gestion soutenance</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('store_jury_soutenance')}}" >
                        <i class="bi bi-circle"></i><span>Enregistrer un jury</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('liste_jurys')}}">
                        <i class="bi bi-circle"></i><span>Liste jurys enregistré</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('liste_dmd_soutenance')}}">
                        <i class="bi bi-circle"></i><span>Demande en attente</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('listes_dmd_soutenance')}}">
                        <i class="bi bi-circle"></i><span>Demandes Soutenance</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
