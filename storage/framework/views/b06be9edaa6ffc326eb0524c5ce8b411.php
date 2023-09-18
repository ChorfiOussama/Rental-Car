
<?php $__env->startSection('content'); ?>
<head>
<link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
      rel="stylesheet"
    />
</head>
<div class=" category">
    <div class="section-header">
        <h2>TROUVEZ VOTRE VOITURE</h2>
    </div>     
</div>
<div class="search">
    <div class="row">  
    <form action='filter' method='post' class="row g-3">
      <?php echo csrf_field(); ?>
      <!-- <div class="col-auto">
          <input type="text" class="form-control" name="libele" placeholder="groupe">
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Recherche</button>
        </div> -->
      
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
        <select class="custom-select px-4 form-select" name="libele">
          <option defaultValue="selected">Voitures</option>
          <option defaultValue="Citroen">Citroen</option>
          <option defaultValue="Kia Picanto">Kia Picanto</option>
          <option defaultValue="Jeep">Jeep</option>
          <option defaultValue="Range Rover">Range Rover</option>
          <option defaultValue="Dacia">Dacia</option>
        </select>
      </div>
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
        <label for=""></label
        ><button type="submit" class="btn btn-primary btn-block" id="Search" >
          Search
        </button>
      </div>
      </form>
    </div>
</div>
<div class="featured-category category">
    <div class="container-fluid">
        <div class="container">
           
            <div class="car-container">
                <div class="row">
                <?php $__currentLoopData = $voitures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voiture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                   
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="car-rent-item">
                            <h4><?php echo e($voiture['marque']); ?> <?php echo e($voiture['modele']); ?></h4>
                            <img class="bd-placeholder-img card-img-top" 
                                width="80%" 
                                height="200"
                                src="images/<?php echo e($voiture['image']); ?>"
                                alt="<?php echo e($voiture['image']); ?>"
                               
                            />
                            <div class="car-rent-item-info">
                                <div class="row">
                                    <div
                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12"
                                    >
                                        <i class="fa fa-car text-primary"></i>
                                        <span class="description-title"
                                            >Transmission :
                                        </span>
                                        <?php echo e($voiture['transmission']); ?>

                                    </div>
                                    <div
                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12"
                                    >
                                    <i class="fa fa-charging-station text-primary"></i>
                                        <span class="description-title"
                                            >Carburant :
                                        </span>
                                        <?php echo e($voiture['carburant']); ?>

                                    </div>
                                 
                                    <div
                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12"
                                    >
                                        <i class="fa fa-cogs text-primary"></i>
                                        <span class="description-title"
                                            >Stéréo  :
                                        </span>
                                        <?php echo e($voiture['stereo']); ?>

                                    </div>
                                    <div
                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12"
                                    >
                                        <i
                                            class="fa fa-chart-bar text-primary"
                                        ></i>
                                        <span class="description-title"
                                            >Climatisation :
                                        </span>
                                        <?php echo e($voiture['climatisation']); ?>

                                    </div>

                                    <div
                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12"
                                    >
                                        <i class="fa fa-users text-primary"></i>
                                        <span class="description-title"
                                            >Max passagers :
                                        </span>
                                        <?php echo e($voiture['maxpassagers']); ?>

                                    </div>
                                    <div
                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12"
                                    >
                                        <i
                                            class="fa fa-suitcase text-primary"
                                        ></i>
                                        <span class="description-title"
                                            >Bagages :
                                        </span>
                                        <?php echo e($voiture['bagages']); ?>

                                    </div>
                                    <div
                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12"
                                    >
                                        <i
                                            class="fa fa-car-side text-primary"
                                        ></i>
                                        <span class="description-title"
                                            >Des Portes :
                                        </span>
                                        <?php echo e($voiture['desPortes']); ?>

                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary px-3" id="btnPrix" 
                                href="<?php echo e(route('voiture.show',['voiture'=> $voiture['id']])); ?>">
                                <?php echo e($voiture['prix']); ?>Dh/Day
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voitures.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\PFE\resources\views/voitures/index.blade.php ENDPATH**/ ?>