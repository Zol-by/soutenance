@extends('sources.main')

@section('contenu')
<div class="pagetitle">
    <h1>Tableau Bord</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Détaille</li>
        </ol>
    </nav>
</div>
      <!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
            <h6 class="card-title">
                <a  href="{{route('liste_dmd_soutenance')}}" class="nav-link">Voir tous les demandes en attente</a>
            </h6>
            <p>
                <img src="{{asset('storage').'/'.$demandes->photo_frais_soutenance }}" alt="photo" width="950">
            </p>
            <p class="text-center">------------------------------------------------Buletin de note-----------------------------------------------------------------</p>
            <p>
                <img src="{{asset('storage').'/'.$demandes->photo_buletin }}" alt="photo" width="950">
            </p>

            <a  href="{{route('liste_dmd_soutenance')}}" class="nav-link">
                <button type="button" class="btn btn-primary">Voir tous les demandes en attente</button>
            </a>

            </div>
        </div>

        </div>

    </div>
</section>
@endsection
