<!--
Author: Bnakat
Author URL: http://bnakat.am

-->



	<!-- //header -->
      <?php 
		  if(isset($_SESSION['site_lang'])){
		  	     $lang = $_SESSION['site_lang'];
		  }
		  else{
		  	    $lang = 'am';
		  } 
			 ?>
	<!-- banner -->
	<?php foreach ($general_image as $value) {
		   $image = $value['image'];
	} ?>
	<div class="banner-w3ls-2" style = "background-image: url('<?=base_url("images/$image") ?>') ;"> </div>
	<!-- //banner -->


	<!-- about -->
	<?php 
	  foreach ($general_title as $value) {
		   $title = $value['title-'.$lang];
	 }
     
	foreach ($text_info as $value) {
		   $info = $value['info-'.$lang];
	 }
       $service_image = $about_image[1]['image'];
       $about_image   = $about_image[0]['image'] 
    ?>
	<div class="about py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<!-- heading title -->
			<div class="main-title text-center mb-sm-5 mb-4 pb-3">
				<h3 class="tittle font-weight-bold"><?php  echo $title ?></h3>
			</div>
			<!-- //heading title -->
			<div class="row mb-5">
				<div class="col-lg-6 aboutright mt-xl-0">
					<img src="<?php echo base_url('images/'.$about_image)?>" alt="" class="img-fluid" >
				</div>
				<div class="col-lg-6 aboutleft  mt-lg-0 mt-4">
					<p><?php echo $info ?></p>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->

	<!-- services -->

	<div class="serives-agile" id="services" style = "background-image: url('<?=base_url("images/$service_image") ?>') ;">

		<div class="container py-xl-5 py-lg-3">
			<div class="row support-bottom text-center">
					<?php
						foreach ($counters as $value) {
							$title = $value['title-'.$lang];
							$image = $value['image'];
							$number = $value['number'];
						
		            ?>
				   <div class="col-md-4 col-4 stats_info counter_grid p-0">
						<img src="<?php echo base_url('images/svg_icons/'.$image)?>" width="34" height="40">
						<p class="counter font-weight-bold"><?php echo $number ?> </p>
						<h4><?php echo $title ?></h4>
					</div>
					<?php 
			      	}
			      	
				?>
			</div>
		</div>
	</div>

	<!-- //services -->

	<!-- mobile section -->
		<?php
 			   $feature = $about_subtitles[0]['subtitle-'.$lang];
		 ?>
	<div class="feature py-5" id="about-what">
		<div class="container py-xl-5 py-lg-3">
			<div class="main-title text-center mb-5 pb-3">
				<h3 class="tittle font-weight-bold"><?php echo $feature; ?></h3>
			</div>
			<div>
				<?php 
				    $i = 1;
					foreach ($work_princip as  $value) {
						$image = $value['image'];
						$title = $value['title-'.$lang];
						$info = $value['info-'.$lang];
						if($i==2 ){



				?>
		<div  class="row mb-4 mt-4">
				<div class="col-xl-6 col-lg-6">
					<h4 class="mb-3 index<?php echo $i?>" id="index<?php echo $i?>" style="text-decoration: underline;"><?php echo $title ?></h4>
					<p><?php echo $info ?></p>
			</div>
			<div class="col-xl-6 col-lg-6">
					<img src="<?php echo base_url('images/'.$image)?>" >
		    </div>
		</div>
			<?php }
			else{
				?>
      <div  class="row mb-5 mt-4">
			<div class="col-xl-6 col-lg-6">
					<h4 class="mb-3 index<?php echo $i?>" id="index<?php echo $i?>" style="text-decoration: underline;"><?php echo $title ?></h4>
					<p><?php echo $info ?></p>
				</div>
				<div class="col-xl-6 col-lg-6 mt-4">
					<img src="<?php echo base_url('images/'.$image)?>" class="<?php if($i==1){echo 'image1';}?>">
				</div>
	</div>
		 <?php
			}
			$i++;
		}
		?>

			</div>
		</div>
	</div>
	<!-- //mobile section -->

	<!-- testimonials -->
	<!-- work -->
	   <?php
 			 $work = $about_subtitles[1]['subtitle-'.$lang];
		 ?>
	<section class="works-agiles" id="work">
		<div class="container py-xl-5 py-lg-3">
			<!-- heading title -->
			<div class="main-title text-center mb-5 pb-3">
				<h3 class="tittle font-weight-bold"><?php echo $work; ?></h3>
			</div>
			<!-- //heading title -->
			<div class="price-right">
				<div class="tabs">
					<ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
						<?php 
							
						    $title_lori       = $product_process_desc[0]['title-'.$lang];
						    $info_lori        = $product_process_desc[0]['info-'.$lang];
						    $info_mozzarella  = $product_process_desc[1]['info-'.$lang];
						    $title_mozzarella = $product_process_desc[1]['title-'.$lang];
							
						?>
						<li class="nav-item">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
							 aria-selected="true"><?php echo $title_lori ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
							 aria-selected="false"><?php echo $title_mozzarella ?></a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">

						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="menu-grids">
								<div class="row">
									<div class="col-lg-6 price-main-info">
										<h4 class="mb-3"><?php echo $title_lori; ?></h4>
										<p><?php echo $info_lori; ?></p>
									</div>
									<div class="col-lg-6 price-main-info-2 mt-lg-0 mt-5 mb-5">
										<!-- <img src="images/maxresdefault.jpg" alt="" class="img-fluid"> -->
								  	<div class="owl-carousel owl-theme" id="owl-lori">
					  		         <?php
								  	  		$i=0;
								  	  		foreach ($product_slide as $value) {
								  	  			$categorie = $value['categorie'];
								  	  			if($categorie == 'lori'){
								  	  				$image = $value['image'];

									  	   ?>
							   	    <div class="item">

							         <img src="<?php echo base_url('images/lori_slide/'.$image)?>" alt="" class="img-fluid">

							       </div>
							      <?php 
							      	     }
							      	     } 
							      ?>
											   			 		
							     </div>
						
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="menu-grids">
								<div class="row">
									<div class="col-lg-6 mb-4">
									   <div class="owl-carousel owl-theme" id="owl-mozzarella">
					  		          <?php
									  	  		$i=0;
									  	  		foreach ($product_slide as $value) {
									  	  			$categorie = $value['categorie'];
									  	  			if($categorie == 'mozzarella'){
									  	  				$image = $value['image'];
									  	   ?>
							   	    <div class="item">

							        <img src="<?php echo base_url('images/mozzarella_slide/'.$image)?>" alt="" class="img-fluid">

							       </div>
							      <?php 
							      	     }
							      	     } 
							      ?>
											   			 		
							       </div>
								
									</div>
									<div class="col-lg-6 price-main-info-2 mt-lg-0 mt-4 mb-5">
								            <h4 class="mb-3"><?php echo $title_mozzarella; ?></h4>
										    <p ><?php echo $info_mozzarella; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //work -->
	<!-- //testimonials -->

	<!-- stats -->
	<?php
 			   $gallery = $about_subtitles[2]['subtitle-'.$lang];
		 ?>
		<div class="gallery-agile">
		<div class="container py-xl-5 py-lg-3">
			<!-- heading title -->
			<div class="main-title text-center mb-5 pb-3">
				<h3 class="tittle font-weight-bold"><?php echo $gallery; ?></h3>
			</div>
			<!-- //heading title -->
			<div class="row gallery-agile-kmsrow">
				<?php 

				 foreach ($images as $value) {
				  	    $image  = $value['image'];
				  	    $title  = $value['title-'.$lang];
				  	    $desc   = $value['desc-'.$lang];
				  ?>
				<div class="col-md-4 col-sm-6 gallery-agile-grids my-md-4 mb-4">
					<div class="portfolio-hover">
					 <a href="<?php echo base_url('images/gallery/'.$image)?>" data-lightbox="example-set" data-title="<?php echo $desc ?>">
							<img src="<?php echo base_url('images/gallery/'.$image)?>" class="img-fluid zoom-img" alt="" />
							<div class="name-agile-gallery">
								<h4><?php echo $title;?></h4>
							</div>
						</a>
					</div>
				</div>
			<?php }
			?>
				
			
			</div>
		</div>
	</div>
	<!-- //stats -->

	

