@extends('sources.main')

@section('contenu')
    <!-- Page Title -->
<div class="pagetitle">
    <h1>Tableau Bord</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Filière</li>
        </ol>
    </nav>
</div>
    <!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
        <div class="row">
            <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                <h5 class="card-title text-center">Formulaire d'enregistrement des filières</h5>

                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('status') }} !!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                <form action="{{ route('store_filiere') }}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputName5" class="form-label">Nom de la filière</label>
                        <input type="text" class="form-control" name="nom_filiere" required>
                    </div>

                    <div class="col-md-6">
                        <label for="inputName5" class="form-label">Secteur</label>
                        <select class="form-select" name="code_filiere" required >
                            <option selected>Selectionnez le secteur</option>
                            <option value="Tertiaire">Tertiaire</option>
                            <option value="Industriel">Industriel</option>
                        </select>
                    </div>

                    <div class="text-lifte">
                        <button type="submit" class="btn btn-primary"><strong>Enregistrer</strong></button>
                        <button type="reset" class="btn btn-danger"><strong>Vider les champs</strong></button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- End Left side columns -->
    </div>
</section>

<section class="section dashboard">
<div class="row">
    <!-- Left side columns -->
    <div class="col-lg-12">
    <div class="row">
        <!-- Formulaire inscription etudiant -->
        <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
            <h5 class="card-title text-center">Liste des filières enregistré</h5>

            <table class="table datatable">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Filière</th>
                    <th scope="col">Secteur</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($filiere as $fil)
                    <tr>
                        <th>{{ $fil->id }}</th>
                        <td>{{ $fil->nom_filiere }}</td>
                        <td>{{ $fil->code_filiere }}</td>
                        <td>
                        <a href="{{ $fil->id }}">
                            <a href="" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square" title="modifier"></i></a>
                        </a>
                        <a href="{{ $fil->id }}">
                            <a href="" class="btn btn-danger btn-sm"><i class="bi bi-trash" title="supprimer"></i></a>
                        </a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
