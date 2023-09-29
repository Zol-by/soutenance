@extends('sources.main')

@section('contenu')
         <!-- Page Title -->
        <div class="pagetitle">
            <h1>Tableau Bord</h1>
            <nav>
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
                <li class="breadcrumb-item active">Ajout enseignant</li>
              </ol>
            </nav>
        </div>
          <!-- End Page Title -->

          <section class="section dashboard">
            <div class="row">
              <!-- Left side columns -->
              <div class="col-lg-12">
                <div class="row">

                  <!-- Formulaire inscription etudiant -->

                  <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                      <div class="card-body">
                        <h5 class="card-title text-center">Formulaire d'enregistrement des enseignants</h5>

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('status') }} !!</strong>
                                    <a href="{{route('liste_enseignant')}}"><span class="badge rounded-pill bg-primary p-2 ms-2 text-left">voir la liste des enseignants</span></a>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                        <form action="{{ route('store') }}" method="POST" class="row g-3">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputName5" class="form-label">Nom de l'enseignant</label>
                                <input type="text" class="form-control" name="nom">
                            </div>

                            <div class="col-md-6">
                                <label for="inputName5" class="form-label">Prénom de l'enseignant</label>
                                <input type="text" class="form-control" name="prenom">
                            </div>

                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Adresse e-mail de l'enseignant</label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Téléphone de l'enseignant</label>
                                <input type="number" class="form-control" name="telephone">
                            </div>

                            <div class="col-6">
                                <label for="inputAddress5" class="form-label">Sexe de l'enseignant</label>
                                <select name="sexe" class="form-select">
                                    <option>Choisir le sexe ...</option>
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Grade de l'enseignant</label>
                                <input type="text" class="form-control" name="grade">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><strong>Enregistrer</strong></button>
                                <button type="reset" class="btn btn-danger"><strong>Vider les champs</strong></button>
                            </div>
                        </form>

                      </div>
                    </div>
                  </div>
                  <!-- End Formulaire inscription etudiant -->

                </div>
              </div>
              <!-- End Left side columns -->

            </div>
          </section>
@endsection
