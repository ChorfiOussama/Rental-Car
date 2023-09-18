
<?php $__env->startSection('title', 'Ajouter Locataire'); ?>
<?php $__env->startSection('content'); ?>
<h3><u>Locataire :</u></h3>
<form action="<?php echo e(route('locataire.store')); ?>" method="POST" >
<?php echo csrf_field(); ?>
  <div class="container text-center">
    <div class="col-4 col-sm-6 offset-sm-3 texta">
        <strong>Nom et Prénom :</strong> 
        <input
          type="text"
          class="form-control text-center"
          name="nom"
          title="input"
        
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
                />
              </div>
              <div class="  col-sm-3 offset-sm-2 texta">
                <strong>Permis de Conduite N°:</strong>
                <input
                  type="text"
                  class="form-control text-center"
                  name="permis"
                  title="input"
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
          />
        </div>
        <div class="col-sm-3 offset-sm-2 texta">
          <strong>GSM :</strong>
          <input
            type="number"
            class="form-control text-center"
            name="gsm"
            title="input"
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
              value="<?php echo e($voiture['matricule']); ?>"
            />
          </div>
          <div class="col-sm-3 offset-sm-1 texta">
            <strong> Marque :</strong>
            <input type="text" 
                name="marque" 
                class="form-control text-center"
                value="<?php echo e($voiture['marque']); ?>" />
          </div>
          <div class="col-sm-3 offset-sm-1 texta">
            <strong> Modéle :</strong>
            <input type="text" 
                name="modele" 
                class="form-control text-center"
                value="<?php echo e($voiture['modele']); ?>" />
          </div>
      </div>
    <div class="row g-1">
          <div class="col-sm-3 offset-sm-2 texta">
            <strong>prix :</strong>
            <input
              type="number"
              class="form-control text-center"
              name="prix"
              value="<?php echo e($voiture['prix']); ?>"
            />
          </div>
          <div class="col-sm-3 offset-sm-2 texta">
            <strong> Duree prevue :</strong>
            <input type="number" name="duree" class="form-control text-center" />
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\PFE\resources\views/admin/showClient.blade.php ENDPATH**/ ?>