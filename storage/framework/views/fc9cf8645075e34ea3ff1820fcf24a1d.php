
<?php $__env->startSection('title', 'Modifier'); ?>

<?php $__env->startSection('content'); ?>
<section>
    <h3><u>Modifier  voiture:</u></h3>
</section>
<form action="<?php echo e(route('voitures.update', $voiture->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?> 
    <div class="container text-center">
        <div class="row g-1">
            <div class="col-sm-3 offset-sm-2 texta">
                <strong>Voiture :</strong>
                <input
                    type="file"
                    name="image"
                    class="form-control text-center"   
                />
            </div>
            <div class="col-sm-3 offset-sm-2 texta">
                <strong>Matricule :</strong>
                <input
                    type="text"
                    name="matricule"
                    class="form-control text-center"
                    value="<?php echo e($voiture->matricule); ?>"
                />
            </div>
        </div>
        <div class="row g-1">
            <div class="col-sm-3 offset-sm-1 texta">
                <strong>Marque :</strong>
                <input
                    type="text"
                    name="marque"
                    class="form-control text-center"
                    value="<?php echo e($voiture->marque); ?>"
                />
            </div>
            <div class="col-sm-3 offset-sm-1 texta">
                <strong>Modéle :</strong>
                <input
                    type="text"
                    name="modele"
                    class="form-control text-center"
                    value="<?php echo e($voiture->modele); ?>"
                />
            </div>
            <div class="col-sm-3 offset-sm-1 texta">
                <strong>Prix Location Dh/Jour :</strong>
                <input
                    type="number"
                    name="prix"
                    class="form-control text-center"
                    value="<?php echo e($voiture->prix); ?>"

                />
            </div>
        </div>
        <div class="row g-1">
            <div class="col-sm-3 offset-sm-2 texta">
                <strong>Carburant :</strong>
                <select
                    class="form-select text-center"
                    aria-label="Default select example"
                    name="carburant"
                >   
                    <option value="Essence">Essence</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Electro">Electro</option>
                </select>
            </div>
            <div class="col-sm-3 offset-sm-2 texta">
                <strong>Transmission :</strong>
                <select
                    class="form-select text-center"
                    aria-label="Default select example"
                    name="transmission"
                >
                    <option value="Manuel">Manuel</option>
                    <option value="Automatic">Automatic</option>
                </select>
            </div>
        </div>
        <div class="row g-1">
            <div class="col-sm-3 offset-sm-2 texta">
                <strong>Stéréo :</strong>
                <input
                    type="text"
                    name="stereo"
                    class="form-control text-center"
                    value="<?php echo e($voiture->stereo); ?>"
                />
            </div>
            <div class="col-sm-3 offset-sm-2 texta">
                <strong>Climatisation :</strong>
                <input
                    type="text"
                    name="climatisation"
                    class="form-control text-center"
                    value="<?php echo e($voiture->climatisation); ?>"
                />
            </div>
        </div>
        <div class="row g-1">
            <div class="col-sm-3 offset-sm-2 texta">
                <strong>Max Passagers :</strong>
                <input
                    type="number"
                    name="maxpassagers"
                    class="form-control text-center"
                    value="<?php echo e($voiture->maxpassagers); ?>"
                />
            </div>
            <div class="col-sm-3 offset-sm-2 texta">
                <strong>Bagages :</strong>
                <input
                    type="number"
                    name="bagages"
                    class="form-control text-center"
                    value="<?php echo e($voiture->bagages); ?>"
                />
            </div>
        </div>
        <div class="row g-1">
            <div class="col-sm-3 offset-sm-2 texta">
                <strong>Disponible :</strong>
                <select
                    class="form-select text-center"
                    aria-label="Default select example"
                    name="dispo"
                >
                    <option value="Oui">Oui</option>
                    <option value="Non">Non</option>
                </select>
            </div>
            <div class="col-sm-3 offset-sm-2 texta">
                <strong>Des Portes :</strong>
                <input
                    type="number"
                    name="desPortes"
                    class="form-control text-center"
                    value="<?php echo e($voiture->desPortes); ?>"
                />
            </div> 
        </div>
        <br />
        <div class="col-auto">
            <button name="badd" type="submit" class="btn btn-primary mb-3">
                Enregistrer
            </button>
        </div>
    </div>
</form>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\PFE\resources\views/admin/Voiture/editvoiture.blade.php ENDPATH**/ ?>