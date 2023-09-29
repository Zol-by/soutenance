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
                    <h5 class="card-title text-center">Liste de tous les demandes de soutenance enregistré</h5>

                    <!-- tableau demande soutenance -->
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Etudiants</th>
                            <th scope="col">Pièces-joint</th>
                            <th scope="col">Statut</th>
                            <th scope="col">Motif</th>
                            <th>Action</th>
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
                                <td>
                                    @if($dem->statut_damd == 'Acceptée')

                                    <span class="badge bg-primary">{{ $dem->statut_damd }}</span>

                                    @elseif($dem->statut_damd == 'Réjétée')

                                    <span class="badge bg-danger">{{ $dem->statut_damd }}</span>

                                    @else

                                    <span class="badge bg-warning">{{ $dem->statut_damd }}</span>

                                    @endif
                                </td>
                                <td>{{ $dem->motif }}</td>
                                <td>

                                    @if(Auth::user()->role == '1')
                                    <a href=""  class="btn btn-success btn-sm" ><i class="bi bi-eye" title="supprimer"></i>

                                    <a href=""  class="btn btn-danger btn-sm" ><i class="bi bi-trash" title="supprimer"></i>

                                    @else
                                    <a href=""  class="btn btn-success btn-sm" ><i class="bi bi-eye" title="voir"></i>

                                    @endif

                                </td>

                            </tr>
                            @endforeach



                            {{-- <tr>
                            <th scope="row"><a href="#">#2147</a></th>
                            <td>Bridie Kessler</td>
                            <td><a href="#" class="text-primary">Bulletuin et frais soutenance</a></td>
                            <td><span class="badge bg-danger">Réjétée</span></td>
                            <td>Septembre</td>
                            <td>15:45</td>
                            <td>
                                @if(Auth::user()->role == '1')
                                <a href=""  class="btn btn-danger btn-sm" ><i class="bi bi-trash" title="supprimer"></i>
                                </a>
                                @else

                                @endif
                            </td>
                            </tr> --}}

                        </tbody>
                    </table>
                    <!-- End tableau demande soutenance -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


