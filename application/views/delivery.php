<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

	
	<!-- //header -->
     <?php 
          if(isset($_SESSION['site_lang'])){
                 $lang = $_SESSION['site_lang'];
          }
          else{
                $lang = 'am';
          } 
          if(isset($_SESSION['succes_message'])){
            echo $_SESSION['succes_message'];
            unset($_SESSION['succes_message']);
          }
          if(isset($_SESSION['error_message'])){
            echo $_SESSION['error_message'];
            unset($_SESSION['succes_message']);
          }
             ?>
	<!-- banner -->
   <div class="banner-w3ls-4" id="map"></div>

	
    <!-- <div class="banner-w3ls-4" style = "background-image: url('<?php echo "../images/$image" ?>') ;">

    </div> -->

	<!-- //banner -->
	<!-- page details -->
	<div class="breadcrumb-agile">
	</div>
	<!-- //page details -->

  <?php foreach ($delivery_map_info as $value) {
        $title = $value['title_'.$lang];
        $info  = $value['info_'.$lang];  
  } ?>



	<!-- contact -->
	<div class="address py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<!-- heading title -->
			<div class="main-title text-center mb-5 pb-5">
				<h3 class="tittle font-weight-bold"><?php echo $title; ?></h3>
				<p class="sub-tittle mt-2 font-weight-bold"><?php echo $info; ?></p>
			</div>
           
            <span class="after1"></span>
			<!-- //heading title -->
      <?php 
      foreach ($general_title as $value) {
           $title = $value['title-'.$lang];
     }
     
    foreach ($text_info as $value) {
           $info = $value['info-'.$lang];
     }
     foreach ($general_delivery_image as $value) {
           $image = $value['image_'.$lang];
    }  
    ?>
      <!-- heading title -->
      <div class="main-title text-center mb-sm-5 mb-4 pb-3 pt-5">
        <h3 class="tittle font-weight-bold mt-3"><?php  echo $title ?></h3>
      </div>
      <!-- //heading title -->
      <div class="row mb-5">
        <div class="col-lg-6  mt-xl-0">
          <img src="<?php echo base_url('images/'.$image)?>" alt="" class="img-fluid" >
        </div>
        <div class="col-lg-6 main-title  mt-lg-0 mt-4">
          <p class="font-weight-bold"><?php echo $info ?></p>
        </div>
      </div>
  
  

<form id="contact-form" method="post" action="<?php echo base_url('Sendmails/deliver_product') ?>" role="form">
			   
   <div class="delivery mb-5">
   	<h4 class="p-4 font-weight-bold" ><?php echo $this->lang->line('product'); ?></h4>
	
   	<hr>
   	 <div class="row pl-4 font-weight-bold" style="text-align: left; clear:left">
        <div class="col-lg-4 col-md-3 col-sm-4 d-none d-md-block"><?php echo $this->lang->line('product_name'); ?></div>
        <div class="col-lg-2 col-md-2 col-sm-2 d-none d-md-block"><?php echo $this->lang->line('product_price'); ?></div>
        <div class="col-lg-3 col-md-3 col-sm-3 d-none d-md-block"><?php echo $this->lang->line('product_count'); ?></div>
        <div class="col-lg-2 col-md-2 col-sm-2 d-none d-md-block"><?php echo $this->lang->line('product_all'); ?></div>
        <div class="col-lg-1 col-md-2 col-sm-1 d-none d-md-block"><?php echo $this->lang->line('check'); ?></div>
    </div>
    <hr>
        <?php  
              $i = 0;
              foreach ($product as $value) {
                   $title = $value['title-'.$lang];
                   $image = $value['image'];
                   $count = $value['count'];
                   $price = $value['price'];
                   $total = $count*$price;
                  
             ?>
    <div class="row align-items-center font-weight-bold" id="product<?php echo $i; ?>">
        
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"> 
              <img class="cart_image" src="<?php echo base_url('images/'.$image)?>">
            </div>

            <div class="product_info col-lg-2 col-md-1 col-sm-12 col-xs-12 " >
              <input type="text" name="title<?php echo $i; ?>" value='<?php echo $title ?>' hidden="true">
              <span class="d-md-none" ><?php echo $this->lang->line('product_name'); ?>:  </span><span class="name"><?php echo $title?></span>
            </div>

            <div class="product_info col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <span class="d-md-none"><?php echo $this->lang->line('product_price'); ?>:  </span>
              <span class="price"><?php echo $price?></span>
              <span> <?php echo $this->lang->line('dram'); ?> </span>
            </div>

            <div  class="spin product_info col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <span class="d-md-none"><?php echo $this->lang->line('product_count'); ?>:</span>
                <div class="spin_edit">
                    <div class="minus_button" style="line-height: 25px;" data-which="<?php echo $i; ?>">-</div>
                    <input readonly="" type="text" class="spin_input count_spin" value="<?php echo $count?>" name="count<?php echo $i; ?>" data-count="<?php echo $count?>" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">
                    <div class="plus_button" style="line-height: 25px;" data-which="<?php echo $i; ?>">+</div>
                </div>
            </div>

            <div class="product_info total col-lg-2 col-md-2 col-sm-12 col-xs-12 row_all_price<?php echo $i; ?>">
              <span class="d-md-none"><?php echo $this->lang->line('product_all'); ?>:  </span> 
              <span class="value"><?php echo $total ?></span><span> <?php echo $this->lang->line('dram'); ?></span>
             <input type="text" name="total<?php echo $i; ?>" hidden="true" value="<?php echo $total ?>" class="total_input">
            </div>

            <div class="product_info total  col-lg-1 col-md-1 col-sm-12 col-xs-12">
              <span class="d-md-none"><?php echo $this->lang->line('check'); ?>: </span> 
                      <div class="pretty p-default p-curve">
                        <input type="checkbox" class="check" name="check<?php echo $i; ?>" />
                        <div class="state p-success">
                            <label></label>
                        </div>
                    </div>
            </div>

      </div>
        <hr>
    <?php 
    $i++;
   }
    // echo $product_count;
      ?>
      <input type="text" name="product_count" value="<?php echo $i ?>" hidden="true">
   </div>
     


<div class=" delivery order py-3 p-sm-5 p-4  font-weight-bold" >
	<h4><?php echo $this->lang->line('delivery'); ?></h4>
	<hr>
    
        <div class="messages"></div>
        <div class="controls">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="form_name"><?php echo $this->lang->line('delivery_name'); ?>*</label>
                        <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="name is required.">
                        
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="form_name"><?php echo $this->lang->line('delivery_surname'); ?>*</label>
                        <input id="form_name" type="text" name="surname" class="form-control" required="required" data-error="name is required.">
                       
                    </div>
                </div>
                <div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="form_email"><?php echo $this->lang->line('delivery_mail')?>*</label>
                        <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Valid email is required.">
                       
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="form_phone"><?php echo $this->lang->line('delivery_phone'); ?>*</label>
                        <input id="form_phone" type="tel" name="phone" class="form-control" required="required">
                       
                    </div>
                </div>  
                <div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="form_address"><?php echo $this->lang->line('delivery_address'); ?>*</label>
                        <input id="form_address" type="text" name="address" class="form-control" required="required">
                     
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message"><?php echo $this->lang->line('delivery_message'); ?></label>
                    <textarea id="form_message" name="message" class="form-control" required="required" data-error="send a message."></textarea>
                   
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success" value="<?php echo $this->lang->line('delivery_button'); ?>">
             
            </div>
        </div>
    </form>
</div>

	

    


	</div>

	
