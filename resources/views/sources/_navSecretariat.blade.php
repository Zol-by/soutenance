
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
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Gestion Etudiants</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                    <a href="{{route('create_etudiant')}}">
                            <i class="bi bi-circle"></i><span>Ajouter un étudiant</span>
                        </a>
                        </li>
                        <li>
                        <a href="{{route('liste_etudiant')}}">
                            <i class="bi bi-circle"></i><span>Liste des étudiants</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Gestion Insription -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Gestion Enseignants</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('store')}}" >
                            <i class="bi bi-circle"></i><span>Ajouter un enseignant</span>
                        </a>
                    </li>
                        <li>
                        <a href="{{route('liste_enseignant')}}">
                            <i class="bi bi-circle"></i><span>Liste des enseignants</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Gestion Enseignants -->

            <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Gestion Soutenances</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('store_dmd_soutenance')}}">
                            <i class="bi bi-circle"></i><span>Enregistrer la demande</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('liste_dmd_soutenance')}}">
                            <i class="bi bi-circle"></i><span>Liste demandes attente</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('listes_dmd_soutenance')}}">
                            <i class="bi bi-circle"></i><span>Liste demandes envoyés</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('liste_jurys')}}">
                            <i class="bi bi-circle"></i><span>Liste jdes urys enregistré</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Charts Nav -->
        </ul>
    </aside>


