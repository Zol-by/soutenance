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
          <li class="breadcrumb-item active">Demande soutenance</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Tableau Recent Sales -->

            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Liste des demandes </h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Etudiants</th>
                        <th scope="col">Demandes</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>25/05/2023</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>

                      <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>25/05/2023</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>

                      <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                        <td>25/05/20237</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>

                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td>25/05/2023</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>

                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                        <td>25/05/2023</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div>
            <!-- End tableau Recent Sales -->

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
