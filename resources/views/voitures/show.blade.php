@extends('voitures.layout')
@section('content')
<head>
<link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
      rel="stylesheet"
    />
</head>
    <style>
        .list-group-item {
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
  margin-bottom: 0.5rem;
}

.list-group-item:last-child {
  margin-bottom: 0;
}

.list-group-item:hover {
  background-color: #f5f5f5;
}

.list-group-item.active {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
}

.list-group-item.active:hover {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
}

.list-group-item-primary {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
}

        .form-group label {
  font-weight: bold;
  margin-bottom: 0.5rem;

}
   span {
  font-weight: bold;
  margin-bottom: 0.5rem;

}

.form-control {
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
}

.form-control:focus {
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.form-control-lg {
  font-size: 1.25rem;
  padding: 0.5rem 1rem;
}

.form-control-sm {
  font-size: 0.875rem;
  padding: 0.25rem 0.5rem;
}

.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-primary:focus,
.btn-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

    </style>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="../images/{{ $voiture['image'] }}" alt="Voiture" class="img-fluid">
      <ul class="list-group">
        <li class="list-group-item"><i class="fa fa-car text-primary"></i> <span>Transmission :</span>  {{ $voiture->transmission }}</li>
        <li class="list-group-item"> <i class="fa fa-charging-station text-primary"></i><span>Carburant :</span> {{ $voiture->carburant }}</li>
        <li class="list-group-item"><i class="fa fa-cogs text-primary"></i><span>Stéréo :</span> {{ $voiture->stereo }}</li>
        <li class="list-group-item"><i class="fa fa-chart-bar text-primary"></i><span>Climatisation :</span> {{ $voiture->climatisation }}</li>
        <li class="list-group-item"><i class="fa fa-users text-primary"></i><span>Max passagers :</span> {{ $voiture->maxpassagers}}</li>
        <li class="list-group-item"><i class="fa fa-suitcase text-primary"></i><span>Bagages :</span> {{ $voiture->bagages }}</li>
        <li class="list-group-item"><i class="fa fa-car-side text-primary"></i><span>Portes :</span> {{ $voiture->desPortes }}</li>
        <li class="list-group-item fa text-primary"><span>Prix :</span>  {{ $voiture->prix }}</li>
      </ul>
    </div>
    <div class="col-md-6">
      <h3>Remplissez réserver la voiture {{ $voiture['marque'] }} {{ $voiture['modele'] }}</h3>
      <form action="{{ route('voiture.store') }}" method="POST">
        @csrf
        <div class= "form-group" style="display:none;">
          <input type= "text"  name="matricule" class= "form-control" value="{{ $voiture->matricule }}" required> 
        </div> 
        <div class= "form-group" style="display:none;"> 
          <input type= "text"  name="marque" class= "form-control" value="{{ $voiture->marque }}" required> 
        </div> 
        <div class= "form-group" style="display:none;"> 
          <input type= "text"  name="modele" class= "form-control" value="{{ $voiture->modele }}" required> 
        </div> 
        <div class= "form-group" style="display:none;" > 
          <input type= "number"  name="prix" class= "form-control" value="{{ $voiture->prix }}" required> 
        </div> 
        <div class="form-group">
          <label for="nom">Nom et Prénom :</label>
          <input type="text" id="nom" name="nom" class="form-control form-control" required>
        </div>
        <div class="form-group">
          <label for="cin">CIN N° ou Passeport N°:</label>
          <input type="text" id="cin" name="cin" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="permis">Permis de Conduite N°:</label>
          <input type="text" id="permis" name="permis" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="adresse">Adresse :</label>
          <input type="text" id="adresse" name="adresse" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="telephone">Téléphone :</label>
          <input type="number"  name="tele" class="form-control" required>
        </div>
        <div class= "form-group "> 
          <label for= "gsm"> Téléphone 2 :</label> 
          <input type= "number"  name="gsm" class= "form-control" required> 
        </div> 
        <div class= "form-group "> 
          <label for= "date"> Date Début :</label> 
          <input type= "date" id= "date" name= "dateDebut"  class= "form-control " required> 
        </div> 
        <div class= "form-group "> 
          <label for= "duree"> Durée prévue :</label> 
          <input type= "number" id= "duree" name= "duree" min= 1 max= 30 class= "form-control " required> 
        </div> 
        <div class= "form-group"> 
          <label for= "message"> Message :</label> 
          <textarea id= "message" name= "message" rows= 4 cols= 40 class= "form-control" required></textarea> 
        </div> 
        <button type= "submit" class= "btn btn-primary btn-block"> Réserver </button> 
      </form> 
    </div> 
  </div> 
</div>
@endsection