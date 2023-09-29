@extends('sources.main')

@section('contenu')
         <!-- Page Title -->
        <div class="pagetitle">
            <h1>Tableau Bord</h1>
            <nav>
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
                <li class="breadcrumb-item active">Ajout étudiant</li>
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
                        <h5 class="card-title text-center">Formulaire d'enregistrement des étudiants </h5>

                        @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('status') }} !!</strong>
                                    <a href="{{route('liste_etudiant')}}"><span class="badge rounded-pill bg-primary p-2 ms-2 text-left">voir la liste des étudiants</span></a>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                      <form action="{{ route('store_etudiant') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Nom de l'étudiant</label>
                            <input type="text" class="form-control" name="nom" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Prénom de l'étudiant</label>
                            <input type="text" class="form-control" name="prenom" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Photo de l'étudiant</label>
                            <input type="file" class="form-control" name="photo_etudiant" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Adresse e-mail de l'étudiant</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword5" class="form-label">Date de naissance de l'étudiant</label>
                            <input type="date" class="form-control" name="date_naissance">
                        </div>

                        <div class="col-6">
                            <label for="inputAddress5" class="form-label">Sexe étudiant de l'étudiant</label>
                            <select name="sexe" class="form-select" required>
                                <option>Choisir le sexe ...</option>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                        <label for="inputState" class="form-label">Niveau d'étude de l'étudiant</label>
                            <select name="niveau" class="form-select" required>
                                <option>Choisir le niveau ...</option>
                                <option>Licence</option>
                                <option>Master</option>
                                <option>Doctora</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Filière étudiant</label>
                            <select name="filiere" class="form-select" required>
                                <option>Choisir la filière ...</option>
                                @foreach ($filiere as $fil)
                                <option value="{{ $fil->nom_filiere }}">{{ $fil->nom_filiere }} ({{ $fil->code_filiere }})</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Nom et prénoms de parent de l'étudiant</label>
                            <input type="text" class="form-control" name="parents"  required>
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
