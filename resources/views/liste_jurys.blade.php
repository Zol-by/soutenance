@extends('sources.main')

@section('contenu')
         <!-- Page Title -->
        <div class="pagetitle">
            <h1>Tableau Bord</h1>
            <nav>
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
                <li class="breadcrumb-item active">Liste Jury</li>
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
                        <h5 class="card-title text-center">Liste des jurys enregistrés</h5>

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
                                <th scope="col">Président du jury</th>
                                <th scope="col">Grade Pr jury</th>
                                <th scope="col">Nom D.M</th>
                                <th scope="col">Nom M.S</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jurys as $jr)
                            <tr>
                                <th>{{ $jr->id }}</th>
                                <td>{{ $jr->president_jury }}</td>
                                <td>{{ $jr->grade_pr_jury }}</td>
                                <td>{{ $jr->nom_dm }}</td>
                                <td>{{ $jr->nom_ms }}</td>
                                <td>

                                    <a href="{{ $jr->id }}" class="btn btn-success btn-sm"><i class="bi bi-eye" title="voir"></i></a>

                                    @if(Auth::user()->role == '1')
                                    <a href="{{ $jr->id }}" class="btn btn-success btn-sm"><i class="bi bi-eye" title="voir"></i></a>
                                    <a href="{{ $jr->id }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square" title="modifier"></i></a>
                                    <a href="delete-jury/{{ $jr->id }}"  class="btn btn-danger btn-sm" ><i class="bi bi-trash" title="supprimer"></i>

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
