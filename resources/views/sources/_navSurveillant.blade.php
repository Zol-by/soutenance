
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
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Jury de Soutenance</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                <a href="charts-chartjs.html">
                    <i class="bi bi-circle"></i><span>Ajouter un jury</span>
                </a>
                </li>
                <li>
                <a href="charts-apexcharts.html">
                    <i class="bi bi-circle"></i><span>Liste des jurys</span>
                </a>
                </li>
                <li>
                <a href="dmde_soutenance">
                    <i class="bi bi-circle"></i><span>Demandes soutenance</span>
                </a>
                </li>
            </ul>
            </li>
            <!-- End Charts Nav -->

            <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Gestion Salles Classe</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="bi bi-circle"></i><span>Ajouter une salle classe</span>
                </a>
                </li>
                <li>
                <a href="icons-remix.html">
                    <i class="bi bi-circle"></i><span>Lise des salles classes</span>
                </a>
                </li>
            </ul>
            </li>
        </ul>
    </aside>


      <!-- Modal ajouter classe -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="text-center"><strong>Enregistrement de la salle de classe</strong></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Nom de la salle</label>
                            <input type="text" class="form-control" name="nom_prenom">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Nombre place</label>
                            <input type="number" class="form-control" name="nbr_place">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="reset" class="btn btn-danger">Effacer champ</button>
                        </div>
                    </form>
                </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>


    <!-- Modal ajouter enseignant -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enregistrement d'un enseignant</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputName5" class="form-label">Nom et prénoms</label>
                    <input type="text" class="form-control" name="nom_prenom">
                </div>

                <div class="col-md-6">
                    <label for="inputEmail5" class="form-label">Téléphone</label>
                    <input type="number" class="form-control" name="phone">
                </div>

                <div class="col-md-6">
                <label for="inputState" class="form-label">Niveau étude</label>
                    <select name="niveau" class="form-select">
                        <option>Choisir le niveau ...</option>
                        <option>1ere année</option>
                        <option>2eme année</option>
                        <option>3eme année</option>
                        <option>4eme année</option>
                        <option>5eme année</option>
                        <option>6eme année</option>
                        <option>7eme année</option>
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Effacer champ</button>
                </div>
            </form>
        </div>
        <div class="modal-footer"></div>
        </div>
    </div>
    </div>


