@extends('voitures.layout')
@section('content')

<div class="search">
  <div class="">
    <div class="row">
    <form action='filter' method='post' class="row g-3">
      @csrf
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
        DATE DÉBUT :
        <input
          name="check-in"
          type="date"
          class="form-control custom-select px-4"
          id="inputCheckIn"
        />
      </div>
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
        DATE FIN :
        <input
          name="check-in"
          type="date"
          class="form-control custom-select px-4"
          id="inputCheckIn"
        />
      </div>
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
        MODÈLES :
        <select class="custom-select px-4 form-select" name="libele">
          <option defaultValue="selected">Voitures</option>
          <option defaultValue="Citroen">Citroen</option>
          <option defaultValue="Kia Picanto">Kia Picanto</option>
          <option defaultValue="Jeep">Jeep</option>
          <option defaultValue="Range Rover">Range Rover</option>
          <option defaultValue="Dacia">Dacia</option>
        </select>
      </div>
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
        <label for=""></label
        ><button type="submit" class="btn btn-primary btn-block" id="Search" >
          Search
        </button>
      </div>
      </form>
    </div>
  </div>
</div>

<br />
<div class="banner-container">
  <div class="container py-5">
    <div class="bg-banner py-5 px-4 text-center">
      <div class="py-5">
        <h4 class="display-1 text-uppercase text-primary mb-2">
          Modou Car
        </h4>
        <h4 class=" text-light mb-4">
          Vous Trouverez Sur Notre Site, Les Informations Nécessaires Pour Louer Votre Voiture Chez Nous 
          (Prix, Conditions, Formulaire De Réservation, Informations Sur Le Parc Auto ....) Heureux De 
          Pouvoir Vous Compter Parmi Nos Futurs Clients, Nous Vous Souhaitons Une Bonne Navigation Sur 
          Notre Site Web.
        </h4>
        <a class="btn btn-primary mt-2 py-3 px-5" href="{{route('voiture.index')}}"> Nos Voitures </a>
      </div>
    </div>
  </div>
</div>
<section class="subscribe">
        <div class="subscribe-title">
            <h1>Abonnez-vous pour recevoir toutes les notifications</h1>
            <p>Laissez votre meilleur e-mail et restez toujours à jour.</p>
            <form>
                <div class="box-input">
                    <input type="text" placeholder="Entrer votre Email">
                    
                    <button type="button" class="btn btn-primary">
                    RECEVEZ MAINTENANT
                      </button>
                </div>
            </form>
        </div>
    </section>
@endsection