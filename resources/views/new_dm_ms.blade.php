@extends('sources.main')

@section('contenu')
<!-- Page Title -->
<div class="pagetitle">
<h1>Tableau Bord</h1>
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
    <li class="breadcrumb-item active">Ajout directeur de memoire et maitre de stage</li>
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
            <h5 class="card-title text-center">Enregistrement du directeur de memoire et maitre de stage</h5>

                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('status') }} !!</strong>
                        <a href="{{route('liste_dm_ms')}}"><span class="badge rounded-pill bg-primary p-2 ms-2 text-left">voir liste</span></a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

            <form action="{{ route('store_dm_ms') }}" method="POST" class="row g-3">
                @csrf

                <div class="col-md-6">
                    <label for="inputName5" class="form-label">Directeur Memoire</label>
                    <select name="id_enseignant" class="form-select" required>
                        <option>Choisir le directeur memoire</option>
                        @foreach ($enseignant as $enseig)
                        <option value="{{ $enseig->id }}">{{ $enseig->nom }} {{ $enseig->prenom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="inputName5" class="form-label">Nom et prénoms maitre stage</label>
                    <input type="text" class="form-control" name="nom_ms" required>
                </div>

                <div class="col-md-6">
                    <label for="inputEmail5" class="form-label">Adresse e-mail maitre de stage</label>
                    <input type="email" class="form-control" name="email_ms" required>
                </div>

                <div class="col-md-6">
                    <label for="inputPassword5" class="form-label">Téléphone de maitre de stage</label>
                    <input type="number" class="form-control" name="telephone_ms" required>
                </div>

                <div class="col-6">
                    <label for="inputAddress5" class="form-label">Sexe de maitre de stage</label>
                    <select name="sexe_ms" class="form-select" required>
                        <option>Choisir le sexe ...</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="inputState" class="form-label">Fonction de maitre de stage</label>
                    <input type="text" class="form-control" name="fonction_ms" required>
                </div>

                <div class="col-12">
                    <label for="recipient-name" class="col-form-label">Nom et pénoms Etudiant</label>
                    <select name="id_etudiant" class="form-select" required>
                        <option>Choisir l'étudiant</option>
                        @foreach ($etudiant as $etud)
                        <option value="{{ $etud->id }}">{{ $etud->nom }} {{ $etud->prenom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-12">
                    <label for="inputState" class="form-label">Thème de l'étudiant</label>
                    <textarea name="theme" class="form-control" id="message-text" required></textarea>
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
