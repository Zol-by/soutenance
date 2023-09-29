@extends('sources.main')

@section('contenu')
         <!-- Page Title -->
        <div class="pagetitle">
            <h1>Tableau Bord</h1>
            <nav>
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
                <li class="breadcrumb-item active">Directeurs memoire et Maitre stages</li>
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
                        <h5 class="card-title text-center">Liste des directeurs memoire et maitre de stage enregistré</h5>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                <th scope="col">N°</th>
                                <th scope="col">Directeur Memoire</th>
                                <th scope="col">Maitre de Stage</th>
                                <th scope="col">Etudiant</th>
                                <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dm_ms as $dm)
                                <tr>
                                    <th>{{ $dm->id }}</th>
                                    {{-- nom enseignant --}}
                                    <td>{{ $dm->Enseignant->nom }} {{ $dm->Enseignant->prenom }}</td>
                                    <td>{{ $dm->nom_ms }}</td>
                                    {{-- nom étudiant --}}
                                    <td>{{ $dm->Inscription->nom }} {{ $dm->Inscription->prenom }}</td>
                                    <td>
                                        <a href="{{$dm->id}}" class="btn btn-success btn-sm"><i class="bi bi-eye" title="détaille"></i></a>

                                        <a href="{{ $dm->id }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square" title="modifier"></i>
                                        </a>
                                        @if(Auth::user()->role == '1')
                                        <a href="{{$dm->id}}"  class="btn btn-danger btn-sm" ><i class="bi bi-trash" title="supprimer"></i>
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
