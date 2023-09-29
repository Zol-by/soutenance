@extends('sources.main')

@section('contenu')
<div class="pagetitle">
        <h1>Tableau Bord</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
            <li class="breadcrumb-item active">Ajout utilisateur</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section profile">
        <div class="row">
          <div class="col-xl-12">

            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Apropos</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Créer un utilisateur</button>
                  </li>

                </ul>
                <div class="tab-content pt-2">

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">Utilisateur connecté</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Nom et prénom</div>
                      <div class="col-lg-9 col-md-8">{{Auth::user()->name}}</div>
                    </div>


                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Rôle</div>
                      <div class="col-lg-9 col-md-8">
                          @if(Auth::user()->role == '1')
                              Administrateur
                          @elseif(Auth::user()->role == '2')
                              Secrétaire
                          @else
                              Surveillant
                          @endif
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">E-mail</div>
                      <div class="col-lg-9 col-md-8">{{Auth::user()->email}}</div>
                    </div>

                  </div>

                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form method="POST" action="{{ route('store_user') }}" class="row g-3 needs-validation" novalidate>
                        @csrf

                        <div class="col-6">
                            <label for="yourName" class="form-label">Nom et Prénom</label>
                            <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-check"></i></span>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- <input type="email" name="username" class="form-control" id="yourUsername" required> --}}
                            <div class="invalid-feedback">svp, entrer votre nom et prénoms !</div>
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="yourUsername" class="form-label">E-mail</label>
                            <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope"></i></span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- <input type="email" name="username" class="form-control" id="yourUsername" required> --}}
                            <div class="invalid-feedback">svp, entrer votre adresse e-mail !</div>
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="yourName" class="form-label">Identifiant</label>
                            <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-check-fill"></i></span>
                                <input id="identifiant" type="text" class="form-control @error('identifiant') is-invalid @enderror" name="identifiant" value="{{ old('identifiant') }}" required autocomplete="identifiant" autofocus>

                                @error('identifiant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="invalid-feedback">svp, entrer votre identifiant !</div>
                            </div>
                        </div>



                        <div class="col-6">
                            <label for="yourEmail" class="form-label">Mot de passe</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            {{-- <input type="password" name="email" class="form-control" id="yourEmail" required> --}}
                            <div class="invalid-feedback">svp, entrer votre mot de pass!</div>
                        </div>

                        <div class="col-6">
                            <label for="yourPassword" class="form-label">Confirmé le mot de passe</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                            {{-- <input type="password" name="password" class="form-control" id="yourPassword" required> --}}
                            <div class="invalid-feedback">svp, confirmé votre mot de passe !</div>
                        </div>

                        <div class="col-6">
                            <label for="yourEmail" class="form-label">Rôle d'utilisateur</label>
                            <select class="form-select" name="role" aria-label="Default select example">
                                <option selected>Selectionnez le rôle</option>
                                <option value="2">Secrétaire</option>
                                <option value="3">Surveillant</option>
                                <option value="1">Administrateur</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="invalid-feedback">svp, selectionner le rôle</div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit"><strong>Enregistrer l'utilisateur</strong></button>
                        </div>
                    </form>
                    <!-- End Change Password Form -->

                  </div>

                </div><!-- End Bordered Tabs -->

              </div>
            </div>

          </div>
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
                        <h5 class="card-title text-center">Liste des utilisateurs étudiants</h5>

                        <table class="table datatable">
                        <thead>
                            <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Utilisateur</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Identifiant</th>
                            <th scope="col">Rôle</th>
                            <th>Actions</th>
                            </tr>
                        </thead>
                        {{-- @foreach ($users as $use) --}}
                        <tbody>
                            <tr class="text-center">
                            <th scope="row">1</th>
                            <td>ZOLO Eloge</td>
                            <td>zoloeloge@gmail.com</td>
                            <td>Zolby</td>
                            <td>Administrateur</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square" title="modifier"></i> </a>
                                <a href=""  class="btn btn-danger btn-sm" ><i class="bi bi-trash" title="supprimer"></i></a>
                            </td>
                            </tr>

                            <tr>
                            <th scope="row">2</th>
                            <td>Bridie Kessler</td>
                            <td>kerssler@gmail.com</td>
                            <td>Kerssler</td>
                            <td>Surveillant</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square" title="modifier"></i> </a>
                                <a href=""  class="btn btn-danger btn-sm" ><i class="bi bi-trash" title="supprimer"></i></a>
                            </td>
                            </tr>
                        </tbody>
                        {{-- @endforeach --}}
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
