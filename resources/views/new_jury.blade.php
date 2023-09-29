@extends('sources.main')

@section('contenu')
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Tableau Bord</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
                <li class="breadcrumb-item active">Ajout jury soutenance</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
<section class="section">
<div class="row">
    <div class="col-lg-12">

    <div class="card">
        <div class="card-body">
        <h5 class="card-title text-center">Formulaire d'enregistrement des jurys</h5>

            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('status') }} !!</strong>
                    <a  href="{{route('liste_jurys')}}"><span class="badge rounded-pill bg-primary p-2 ms-2 text-left">voir la liste des jurys</span>                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <!-- Formulaire jury soutenance -->

        <form action="{{ route('store_jury_soutenance') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <label for="inputTime" class="col-md-4 col-form-label">Nom et pénom du président jury</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="president_jury" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputTime" class="col-md-4 col-form-label">Grade du président Jury</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="grade_pr_jury" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputTime" class="col-md-4 col-form-label">Choisir le directeur de memoire</label>
                <div class="col-sm-8">
                    <select name="nom_dm" class="form-select" required>
                        <option>Choisir le directeur memoire</option>
                        @foreach ($enseignant as $ensig)
                        <option value="{{ $ensig->nom }} {{ $ensig->prenom }}">{{ $ensig->nom }} {{ $ensig->prenom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputTime" class="col-md-4 col-form-label">Choisir le nom de maitre de stage</label>
                <div class="col-sm-8">
                    <select name="nom_ms" class="form-select" required>
                        <option>Choisir le maitre satge</option>
                        @foreach ($dm_ms as $ms)
                        <option value="{{ $ms->nom_ms }}">{{ $ms->nom_ms }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputTime" class="col-md-4 col-form-label">Choisir le nom du l'étudiant</label>
                <div class="col-sm-8">
                    <select name="nom_etudiant" class="form-select" required>
                        <option>Choisir l'étudiant</option>
                        @foreach ($etudiant as $etud)
                        <option value="{{ $etud->nom }} {{ $etud->prenom }}">{{ $etud->nom }} {{ $etud->prenom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="row mb-3">
                <label for="inputTime" class="col-md-4 col-form-label">Salle de soutenance</label>
                <div class="col-sm-8">
                    <select name="nom_salle" class="form-select" required>
                        <option>Choisir la salle</option>
                        @foreach ($salle as $sal)
                        <option value="{{ $sal->nom_salle }}">{{ $sal->nom_salle }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputDate" class="col-md-4 col-form-label">Date de la soutenance</label>
                <div class="col-sm-8">
                <input type="date" class="form-control" name="date_soutenance" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputTime" class="col-md-4 col-form-label">Heure de soutenance</label>
                <div class="col-sm-8">
                <input type="time" class="form-control" name="heure_soutenance" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary"><strong>Enregistrer</strong></button>
                    <button type="reset" class="btn btn-danger"><strong>Vider les champs</strong></button>
                </div>
            </div>

            </form>
            <!-- End formulaire jury soutenance -->
        </div>
    </div>
    </div>

    {{-- <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Liste des jurys de soutenance</h5>
                    <!-- Tableau liste des jury soutenance -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">N°</th>
                                <th scope="col">Président du jury</th>
                                <th scope="col">Grade du président</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jurys as $jr)
                                <tr>
                                    <th>{{ $jr->id }}</th>
                                    <td>{{ $jr->president_jury }}</td>
                                    <td>{{ $jr->grade_pr_jury }}</td>
                                    <td>
                                        <a href="{{ $jr->id }}" class="btn btn-success btn-sm"><i class="bi bi-eye" title="détails"></i></a>

                                        <a href="{{ $jr->id }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square" title="modifier"></i></a>

                                        @if(Auth::user()->role == '1')

                                        <a href="{{ $jr->id }}" class="btn btn-danger btn-sm"><i class="bi bi-trash" title="supprimer"></i></a>

                                        @else

                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Fin Tableau liste des jury soutenance -->
                </div>
            </div>
        </div> --}}
</div>
</section>

@endsection
