@extends('sources.main')

@section('contenu')
<div class="pagetitle">
    <h1>Tableau Bord</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Détaille</li>
        </ol>
    </nav>
</div>
      <!-- End Page Title -->

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

        <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                <img src="{{asset('storage').'/'.$etudiant->photo_etudiant }}" alt="Profile" width="200">
                <div class="pt-2">
                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
            </div></br>
                <h3>{{ $etudiant->nom }} {{ $etudiant->prenom }}</h3>
                <em>
                    {{ $etudiant->filiere }}
                </em>
            </div>
        </div>

          </div>

          <div class="col-xl-8">

            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Détaille</button>
                  </li>

                  <li class="nav-item">
                      <a  href="{{route('liste_etudiant')}}" class="nav-link">Voir tous les étudiants</a>
                  </li>

                  {{-- <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Parametre</button>
                  </li> --}}

                </ul>
                <div class="tab-content pt-2">
                    <div class="tab-pane fade show active profile-overview" id="profile-overview">

                        <h5 class="card-title">Detailles</h5>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Etudiant n°:</div>
                            <div class="col-lg-9 col-md-8">#{{ $etudiant->id }}</div>
                        </div>

                        <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Nom étudiant:</div>
                        <div class="col-lg-9 col-md-8">{{ $etudiant->nom }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Prénoms étudiant:</div>
                            <div class="col-lg-9 col-md-8">{{ $etudiant->prenom }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Sexe étudiant:</div>
                            <div class="col-lg-9 col-md-8">{{ $etudiant->sexe }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Né le :</div>
                            <div class="col-lg-9 col-md-8">{{ $etudiant->date_naissance }}</div>
                        </div>

                        <div class="row">
                        <div class="col-lg-3 col-md-4 label">Filière étudiant :</div>
                        <div class="col-lg-9 col-md-8">{{ $etudiant->filiere }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Niveau d'étudiant:</div>
                            <div class="col-lg-9 col-md-8">{{ $etudiant->niveau }}</div>
                        </div>

                        <div class="row">
                        <div class="col-lg-3 col-md-4 label">E-mail d'étudiant:</div>
                        <div class="col-lg-9 col-md-8">{{ $etudiant->email }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Nom de parent:</div>
                            <div class="col-lg-9 col-md-8">{{ $etudiant->parents }}</div>
                        </div>
                    </div>

                <!-- Profile Edit Form -->
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                    <form class="row g-3" >
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
                                <option>OUEDRAOGO</option>
                                {{-- @foreach ($filiere as $fil)
                                <option value="{{ $fil->nom_filiere }}">{{ $fil->nom_filiere }} ({{ $fil->code_filiere }})</option>
                                @endforeach --}}
                            </select>
                        </div>

                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Parent de l'étudiant</label>
                            <input type="text" class="form-control" name="parents"  required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><strong>Enregistrer</strong></button>
                            <button type="reset" class="btn btn-danger"><strong>Vider les champs</strong></button>
                        </div>
                    </form>
                </div>
            <!-- End Profile Edit Form -->

            </div>
        <!-- End Bordered Tabs -->

        </div>
    </div>

    </div>
</div>
      </section>
@endsection
