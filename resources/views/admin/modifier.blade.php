@php 
use Illuminate\Support\Facades\Session;
@endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modifier</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" />
  </head>
  <body>
    <section>
    {{ session::get('messa') }}
      <div class="login-box">
        <h2>Modifier</h2>
        <form action="{{ url('modifier') }}" method="post">
            @csrf
          <div class="user-box">
            <input type="text" name="username" required />
            <label> Nouveau Nom d'Utilisateur</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required />
            <label>Nouveau Mot De Passe</label>
          </div>
          <div class="user-box">
            <input type="password" name="password2" required />
            <label>Confirmer Mot De Passe</label>
          </div>
          <button  class="button-form" id="submit" name="enr">Enregistrer</button><br>
        </form>
        <button  class="button-form" id="submit" name="enr"><a href="locataire">Retour</a></button>
      </div>
    </section>
   
  </body>
</html>