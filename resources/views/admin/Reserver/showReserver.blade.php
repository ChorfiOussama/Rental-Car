@extends('admin.layout')
@section('title', 'Ajouter Locataire')
@section('content')
<h3><u>Locataire :</u></h3>
<form action="{{ route('reserver.store') }}" method="POST" >
@csrf
  <div class="container text-center">
    <div class="col-4 col-sm-6 offset-sm-3 texta">
        <strong>Nom et Prénom :</strong> 
        <input
          type="text"
          class="form-control text-center"
          name="nom"
          title="input"
          value="{{ $reserver['nom'] }}"
        />
      </div>

          <div class="row g-1">
              <div class="  col-sm-3 offset-sm-2 texta">
                <strong>CIN N° ou Passeport N°:</strong>
                <input
                  type="text"
                  class="form-control text-center"
                  name="cin"
                  title="input"
                  value="{{ $reserver['cin'] }}"
                />
              </div>
              <div class="  col-sm-3 offset-sm-2 texta">
                <strong>Permis de Conduite N°:</strong>
                <input
                  type="text"
                  class="form-control text-center"
                  name="permis"
                  title="input"
                  value="{{ $reserver['permis'] }}"
                />
              </div>
          </div>
      

      <div class="col-4 col-sm-6 offset-sm-3 texta">
        <strong>Adresse :</strong>
        <input
          type="text"
          class="form-control text-center"
          name="adresse"
          title="input"
          value="{{ $reserver['adresse'] }}"
        />
      </div>
      <div class="row g-1">
        <div class="col-sm-3 offset-sm-2 texta">
          <strong>Télephone :</strong>
          <input
            type="number"
            class="form-control text-center"
            name="tele"
            title="input"
            value="{{ $reserver['tele'] }}"
          />
        </div>
        <div class="col-sm-3 offset-sm-2 texta">
          <strong>Téléphone 2 :</strong>
          <input
            type="number"
            class="form-control text-center"
            name="gsm"
            title="input"
            value="{{ $reserver['gsm'] }}"
          />
        </div>
      </div>

      <h3><u>Information Sur La Voiture :</u></h3>
    <div class="row g-1">
          <div class="col-sm-3 offset-sm-1 texta">
            <strong>Matricule :</strong>
            <input
              type="text"
              class="form-control text-center"
              name="matricule"
              value="{{ $reserver['matricule'] }}"
            />
          </div>
          <div class="col-sm-3 offset-sm-1 texta">
            <strong> Marque :</strong>
            <input type="text" 
                name="marque" 
                class="form-control text-center"
                value="{{ $reserver['marque'] }}" />
          </div>
          <div class="col-sm-3 offset-sm-1 texta">
            <strong> Modéle :</strong>
            <input type="text" 
                name="modele" 
                class="form-control text-center"
                value="{{ $reserver['modele'] }}" />
          </div>
      </div>
    <div class="row g-1">
          <div class="col-sm-3 offset-sm-2 texta">
            <strong>prix :</strong>
            <input
              type="number"
              class="form-control text-center"
              name="prix"
              value="{{ $reserver['prix'] }}"
            />
          </div>
          <div class="col-sm-3 offset-sm-2 texta">
            <strong> Duree prevue :</strong>
            <input 
                type="number" 
                name="duree" 
                class="form-control text-center" 
                value="{{ $reserver['duree'] }}"
            />
          </div>
      </div>
      <div class="col-4 col-sm-6 offset-sm-3 texta">
        <strong>Commentaires :</strong>

        <textarea name="comm" class="form-control text-center" aria-label="With textarea"></textarea>
      </div>
    <br />
    <div class="col-auto">
      <button name="bld" type="submit" class="btn btn-primary mb-3">
        Enregistrer
      </button>
    </div>
  </div>
</form>
@endsection