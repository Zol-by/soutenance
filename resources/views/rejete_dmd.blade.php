@extends('sources.main')

@section('contenu')
<!-- Page Title -->
<div class="pagetitle">
    <h1>Tableau Bord</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
            <li class="breadcrumb-item active">Validation demande</li>
        </ol>
    </nav>
</div>
    <!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Formulaire du réjet de la demande</h5>

                    <!-- Formulaire approuver demande soutenance -->

                    <form method="POST" action="{{url('rejet_dmd', [$demandes->id])}}" class="row g-3">
                        @csrf

                        <div class="col-12" >
                            <label for="recipient-name" class="col-form-label">Motif du réjet de la demande de soutenance</label>
                            <textarea name="motif" cols="5" rows="5" class="form-control" value="{{$demandes->motif}}"></textarea>
                        </div>

                        <div class="col-12">
                            <select  name="statut_damd" class="form-select" hidden>
                                <option  value="Réjétée" ></option>
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><strong>Enregistrer la validation</strong></button>
                        </div>
                    </form>
                    <!-- End formulaire jury soutenance -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

