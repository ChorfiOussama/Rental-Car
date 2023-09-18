<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: ./login");
    exit(); 
  }
?>


<?php $__env->startSection('title', 'Reservations'); ?>
<?php $__env->startSection('content'); ?>
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
  <?php $__currentLoopData = $reservers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
      <td><?php echo e($i->marque); ?></td>
      <td><?php echo e($i->modele); ?></td>
      <td><?php echo e($i->matricule); ?></td>
      <td><?php echo e($i->prix); ?></td>
      <td><?php echo e($i->nom); ?></td>
      <td><?php echo e($i->dateDebut); ?></td>
      <td><?php echo e($i->duree); ?></td>
      <td>0<?php echo e($i->tele); ?></td>
      <td>0<?php echo e($i->Message); ?></td>
      <td>
      <form action="<?php echo e(route('reserver.destroy', $i->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <a href="<?php echo e(route('reserver.show', $i->id)); ?>" class="btn btn-success">✅</a>
                    <button type="submit" class="btn btn-danger">❌</button>
                </form>
      </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\PFE\resources\views/admin/Reserver/reserver.blade.php ENDPATH**/ ?>