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

     @yield('contenu')

  </main>
  <!-- Fin #main -->

  @include('sources.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('sources.js')


</body>

</html>
