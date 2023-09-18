<nav>
      <div class="container-fluid position-relative nav-bar">
        <div class="position-relative px-lg-5">
          <nav
            class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5"
          >
            <div class="container">
              <div
                href=""
                class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none"
              >
                <img alt="Logo" src="../../images/logo.png"  width="250" height="60" />
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
                    <a href="<?php echo e(route('locataire.index')); ?>" class="nav-item nav-link active">
                      Locataire 
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo e(route('voitures.index')); ?>" class="nav-item nav-link">
                      Les Voitures
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo e(route('reserver.index')); ?>" class="nav-item nav-link">
                      Réservations
                    </a>
                  </li>
                  
                </ul>
                <ul class="navbar-nav mx-auto py-0">
                  <div class="dropdown text-end " >
                    <a href="#" class="nav-item nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                      Paramétres
                    </a>
                    <ul class="dropdown-menu text-small">
                      <li><a class="dropdown-item" href="<?php echo e(url('logout')); ?>">Deconnexion</a></li>
                      <li><a class="dropdown-item" href="modifier">Modifier Utilisateur & Mot De Passe</a></li>
                    </ul>
                  </div>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </nav><?php /**PATH D:\Laravel\PFE\resources\views/admin/header.blade.php ENDPATH**/ ?>