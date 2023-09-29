@extends('sources.main')

@section('contenu')
        <!-- Page Title -->
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

          <!--********* Content body start ***********-->

          <section class="section dashboard">
            <div class="row">
              <!-- Left side columns -->
              <div class="col-lg-12">
                <div class="row">

               @include('sources.statistique')

                  <!-- Tableau Recent Sales -->

                  <div class="col-12">
                    <div class="card recent-sales"><br>
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
                  <!-- Fin tableau Recent Sales -->

                </div>
              </div>
              <!-- Fin Left side columns -->

            </div>
          </section>

       <!--*********** Content body end ***************-->
@endsection
