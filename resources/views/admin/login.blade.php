@php 
use Illuminate\Support\Facades\Session;
@endphp

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" />
  </head>
  <body>
  <!-- {{ session('mess') }} -->
    <div class="image">
      <img alt=" Logo" src="{{ asset('images/logo.png') }}" />
    </div>
    <section>
      <div class="login-box">
        <h2>Connexion  </h2>
       
        <form action="{{ url('login') }}" method="post">
          @csrf
          <div class="user-box">
            <input type="text" name="username" required />
            <label>Nom d'Utilisateur</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required />
            <label>Mot De Passe</label>
          </div>
          <button type="submit" class="button-form" id="submit">Connexion</button>
        </form>
      </div>
    </section>
    <footer>
      <p>
        Copyright © 2023 Crée Par
        <a href="https://chorfioussama.github.io/Portfolio/">Chorfi</a>
      </p>
    </footer>
  </body>
</html>
