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

<?php $__env->startSection('title', 'Locataire'); ?>
<?php $__env->startSection('content'); ?>
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
  <?php $__currentLoopData = $voitures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
      <td>
        <img alt='voiture' src="<?php echo e(asset('../images/' . $i->image)); ?>" width='100' height='60' >
      </td>
      <td><?php echo e($i->matricule); ?></td>
      <td><?php echo e($i->marque); ?></td>
      <td><?php echo e($i->modele); ?></td>
      <td><?php echo e($i->prix); ?></td>
      <td>
        <a href="<?php echo e(route('locataire.show', $i->id)); ?>" class="btn btn-primary mb-3">
          Ajouter Locataire
        </a>
      </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
     <tr>
        <td><?php echo e($client->matricule); ?></td>
        <td><?php echo e($client->nom); ?></td>
        <td>0<?php echo e($client->tele); ?></td>
        <td><?php echo e($client->duree); ?></td>
        <td><?php echo e($client->created_at); ?></td>
        <td><?php echo e($client->total); ?></td>
        <td>
          <?php 
                $dateLocat = Carbon::parse( $client->created_at);
                $now = Carbon::now();
                $duree = $client->duree;
          ?>
          <?php if($now->diffInDays($dateLocat) >= $duree): ?>
              ✔Terminée
              <?php else: ?>
                🔁En cours
          <?php endif; ?>
        </td>
        <td><a href='pdf/<?php echo e($client->id); ?>' class='fa fa-print'> </a></td>
        <td><a href='' class='fa fa-print '></a></td>
        <td>
        <div class="col-auto d-flex">
        <form action="<?php echo e(route('locataire.destroy', $client->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\PFE\resources\views/admin/Locataire/locataire.blade.php ENDPATH**/ ?>