
<?php $__env->startSection('content'); ?>
<div class="search">
  <div class="">
    <div class="row">
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
        <select class="custom-select px-4 form-select">
          <option defaultValue="selected">Voitures</option>
          <option defaultValue="1">Economy</option>
          <option defaultValue="2">Compact</option>
          <option defaultValue="3">Full Size</option>
          <option defaultValue="4">Estate</option>
          <option defaultValue="5">Minivan</option>
          <option defaultValue="6">SUV</option>
          <option defaultValue="7">Luxury</option>
          <option defaultValue="8">Electric</option>
          <option defaultValue="9">Cargo</option>
        </select>
      </div>
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
        <label for=""></label
        ><button class="btn btn-primary btn-block" id="Search" type="submit">
          Search
        </button>
      </div>
    </div>
  </div>
</div>
<br />
<div class="banner-container">
  <div class="container py-5">
    <div class="bg-banner py-5 px-4 text-center">
      <div class="py-5">
        <h4 class="display-1 text-uppercase text-primary mb-2">
          LOCATION VOITURE RABAT
        </h4>
        <h4 class="text-uppercase text-light mb-4">
          VOUS TROUVEREZ SUR NOTRE SITE, LES INFORMATIONS NÉCESSAIRES POUR LOUER
          VOTRE VOITURE CHEZ NOUS (PRIX, CONDITIONS, FORMULAIRE DE RÉSERVATION,
          INFORMATIONS SUR LE PARC AUTO ....) HEUREUX DE POUVOIR VOUS COMPTER
          PARMI NOS FUTURS CLIENTS, NOUS VOUS SOUHAITONS UNE BONNE NAVIGATION
          SUR NOTRE SITE WEB.
        </h4>
        <a class="btn btn-primary mt-2 py-3 px-5" href=""> Nos Voitures </a>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\PFE\resources\views/home.blade.php ENDPATH**/ ?>