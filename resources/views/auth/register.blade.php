<!DOCTYPE html>
<html lang="en">

<head>

    @include('sources.head')

</head>


<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Créer un utilisateur</h5>
                  </div>

                  <form method="POST" action="{{ route('register') }}" class="row g-3 needs-validation" novalidate>
                    @csrf

                    <div class="col-12">
                      <label for="yourName" class="form-label">Nom et Prénom</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      {{-- <input type="text" name="name" class="form-control" id="yourName" required> --}}
                      <div class="invalid-feedback">svp, entrer votre nom et prénoms !</div>
                    </div>

                    <div class="col-12">
                        <label for="yourName" class="form-label">Identifiant</label>
                        <input id="identifiant" type="text" class="form-control @error('identifiant') is-invalid @enderror" name="identifiant" value="{{ old('identifiant') }}" required autocomplete="identifiant" autofocus>

                            @error('identifiant')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        {{-- <input type="text" name="name" class="form-control" id="yourName" required> --}}
                        <div class="invalid-feedback">svp, entrer votre identifiant !</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">E-mail</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
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

                    <div class="col-12">
                        <label for="yourEmail" class="form-label">Selectionnez le rôle</label>
                        <select class="form-select" name="role" aria-label="Default select example">
                            <option selected>Selectionnez le rôle</option>
                            <option value="2">Secretaire</option>
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

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirmaé</label>

                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                      {{-- <input type="password" name="password" class="form-control" id="yourPassword" required> --}}
                      <div class="invalid-feedback">svp, confirmé votre mot de passe !</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Enregistrer</button>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('sources.js')


</body>

</html>
