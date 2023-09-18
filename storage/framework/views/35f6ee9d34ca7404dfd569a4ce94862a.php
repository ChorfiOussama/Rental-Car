<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modou Car</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <div class="container-fluid">
      <nav>
        <div class="position-relative nav-bar">
          <div class="position-relative px-lg-5">
            <nav
              class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5"
            >
              <div class="container">
                <div
                  href=""
                  class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none"
                >
                  <img alt="Logo" src="../images/logo.png" width="250" height="60" />
                </div>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarCollapse"
                  title="button"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav mx-auto py-0">
                    <li> 
                      <a href="<?php echo e(route('home')); ?>" class="nav-item nav-link active"> Acceuil </a>
                    </li>
                    <li>
                      <a href="<?php echo e(route('voiture.index')); ?>" class="nav-item nav-link"> Nos Voitures </a>
                    </li>
                    <li>
                      <a href="<?php echo e(route('condition')); ?>" class="nav-item nav-link"> Conditions </a>
                    </li>

                    <li>
                      <a href="<?php echo e(route('contact')); ?>" class="nav-item nav-link"> Contact </a>
                    </li>
                  </ul>
                  <ul class="navbar-nav mx-auto ">
                  <li>
                      <a href="./login" class="nav-item nav-link"> Admin </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </nav>
    <?php echo $__env->yieldContent('content'); ?>
        <!----------------------Star footer---------------------->
        <div class="container">
      <footer
        class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top"
      >
        <!-- <p class="col-md-4 mb-0 text-muted">&copy; 2022 Company, Inc</p> -->
        <p class="col-md-4 mb-0 text-muted">
        Copyright © 2023 Crée Par
        <a href="https://chorfioussama.github.io/Portfolio/">Chorfi</a>
      </p>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-muted">Acceuil</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-muted">Nos Voitures </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-muted">Conditions</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-muted">Contact</a>
          </li>
        </ul>
      </footer>
    </div>
    <!----------------------End footer---------------------->
    </div>
</body>

    <script src="../js/bootstrap.min.js"></script>
</html><?php /**PATH D:\Laravel\PFE\resources\views/voitures/layout.blade.php ENDPATH**/ ?>