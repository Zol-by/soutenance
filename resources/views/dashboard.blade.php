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




    @if(Auth::user()->role == '1')

    @include('sources._navAdministrateur')

    @elseif(Auth::user()->role == '2')

    @include('sources._navSecretariat')

    @else

    @include('sources._navSurveillant')

    @endif

  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tableau Bord</h1>
      <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
          <li class="breadcrumb-item active">Tableau Bord</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            @include('sources.statistique')

            <!-- Tableau Recent Sales -->

            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('assets/img/etude1.png')}}" class="d-block w-100" alt="photo 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/img/etude2.jpg')}}" class="d-block w-100" alt="photo 2">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Suivant</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Arrière</span>
                        </button>
                    </div>
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
