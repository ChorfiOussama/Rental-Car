<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: ./login");
    exit(); 
  }
?>

<?php $__env->startSection('title', 'Voitures'); ?>

<?php $__env->startSection('content'); ?>
     <div class="container">

      <h3><u>Liste des voitures  :</u></h3>
      <div class="col-auto">
          <a href="<?php echo e(route('voitures.create')); ?>" name="badd"  class="btn btn-primary mb-3">
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
        <?php $__currentLoopData = $voitures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
              <img alt='voiture' src="<?php echo e(asset('../images/' . $i->image)); ?>" width='100' height='60' >
            </td>
            <td><?php echo e($i->matricule); ?></td>
            <td><?php echo e($i->marque); ?></td>
            <td><?php echo e($i->modele); ?></td>
            <td><?php echo e($i->prix); ?></td>
            <td><?php echo e($i->dispo); ?></td>
            <td>
                <form action="<?php echo e(route('voitures.destroy', $i->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <a href="<?php echo e(route('voitures.edit', $i->id)); ?>" class="btn btn-info">modifier</a>
                    <button type="submit" class="btn btn-danger">❌</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\PFE\resources\views/admin/enregistrement.blade.php ENDPATH**/ ?>