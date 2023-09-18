<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: ./login");
    exit(); 
  }
?>

@extends('admin.layout')
@section('title', 'Reservations')
@section('content')
<div class="container">
<h3><u>Liste des Reservations :</u></h3>

<table class="table mt-3 text-center">
  <tr>
      <th>Marque</th>
      <th>Modéle</th>
      <th>Matricule</th>
      <th>Prix/Jour</th>
      <th>Nom</th>
      <th>Date Début</th>
      <th>Durée</th>
      <th>Téléphone</th>
      <th>Message</th>
      <th>Action</th>
  </tr>
  @foreach($reservers as $i)
  <tr>
      <td>{{$i->marque}}</td>
      <td>{{$i->modele}}</td>
      <td>{{$i->matricule}}</td>
      <td>{{$i->prix}}</td>
      <td>{{$i->nom}}</td>
      <td>{{$i->dateDebut}}</td>
      <td>{{$i->duree}}</td>
      <td>0{{$i->tele}}</td>
      <td>0{{$i->Message}}</td>
      <td>
      <form action="{{route('reserver.destroy', $i->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <a href="{{route('reserver.show', $i->id)}}" class="btn btn-success">✅</a>
                    <button type="submit" class="btn btn-danger">❌</button>
                </form>
      </td>
  </tr>
  @endforeach
</table>
</div>
@endsection
