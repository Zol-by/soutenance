@extends('sources.main')

@section('contenu')
<div class="pagetitle">
        <h1>Tableau Bord</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section profile">
        <div class="row">
          <div class="col-xl-4">

            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="assets/img/logo.png" alt="Profile" class="rounded-circle">
                <h2>{{Auth::user()->name}}</h2>
                <span>
                  @if(Auth::user()->role == '1')
                      Administrateur
                  @elseif(Auth::user()->role == '2')
                      Secrétaire
                  @else
                      Surveillant
                  @endif
                </span>
                <div class="social-links mt-2">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>

          </div>

          <div class="col-xl-8">

            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Apropos</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Modification</button>
                  </li>

                  {{-- <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                  </li> --}}

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Parametre</button>
                  </li>

                </ul>
                <div class="tab-content pt-2">

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">

                    <h5 class="card-title">Detailles</h5>

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

                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                    <!-- Profile Edit Form -->
                    <form>
                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Photo</label>
                        <div class="col-md-8 col-lg-9">
                        <img src="{{asset('assets/img/logo.png')}}" alt="Profile">
                          <div class="pt-2">
                            <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom et prénom</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="{{Auth::user()->name}}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Rôle</label>
                        <div class="col-md-8 col-lg-9">
                          <input type="text" class="form-control" id="Address" value="{{Auth::user()->role}}">
                        </div>
                      </div>


                      <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">E-mail</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="email" class="form-control" id="Email" value="{{Auth::user()->email}}">
                        </div>
                      </div>

                      <div class="text-center">
                            <button type="submit" class="btn btn-primary"><strong>Enregistrer</strong></button>
                        </div>
                    </form>
                    <!-- End Profile Edit Form -->

                  </div>

                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form>

                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Ancien Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password" type="password" class="form-control" id="currentPassword">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                      </div>

                      <div class="row mb-">
                        <label for="renewPassword" class="col-md-6 col-lg-3 col-form-label">Confirmé Pass.</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary"><strong>Enregistrer</strong></button>
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
@endsection
