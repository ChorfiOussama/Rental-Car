@extends('voitures.layout')
@section('content')
<head>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/contact.css">
</head>
<div class="container text-center">
      <div class="row test">
        <div class="col-md-6">
          <h2>Maps</h2>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.9626044892802!2d-6.926798745989825!3d33.916362014399866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda70d2167484fab%3A0xafcc2e5ef14c8ba9!2sModou%20car!5e0!3m2!1sfr!2sma!4v1679234677837!5m2!1sfr!2sma"
            width="100%"
            height="400"
            frameborder="0"
            style="border: 0"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"
          ></iframe>
        </div>
        <div class="col-md-6">
          <h2>Contact Us</h2>
          <form action="submit-form.php" method="post">
            <div class="form-group">
              <label for="nom-prenom">Nom et Prénom:</label>
              <input
                type="text"
                class="form-control"
                id="nom-prenom"
                name="nom-prenom"
                required
              />
            </div>
            <div class="form-group">
              <label for="email">Addresse e-mail:</label>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                required
              />
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea
                class="form-control"
                id="message"
                name="message"
                rows="5"
                required
              ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>
        </div>
      </div>

      <div class="infoContact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="text-center">
              <i class="fa fa-map-marker"></i> <span>Adresse:</span>  198 Hay Masroure 1 Rue de Arid, Témara 12000 &nbsp;&nbsp;&nbsp;
              <i class="fa fa-phone"></i> <span> Téléphone:</span> +212 552684500 &nbsp;&nbsp;&nbsp;
              <i class="fa fa-envelope"></i> <span>E-mail:</span>  info@gmail.com
            </p>
          </div>
        </div>
      </div>
      </div>
@endsection