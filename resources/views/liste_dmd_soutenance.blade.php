@extends('sources.main')

@section('contenu')
<!-- Page Title -->
<div class="pagetitle">
    <h1>Tableau Bord</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Demandes de soutenance</li>
        </ol>
    </nav>
</div>
    <!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Liste des demandes de soutenance enregistré</h5>

                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('status') }} !!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <!-- tableau demande soutenance -->
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Etudiants</th>
                            <th scope="col">Pièces-joint</th>
                            <th scope="col">Statut</th>
                            <th scope="col">Période</th>
                            <th scope="col">Heure</th>
                            <th scope="col">Décision</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($demandes as $dem)
                            <tr>
                                <th scope="row"><a href="#">#{{ $dem->id }}</a></th>
                                <td>{{ $dem->nom_etudiant }}</td>
                                <td>
                                    <a href="show-demande/{{ $dem->id }}"  title="voir la photo">Buletin et frais soutenance</a>
                                </td>
                                <td> <span class="badge bg-warning">{{ $dem->statut_damd }}</span></td>
                                <td>{{ $dem->periode }}</td>
                                <td>{{ $dem->heure_convenance }}</td>
                                <td>


                                    @if(Auth::user()->role == '3')
                                    <a href="update-dmd/{{ $dem->id}}" class="btn badge bg-danger" >Réjéter</a>

                                    <a href="update-dmde/{{ $dem->id}}" class="btn badge bg-primary" >Accepter</a>

                                    @else

                                    @endif

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- End tableau demande soutenance -->
                </div>
            </div>
        </div>
    </div>
</section>



@endsection


