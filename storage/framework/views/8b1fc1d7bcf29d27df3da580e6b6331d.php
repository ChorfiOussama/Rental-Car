<!-- 
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
<div class="featured-category category">
    <div class="container-fluid">
        <div class="container">
            <div class="section-header">
                <h2>Find Your Car</h2>
            </div>
            <div class="car-container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="car-rent-item">
                            <h4>Citron C4</h4>
                            <img
                                src="images/CitronC4.png"
                                alt="CitronC4"
                                width="300px"
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
                                        Automatic
                                    </div>
                                 
                                    <div
                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12"
                                    >
                                        <i class="fa fa-cogs text-primary"></i>
                                        <span class="description-title"
                                            >Stéréo  :
                                        </span>
                                        AM/FM w/ CD player
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
                                        A / C
                                    </div>

                                    <div
                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12"
                                    >
                                        <i class="fa fa-users text-primary"></i>
                                        <span class="description-title"
                                            >Max passagers :
                                        </span>
                                        5
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
                                        3
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
                                        5
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary px-3" id="btnPrix" href=""
                                >350 Dh/Day</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> -->

<?php $__env->startSection('content'); ?>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <h1> COMPUTRES</h1>
        </div>
        <div >
            <?php if(count($voitures)>0): ?>
                <ul>
                    <?php $__currentLoopData = $voitures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voiture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="">
                        <li>
                            <?php echo e($voiture['matricule']); ?> is from <strong><?php echo e($voiture['marque']); ?></strong> Price: <strong><?php echo e($voiture['prix']); ?></strong>
                        </li>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php else: ?> 
                <p>The are no voitures</p>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\PFE\resources\views/voiture.blade.php ENDPATH**/ ?>