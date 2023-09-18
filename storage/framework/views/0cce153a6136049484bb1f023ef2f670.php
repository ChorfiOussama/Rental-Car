
<?php $__env->startSection('content'); ?>
<head>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/contact.css">
</head>
<!-- <section class="ftco-section">
	<div class="container">
		<div class="row ">
			<div class="col-md-10">
				<div class="wrapper">
				    <div class="row">
						<div class="col-md-7">
							<div class="contact-wrap">
								<h3 class="mb-4">Contact Us</h3>
									 <div id="form-message-warning" class="mb-4"></div> 
								<form method="POST" id="contactForm" name="contactForm" class="contactForm">
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label class="label" for="name">Nom et Prénom :</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="Nom">
											</div>
										</div>
										<div class="col-md-5"> 
											<div class="form-group">
												<label class="label" for="email">Adresse e-mail</label>
												<input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
											</div>
										</div>
										<div class="col-md-10">
											<div class="form-group">
												<label class="label" for="subject">Sujet</label>
												<input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet">
											</div>
										</div>
										<div class="col-md-10">
											<div class="form-group">
												<label class="label" for="#">Message</label>
												<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-md-10">
											<div class="form-group">
												<input type="submit" value="Envoyer le Message" class="btn btn-primary">
												<div class="submitting"></div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.9626044892802!2d-6.926798745989825!3d33.916362014399866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda70d2167484fab%3A0xafcc2e5ef14c8ba9!2sModou%20car!5e0!3m2!1sfr!2sma!4v1679234677837!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			        	</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-map-marker"></span>
			        		</div>
			        		<div class="text">
				            	<p><span>Adresse:</span> 198 Hay Masroure 1 Rue de Arid, Témara 12000</p>
				          	</div>
			          	</div>
					</div>
					<div class="col-md-3">
						<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-phone"></span>
			        		</div>
			        		<div class="text">
				            	<p><span>Téléphone:</span> +212 552684500</p>
				            </div>
			            </div>
					</div>
					<div class="col-md-3">
						<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-paper-plane"></span>
			        		</div>
			        		<div class="text">
				            	<p><span>E-mail:</span> info@gmail.com</p>
				          	</div>
			          	</div>
					</div>
					<div class="col-md-3">
						<div class="dbox w-100 text-center"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<div class="container text-center">
      <div class="row test">
        <div class="col-md-6">
          <h2>Maps</h2>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.9626044892802!2d-6.926798745989825!3d33.916362014399866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda70d2167484fab%3A0xafcc2e5ef14c8ba9!2sModou%20car!5e0!3m2!1sfr!2sma!4v1679234677837!5m2!1sfr!2sma"
            width="100%"
            height="400"
            frameborder="0"
            style="border: 0"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"
          ></iframe>
        </div>
        <div class="col-md-6">
          <h2>Contact Us</h2>
          <form action="submit-form.php" method="post">
            <div class="form-group">
              <label for="nom-prenom">Nom et Prénom:</label>
              <input
                type="text"
                class="form-control"
                id="nom-prenom"
                name="nom-prenom"
                required
              />
            </div>
            <div class="form-group">
              <label for="email">Addresse e-mail:</label>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                required
              />
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea
                class="form-control"
                id="message"
                name="message"
                rows="5"
                required
              ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>
        </div>
      </div>
     
      <div class="infoContact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="text-center">
              <i class="fa fa-map-marker"></i> <span>Adresse:</span>  198 Hay Masroure 1 Rue de Arid, Témara 12000 &nbsp;&nbsp;&nbsp;
              <i class="fa fa-phone"></i> <span> Téléphone:</span> +212 552684500 &nbsp;&nbsp;&nbsp;
              <i class="fa fa-envelope"></i> <span>E-mail:</span>  info@gmail.com
            </p>
          </div>
        </div>
      </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('voitures.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\PFE\resources\views/voitures/contact.blade.php ENDPATH**/ ?>