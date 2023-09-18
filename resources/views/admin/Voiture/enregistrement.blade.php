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
@section('title', 'Voitures')

@section('content')
     <div class="container">

      <h3><u>Liste des voitures  :</u></h3>
      <div class="col-auto">
          <a href="{{ route('voitures.create') }}" name="badd"  class="btn btn-primary mb-3">
            Ajouter Nouveau Voiture
          </a>
        </div>
    <table class="table mt-3 text-center">
        <tr>
            <th>Voiture</th>
            <th>Matricule</th>
            <th>Marque</th>
            <th>Model</th>
            <th>Prix/Jour</th>
            <th>Disponible</th>
            <th>Action</th>
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
            <td>{{$i->dispo}}</td>
            <td>
                <form action="{{route('voitures.destroy', $i->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <a href="{{ route('voitures.edit', $i->id) }}" class="btn btn-info">modifier</a>
                    <button type="submit" class="btn btn-danger">❌</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection