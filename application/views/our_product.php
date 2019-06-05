
	<!-- header -->
	
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
	<div class="banner-w3ls-3" style = "background-image: url('<?=base_url("images/$image") ?>') ;">

	</div>
	<!-- //banner -->
	<!-- page details -->
	<?php 
	  foreach ($general_title as $value) {
		   $title = $value['title-'.$lang];
	 }
     
	foreach ($text_info as $value) {
		   $info = $value['info-'.$lang];
	 }
       
    ?>
	<div class="breadcrumb-agile">
	</div>
	<!-- //page details -->
		<section class="team-sec main-stats-inner py-5" id="stats">
		<div class="container py-xl-5 py-lg-3">
			<!-- heading title -->
			<div class="main-title text-center mb-5 pb-3">
				<h3 class="tittle font-weight-bold"><?php echo $title; ?></h3>
				<p class="sub-tittle mt-2"><?php echo $info; ?></p>
			</div>
			<!-- //heading title -->
			<div class="inner-sec-w3ls-agileits">
				<?php  
				   $i=1;
				  foreach ($product as $value) {
					   $title = $value['title-'.$lang];
					   $info  = $value['info-'.$lang];
					   $image = $value['image'];
					   $var = $i%2;
					  

				 ?>
				<div class="row stats-con text-center <?php echo $var!=0 ? 'lori':'mozzarella'; ?>">
			          <?php  if($i%2!=0){

			          	?>
					<div class="col-md-6">
						<h4><?php echo $title; ?></h4>
						<p><?php  echo $info; ?></p>
					</div>
					<div class="col-md-6 main-stats-inner-img" style="background-image: url('<?=base_url("images/$image") ?>') ;">

					</div>
				
		           <?php }
		           		  else{
		           ?>
		           <div class="col-md-6 main-stats-inner-img1" style="background-image: url('<?=base_url("images/$image") ?>') ;">
					</div>
					<div class="col-md-6">
						<h4><?php echo $title; ?></h4>
						<p><?php  echo $info; ?></p>
					</div>
		         <?php
		           		  }
		           		 
		           ?>
			</div>
			<?php
						 $i++;
		           		}
		           ?>
		</div>
		</div>
	</section>
	<!-- gallery -->

	<!-- //gallery -->

	<!-- footer -->

  

