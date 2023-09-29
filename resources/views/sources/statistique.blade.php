 <!--Nombre Diplômés -->
 <div class="col-xxl-4 col-md-4">
        <div class="card info-card sales-card">

        <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>Filtrer</h6>
            </li>
            <li><a class="dropdown-item" href="#">Par sexe</a></li>
            <li><a class="dropdown-item" href="#">Par année</a></li>
        </ul>
        </div>

        <div class="card-body">
        <h5 class="card-title">Demande Soutenances</h5>

        <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
            <h6>{{$TotalDiplome}}</h6>
            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">taux</span>

            </div>
        </div>
        </div>

    </div>
    </div>
    <!-- End Sales Card -->

    <!-- Nombre Enseignants -->
    <div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">

        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                <h6>Filtrer</h6>
                </li>
                <li><a class="dropdown-item" href="#">Par année</a></li>
                <li><a class="dropdown-item" href="#">Par niveau</a></li>
            </ul>
            </div>

            <div class="card-body">
            <h5 class="card-title">Nombre Enseignants</h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                <h6>{{$TotalEnsiegnant}}</h6>
                <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">taux</span>

                </div>
            </div>
            </div>

        </div>
        </div>
        <!-- End Revenue Card -->

        <!-- Nombre Etudiants -->
        <div class="col-xxl-4 col-md-4">

        <div class="card info-card customers-card">

        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                <h6>Filtrer</h6>
                </li>
                <li><a class="dropdown-item" href="#">Par sexe</a></li>
                <li><a class="dropdown-item" href="#">Par année</a></li>
            </ul>
            </div>

            <div class="card-body">
            <h5 class="card-title">Nombre Etudiants</h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                <h6>{{$TotalEtudiant}}</h6>
                <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">taux</span>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- End Customers Card -->
