@extends('sources.main')

@section('contenu')
<!-- Page Title -->
<div class="pagetitle">
    <h1>Tableau Bord</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
            <li class="breadcrumb-item active">Nouvelle demande soutenance</li>
        </ol>
    </nav>
</div>
    <!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Formulaire d'enregistrement des demandes de soutenance</h5>

                    <!-- Formulaire jury soutenance -->
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('status') }} !!</strong>
                            <a href="{{route('liste_dmd_soutenance')}}"><span class="badge rounded-pill bg-primary p-2 ms-2 text-left">voir la liste des demandes en attente</span></a>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('store_dmd_soutenance') }}"  class="row g-3" enctype="multipart/form-data">
                        @csrf

                        <div class="col-6" >
                            <label for="recipient-name" class="col-form-label">Nom et pénoms Etudiant</label>
                            <select name="nom_etudiant" class="form-select" required>
                                <option>Choisir l'étudiant</option>
                                @foreach ($etudiant as $etud)
                                <option value="{{ $etud->nom }} {{ $etud->prenom }}">{{ $etud->nom }} {{ $etud->prenom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-6">
                            <label for="recipient-name" class="col-form-label">Prériode</label>
                            <select name="periode" class="form-select" required>
                                <option>Choisir la période</option>
                                <option>Septembre</option>
                                <option>Octobre</option>
                                <option>Novembre</option>
                                <option>Decembre</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Photo réçu du frais souteance</label>
                            <input type="file" class="form-control" name="photo_frais_soutenance" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Photo dernier bulletin</label>
                            <input type="file" class="form-control" name="photo_buletin" required>
                        </div>

                        <div class="col-12">
                            <label for="recipient-name" class="col-form-label">Heure de convenance</label>
                            <input type="time" class="form-control" name="heure_convenance" required>
                        </div>

                        <div class="col-12">
                            <select name="statut_damd" class="form-select" hidden>
                                <option value="En attente"></option>
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><strong>Enregistrer</strong></button>
                            <button type="reset" class="btn btn-danger"><strong>Vider les champs</strong></button>
                        </div>
                    </form>
                    <!-- End formulaire jury soutenance -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

