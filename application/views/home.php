<!--
Author: Bnakat
Author URL: http://bnakat.am

-->

		
	<!-- header -->
	
	<!-- //header -->

	<!-- banner -->
     <?php 
		  if(isset($_SESSION['site_lang'])){
		  	     $lang = $_SESSION['site_lang'];
		  }
		  else{
		  	    $lang = 'am';
		  } 
			 ?>
	<div class="slider">
		<!-- Slideshow -->
		<ul class="rslides" id="slider">
			<?php
					$i=1;
				foreach($slider as $value){
					$title  = $value['title-'.$lang];
				    $image  = $value['image'];
				
			 ?>
			<li>
				<div class="slider-info banner" style = "background-image: url('<?=base_url("images/$image")?>') ;">
					<div class="container">
						<div class="style-banner">
							<h3 class="text-white font-weight-bold"><?php echo $title ?></h3>
							<!-- <p class="text-light mt-sm-3 mt-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
								deserunt mollit anim id est laborum.</p>
							<a href="about.html" class="btn button-style mt-sm-5 mt-4">Read More</a> -->
						</div>
					</div>
				</div>
			</li>

		<?php 
	          $i++;
	      } ?>

		</ul>
	</div>
	<!-- //banner -->
	<span class="after1"></span>
	<!-- banner bottom -->
	<?php foreach ($home_info as $value) {
	         $image   = $value['image'];
	         $image1  = $value['image1'];
	         $image2  = $value['image2'];
	         $title   = $value['title-'.$lang];
	         $info    = $value['info-'.$lang];
	} ?>

	<div class="w3ls-welcome py-4">
		<div class="container-fluid info_part py-lg-3" >
			<div class="row">
				<div class="col-xl-7 welcome-right p-lg-0 mt-lg-3 text-lg-left text-center">
					<img src="<?php echo base_url('images/'.$image)?>" alt=" " class="img-fluid">
				</div>
				<div class="col-xl-5 welcome-left mt-4 p-lg-0">
					<h3 class="text-dark font-weight-bold"><?php echo $title ?></h3>
					<h4 class="mb-sm-5 mb-4 mt-3 font-italic font-weight-bold">
						<?php echo $info ?>
					</h4>
					<div class="support-bottom">
						<div class="col-sm-6 support-grid">
							<!-- <div class="icon-effect">
								<i class="fa fa-bus" aria-hidden="true"></i>
							</div>
							<h5 class="text-dark mt-4 mb-3">Free Shipping</h5>
							<p>Ut enim ad minima ven aiam, quis no strum ullam corp oris susc ipit.</p>
							<a href="about.html" class="btn button-style-2 text-uppercase mt-sm-4 mt-3 p-0">Read More<i class="fa fa-caret-right ml-2"
								 aria-hidden="true"></i></a> -->
								 <img src="<?php echo base_url('images/'.$image1)?>">
						</div>
						<div class="col-sm-6 support-grid">
							<!-- <div class="icon-effect grid-w3ls-2">
								<i class="fa fa-refresh" aria-hidden="true"></i>
							</div>
							<h5 class="text-dark mt-4 mb-3">Free Refund</h5>
							<p>Ut enim ad minima ven aiam, quis no strum ullam corp oris susc ipit.</p>
							<a href="about.html" class="btn button-style-2 text-uppercase mt-sm-4 mt-3 p-0">Read More<i class="fa fa-caret-right ml-2"
								 aria-hidden="true"></i></a> -->
								  <img src="<?php echo base_url('images/'.$image2)?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner bottom -->

	<!-- laptop section -->
	<?php foreach ($home_image as $value) {
	         $image   = $value['image'];
	         
	} ?>
	<div class="who-agile text-center" style = "background-image: url('<?=base_url("images/$image") ?>') ;">
		<div class="wrap  py-lg-3">
		</div>
	</div>
	<!-- //laptop section -->
	<?php foreach ($princip_title_image as $value) {
	         $image   = $value['image'];
	         $title   = $value['title-'.$lang];
	         
	}
		
	 ?>
	<!-- mobile section -->
	<div class="feature py-5" id="what">
		<div class="container-fluid info_part py-lg-3">
			<div class="row">
				<div class="col-xl-6 col-lg-6 mt-4">
					<h3 class="text-dark font-weight-bold text-mobile-w3"><?php echo $title ?></h3>
					<div class="agileits-w3layouts-grid pt-md-4">
						<?php 
						     $i=1;
							 foreach ($principles as $value) {
						         $princip_image   = $value['image'];
					             $princip_title   = $value['title-'.$lang];
					             $princip_info    = $value['info-'.$lang];
						         
						
						?>

						<div class="<?php echo $i==2 ? 'row wthree_agile_us my-xl-5 my-lg-4 my-sm-5 my-4' : 'row wthree_agile_us';?>">
							<div class="col-lg-3 col-sm-2 col-3 text-center">
								<div class="icon-effect">
									<!-- <i class="fa fa-apple" aria-hidden="true"></i> -->
									<img src="<?php echo base_url('images/'. $princip_image)?>" class="">
								</div>
							</div>
							<div class="col-lg-9 col-sm-10 col-9 agile-why-text">
								<h4 class="princip1 mb-3 font-weight-bold"><?php echo $princip_title ?></h4>
								<p class="font-weight-bold" style="color:#505050"><?php echo $princip_info ?></p>
								<a href="<?php echo base_url('pages/about_principes/index'.$i) ?>" target="" class="btn-link btn-small font-weight-bold" ><?php echo $this->lang->line('read_more')?>;</a>
							</div>
						</div>
						<?php
						  $i++;
							}
						 ?> 
					
					</div>
				</div>
				<!-- <div class="col-xl-2 order-xl-1 order-2"></div> -->
				<div class="col-lg-6 p-lg-0 mt-lg-3 text-lg-right text-center mt-4">
					<!-- <div class="phone text-center"> -->
						<img alt="" src="<?php echo base_url('images/'.$image)?>" class="phone-img-w3ls">
					<!-- </div> -->
				</div>
			</div>
		</div>
	</div>


	<!-- //mobile section -->
		<?php 

		   foreach ($clients_title as $value) {
	         $title   = $value['title-'.$lang];
	      
			}
	 ?>
	<div class="py-5" id="services">
		
  <h2><?php echo $title; ?></h2>
 <section class="clients-logo">
  	<div class="owl-carousel owl-theme" id="owl-clients">
  		 <?php foreach ($clients as $value) {
   	     	  $link  =  $value['link'];	
   	     	  $image =  $value['image'];	
   	     
   	     ?>
   	    <div class="item">

        <div ><a href="<?php echo $link ?>" target="_blank"><img src="<?php echo base_url('images/Logo/'.$image)?>"></a> </div>

       </div>
      <?php 
      	     } 
      ?>
				   			 		
     </div>
  </section>
	</div>


	<!-- testimonials -->
		<?php 

		   foreach ($clients_title as $value) {
	          $image   = $value['image'];
	      
			}
	 ?>
	<section class="clients py-5" id="testi" style = "background-image: url('<?=base_url("images/$image") ?>') ;">
		<div class="container py-xl-5 py-lg-3">
			<div class="row py-sm-5">
				<div class="col-lg-6 col-md-8">
					<div class="owl-carousel owl-theme" id="owl-demo">
  		                   <?php  
						        $i = 0;
						       foreach ($comments as $value) {
						       	 $title = $value['title-'.$lang];
						       	 $info  = $value['info-'.$lang];
						       	 $link  = $value['link'];
					         ?>
							<div class="item">
								<div class="feedback-info">
									<div class="feedback-top">
										<p><a href="<?php echo $link ?>" target="_blank" style="color: #aa130e;"><?php echo $title ?></a></p>
										<h4 class="mt-4 text-white font-weight-bold mb-4"><?php echo $info ?></h4>
									</div>
								</div>
							</div>
							<?php 
						      	   $i++; } 
						      ?>
				   
		
					 
				
                   </div>
					


</div>
				</div>
				<div class="col-lg-6 col-md-4"></div>
			</div>
	
	</section>

	