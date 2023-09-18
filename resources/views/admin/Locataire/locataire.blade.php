<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: ./login");
    exit(); 
  }
?>
<?php 
      use Carbon\Carbon;
 ?>
@extends('admin.layout')
@section('title', 'Locataire')
@section('content')
<div class="container">
<h3><u>Liste des voitures disponibles pour location :</u></h3>

<table class="table mt-3 text-center">
  <tr>
      <th>Voiture</th>
      <th>Matricule</th>
      <th>Marque</th>
      <th>Modéle</th>
      <th>Prix/Jour</th>
      <th>Ajouter Locataire</th>
  </tr>
  @foreach($voitures as $i)
  <tr>
      <td>
        <img alt='voiture' src="{{ asset('../images/' . $i->image) }}" width='100' height='60' >
      </td>
      <td>{{$i->matricule}}</td>
      <td>{{$i->marque}}</td>
      <td>{{$i->modele}}</td>
      <td>{{$i->prix}}</td>
      <td>
        <a href="{{ route('locataire.show', $i->id) }}" class="btn btn-primary mb-3">
          Ajouter Locataire
        </a>
      </td>
  </tr>
  @endforeach
</table>
</div>

<div class="container">
  <h3><u>Liste des locations en cours :</u></h3>

  <table border="1" class="table table-bordered border-primary text-center">
    <tr >
        <th scope="col">Matricule </th>
        <th scope="col">Nom client</th>
        <th scope="col">Contact client</th>
        <th scope="col">Jours</th>
        <th scope="col">Date début</th>
        <th scope="col">Total (Dh)</th>
        <th scope="col">Etat</th>
        <th scope="col">Contrat</th>
        <th scope="col">Retourner</th>
        <th scope="col">Action</th>
    </tr>
    @foreach ($clients as $client)
    
     <tr>
        <td>{{ $client->matricule }}</td>
        <td>{{ $client->nom }}</td>
        <td>0{{ $client->tele }}</td>
        <td>{{ $client->duree }}</td>
        <td>{{ $client->created_at }}</td>
        <td>{{ $client->total}}</td>
        <td>
          <?php 
                $dateLocat = Carbon::parse( $client->created_at);
                $now = Carbon::now();
                $duree = $client->duree;
          ?>
          @if ($now->diffInDays($dateLocat) >= $duree)
              ✔Terminée
              @else
                🔁En cours
          @endif
        </td>
        <td><a href='pdf/{{$client->id}}' class='fa fa-print'> </a></td>
        <td><a href='' class='fa fa-print '></a></td>
        <td>
        <div class="col-auto d-flex">
        <form action="{{ route('locataire.destroy', $client->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button name="bsupp" type="submit" class="btn btn-success mb-3" data-toggle="tooltip" data-placement="top" title="Terminée & Supprimer">
              ✅
            </button> 
        </form>
            <!-- <a href="#" class="btn btn-info mb-3 " data-toggle="tooltip" data-placement="top" title="Modifier">
             🔁
            </a> -->
          </div>
        </td>
    </tr>
    @endforeach
    </table>
</div>
@endsection
