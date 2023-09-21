<!DOCTYPE html>
<html lang="en">

<head>

    @include('sources.head')

</head>

<body>

  <!-- ======= Header ======= -->

  @include('sources.topbar')

 <!-- End Header -->

  <!-- ======= Sidebar ======= -->

    @include('sources.nav')

  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tableau Bord</h1>
      <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
          <li class="breadcrumb-item active">Nouvelle inscription</li>
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
                  <h5 class="card-title">Inscription d'un étudiant </h5>

                <form class="row g-3">
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Nom et Prénom</label>
                  <input type="text" class="form-control" name="nom_prenom">
                </div>

                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">E-mail</label>
                  <input type="email" class="form-control" name="email">
                </div>

                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Date de naissance</label>
                  <input type="date" class="form-control" name="date_naissance">
                </div>

                <div class="col-6">
                    <label for="inputAddress5" class="form-label">Sexe étudiant</label>
                    <select name="sexe" class="form-select">
                        <option>Choisir le sexe ...</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                      </select>
                </div>

                <div class="col-6">
                  <label for="inputAddress5" class="form-label">Téléphone étudiant</label>
                  <input type="number" class="form-control" name="phone_etudiant">
                </div>

                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Nom et prénoms des parents</label>
                  <input type="text" class="form-control" name="parents" >
                </div>

                <div class="col-md-4">
                  <label for="inputCity" class="form-label">Téléphone parents</label>
                  <input type="number" class="form-control" name="phone_parent">
                </div>

                <div class="col-md-4">
                  <label for="inputState" class="form-label">Filière étudiant</label>
                  <select name="filiere" class="form-select">
                    <option>Choisir la filière ...</option>
                    <option>Informatique de Gestion</option>
                    <option>Reseaux Informatique</option>
                    <option>Comptabilité Générale</option>
                    <option>Communication Digitale</option>
                  </select>
                </div>

                <div class="col-md-4">
                <label for="inputState" class="form-label">Niveau étude</label>
                    <select name="niveau" class="form-select">
                        <option>Choisir le niveau ...</option>
                        <option>1ere année</option>
                        <option>2eme année</option>
                        <option>3eme année</option>
                        <option>4eme année</option>
                        <option>5eme année</option>
                        <option>6eme année</option>
                        <option>7eme année</option>
                    </select>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <button type="reset" class="btn btn-danger">Effacer</button>
                </div>
              </form>

                </div>

              </div>
            </div>
            <!-- End Formulaire inscription etudiant -->

          </div>
        </div>
        <!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

@include('sources.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('sources.js')


</body>

</html>
