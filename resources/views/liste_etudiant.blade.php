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
                        <h5 class="card-title text-center">Liste des étudiants enregistrés</h5>
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('status') }} !!</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                        <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">N°</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénoms</th>
                                <th scope="col">Sexe</th>
                                <th scope="col">Niveau</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($etudiant as $etud)
                            <tr>
                                <th>{{ $etud->id }}</th>
                                <td>{{ $etud->nom }}</td>
                                <td>{{ $etud->prenom }}</td>
                                <td>{{ $etud->sexe }}</td>
                                <td>{{ $etud->niveau }}</td>
                                <td>
                                    <a href="show-etudiant/{{$etud->id}}" class="btn btn-success btn-sm"><i class="bi bi-eye" title="détaille"></i></a>

                                    <a href="edit-etudiant/{{ $etud->id }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square" title="modifier"></i>
                                    </a>
                                    @if(Auth::user()->role == '1')
                                    <a href="delete-etudiant/{{$etud->id}}"  class="btn btn-danger btn-sm" ><i class="bi bi-trash" title="supprimer"></i>
                                    </a>
                                    @else

                                    @endif
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
