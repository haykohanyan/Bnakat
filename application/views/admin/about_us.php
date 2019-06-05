 <article class="content dashboard-page">
            <h2>Մեր մասին</h2>


          <article class="content2 items-list-page">
               		<?php
               		  foreach ($general_image as $value) {
               		  	$id = $value['id'];
               		   $image = $value['image'];
               		    // print_r($general_image[0]['id']);
               		   } 
               		?>
          		 <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                 
                                    <div class="col-lg-11 col-md-11 col-sm-11">
                                        <div> <span>Գլխավոր նկար</span> </div>
                                    </div>
                                    
                                
                               <div class="col-lg-1 col-md-1 col-sm-1 item-col-actions-dropdown">
                                  <div class="item-actions-dropdown"> <a class="item-actions-toggle-btn">
                                        <span class="inactive">
                                            <i class="fa fa-cog"></i>
                                        </span>
                                        <span class="active">
                                        <i class="fa fa-chevron-circle-right"></i>
                                        </span>
                                    </a>
                                    <div class="item-actions-block">
                                        <ul class="item-actions-list">
                                   <!--          <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="about_general_image" href="#" data-toggle="modal" data-target="#confirm-modal">
                                    <i class="fa fa-trash-o "></i>
                                </a> </li> -->
                                             <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/general_image/'.$id.'?general_image=true')?>">
                                    <i class="fa fa-pencil"></i>
                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                                </div>

                            </li>
                             <li class="item" id="<?php echo 'general_image'.$id?>">
                                <div class="row p-1">
                                   
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-img rounded" data-img="<?php echo $image ?>" style="background-image: url('<?=base_url("images/$image") ?>'); padding-bottom: 30%">
                                        </div>
                                        
                                    </div>
                                </div>
                           </li>
                           
                        
                        </ul>
                    </div>


          </article>

    	
    	  <article class="content2 items-list-page">
               		<?php
               		  foreach ($about_image as $value) {
               		  	$id      = $value['id'];
               		    $image   = $value['image'];
               		    $page_id = $value['page_id'];
               		    // print_r($general_image[0]['id']);
               		    
               		   
               		?>
          		 <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                 
                                    <div class="col-lg-11 col-md-11 col-sm-11">
                                        <div> <span>Նկար</span> </div>
                                    </div>
                                    
                                
                               <div class="col-lg-1 col-md-1 col-sm-1 item-col-actions-dropdown" >
                                  <div class="item-actions-dropdown"> <a class="item-actions-toggle-btn">
                                        <span class="inactive">
                                            <i class="fa fa-cog"></i>
                                        </span>
                                        <span class="active">
                                        <i class="fa fa-chevron-circle-right"></i>
                                        </span>
                                    </a>
                                    <div class="item-actions-block">
                                        <ul class="item-actions-list">
                                   <!--          <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="about_general_image" href="#" data-toggle="modal" data-target="#confirm-modal">
                                    <i class="fa fa-trash-o "></i>
                                </a> </li> -->
                                             <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/pages_images/'.$id.'?about_image=true')?>">
                                    <i class="fa fa-pencil"></i>
                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                                </div>

                            </li>
                             <li class="item" id="<?php echo 'pages_images'.$id?>">
                                <div class="row p-1">
                                   
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-img rounded" data-img="<?php echo $image ?>" style="background-image: url('<?=base_url("images/$image") ?>'); padding-bottom: 30%">
                                        </div>
                                        
                                    </div>
                                </div>
                           </li>
                           
                        <?php }?>
                        </ul>
                    </div>

          </article>



         <article class="content2 items-list-page">
               		<?php
               		  foreach ($general_title as $value) {
               		  	$id = $value['id'];
               		    $general_title_am = $value['title-am'];
               		    $general_title_ru = $value['title-ru'];
               		    $general_title_en = $value['title-en'];
               		   } 
               		?>
          		 <div class="card items">
                        <ul class="item-list striped">
                          <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                 
                                    <div class="col-lg-3 col-md-3 col-sm-11">
                                        <div> <span>Անուն_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Անուն_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Անուն_անգ</span> </div>
                                    </div>
                                
                                    <div class="col-lg-3 col-md-3 col-sm-1 item-col-actions-dropdown">
                                        <div class="item-actions-dropdown"> <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                        <!--     <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="princip_title_image" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li> -->
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/general_titles/'.$id.'?general_title=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item" id="<?php echo 'general_title'.$id?>">
                                <div class="row p-1">
                                   
                                   <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Անուն_հայ</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $general_title_am ?></h4>
                                            
                                        </div>
                                    </div>

                                  <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Անուն_ռուս</div>
                                        <div>
                                          
                                                <h4 class="item-title title_ru"> <?php echo $general_title_ru ?> </h4>
                                           
                                        </div>
                                    </div>

                                   <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Անուն_անգ</div>
                                        <div>
                                           
                                                <h4 class="item-title title_en"> <?php echo $general_title_en ?> </h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-1 item-col-actions-dropdown item-heading">
                                        <div class="item-actions-dropdown"> <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                        <!--     <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="princip_title_image" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li> -->
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/general_titles/'.$id.'?general_title=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                           </li>
                           
                        
                        </ul>
                    </div>
          </article>
        
               		

               		 <article class="content2 items-list-page">
                        
                      
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                    <div class="col-lg-2 col-md-2 col-sm-11">
                                        <div> <span>Նկար</span> </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Անուն_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Անուն_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Անուն_անգ</span> </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Քանակ</span> </div>
                                    </div>
              
                                    <div class="col-lg-2 col-md-2 col-sm-1"> </div>
                                </div>
                            </li>

                             <?php 
                                 // $Text = json_encode($slide1);
                                 // $RequestText = urlencode($Text);
                                
			               		  foreach ($counters as $value) {
			               		  	$id               = $value['id'];
			               		    $counter_title_am = $value['title-am'];
			               		    $counter_title_ru = $value['title-ru'];
			               		    $counter_title_en = $value['title-en'];
			               		    $image            = $value['image'];
			               		    $number           = $value['number'];
                               
                             ?>
                            <li class="item" id="<?php echo 'counter_numbers'.$id?>">
                                <div class="row p-1">
                                   
                                    <div class="col-lg-2 col-md-2 col-sm-11">
                                        <div class="item-img rounded" data-img="<?php echo $image ?>" style="background-image: url('<?=base_url("images/svg_icons/$image") ?>')">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-heading">Անուն_հայ</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $counter_title_am ?></h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-heading">Անուն_ռուս</div>
                                        <div>
                                          
                                                <h4 class="item-title title_ru"> <?php echo $counter_title_ru ?> </h4>
                                           
                                        </div>
                                    </div>
                                   <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-heading">Անուն_անգ</div>
                                        <div>
                                           
                                                <h4 class="item-title title_en"> <?php echo $counter_title_en ?> </h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-heading">Քանակ</div>
                                        <div>
                                           
                                                <h4 class="item-title counter"> <?php echo $number ?> </h4>
                                            
                                        </div>
                                    </div>
                                   
                                
                                  
                                    <div class="col-lg-2 col-md-2 col-sm-1 item-col-actions-dropdown">
                                        <div class="item-actions-dropdown"> <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                <!--     <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="work_princip" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o"></i>
                                        </a> </li> -->
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/counter_numbers/'.$id.'?counters=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </li>
                        <?php } ?>
                        </ul>
                    </div>

                </article>


           <article class="content2 items-list-page">
           	       
               		 <?php
                        foreach ($text_info as $value) {
                          $id           = $value['id'];
                          $page_id      = $value['page_id'];
                          $text_info_am = $value['info-am'];
                          $text_info_ru = $value['info-ru'];
                          $text_info_en = $value['info-en'];
                        ?>
          		 <div class="card items">
                        <ul class="item-list striped">
                          <li class="item item-list-header hidden-md-down">
                                <div class="row p-1">
                                 
                                    <div class="col-lg-3 col-md-3 col-sm-11">
                                        <div> <span>Ինֆորմացիա_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Ինֆորմացիա_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Ինֆորմացիա_անգ</span> </div>
                                    </div>
                                
                          		      <div class="col-lg-3 col-md-3 col-sm-1 item-col-actions-dropdown">
                                        <div class="item-actions-dropdown"> <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                           <!--  <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="text_info" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li> -->
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/text_info/'.$id.'?text_info=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                           
                            <li class="item" id="<?php echo 'text_info'.$id?>">
                                <div class="row p-1">
                                   
                                   <div class="col-lg-3 col-md-11 col-sm-12">
                                        <div class="item-heading">Ինֆորմացիա_հայ</div>
                                        <div>
                                            
                                             <textarea rows="9" cols="35">
                                             	  <?php echo $text_info_am ?>
                                             </textarea>
                                            
                                            
                                        </div>
                                    </div>

                                  <div class="col-lg-3 col-md-12 col-sm-12">
                                        <div class="item-heading">Ինֆորմացիա_ռուս</div>
                                        <div>
                                          
                                                <textarea rows="9" cols="35">
                                                	<?php echo $text_info_ru ?>
                                                		
                                                	</textarea>
                                           
                                        </div>
                                    </div>

                                   <div class="col-lg-3 col-md-12 col-sm-12">
                                        <div class="item-heading">Ինֆորմացիա_անգ</div>
                                        <div>
                                           
                                                <textarea rows="9" cols="35">
                                                    <?php echo $text_info_en ?>
                                                </textarea>

                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-1 col-sm-1 item-col-actions-dropdown item-heading">
                                        <div class="item-actions-dropdown"> <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                           <!--  <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="text_info" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li> -->
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/text_info/'.$id.'?text_info=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </li>
                           <?php }?>
                        
                        </ul>
                    </div>
          </article>

          <article class="content2 items-list-page">
               		<h3>Ենթավերնագրեր</h3>
          		 <div class="card items">
                        <ul class="item-list striped">
                          <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                 
                                    <div class="col-lg-3 col-md-3 col-sm-11">
                                        <div> <span>Ենթավերնագիր_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Ենթավերնագիր_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Ենթավերնագիր_անգ</span> </div>
                                    </div>
                                
                          			<div class="col-lg-1 col-md-1 col-sm-1"> </div>
                                </div>
                            </li>
                            <?php
		               		  foreach ($about_subtitles as $value) {
		               		  	$id = $value['id'];
		               		    $about_subtitle_am = $value['subtitle-am'];
		               		    $about_subtitle_ru = $value['subtitle-ru'];
		               		    $about_subtitle_en = $value['subtitle-en'];
		               		  ?>
                            <li class="item" id="<?php echo 'about_subtitles'.$id?>">
                                <div class="row p-1">
                                   
                                   <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Ենթավերնագիր_հայ</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $about_subtitle_am ?></h4>
                                            
                                        </div>
                                    </div>

                                  <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Ենթավերնագիր_ռուս</div>
                                        <div>
                                          
                                                <h4 class="item-title title_ru"> <?php echo $about_subtitle_ru ?> </h4>
                                           
                                        </div>
                                    </div>

                                   <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Ենթավերնագիր_անգ</div>
                                        <div>
                                           
                                                <h4 class="item-title title_en"> <?php echo $about_subtitle_en ?> </h4>
                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-1 item-col-actions-dropdown">
                                        <div class="item-actions-dropdown"> <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                            <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="about_subtitles" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li>
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/about_subtitles/'.$id.'?about_subtitle=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </li>
                           <?php }?>
                        
                        </ul>
                    </div>
          </article>

          <article class="content items-list-page">
                        <h3>Սկզբունքներ</h3>
                        <button type="button" class="btn btn-primary-outline">
                            <a href="<?php echo base_url('Admin/add_item?work_princip=true') ?>">Ավելացնել աշխատանքի սկզբունքներ</a>
                        </button>
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-md-down">
                                <div class="row p-1">
                                    <div class="col-lg-2 col-md-2 col-sm-11">
                                        <div> <span>Նկար</span> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-12">
                                        <div> <span>Անուն_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-12">
                                        <div> <span>Անուն_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-12">
                                        <div> <span>Անուն_անգ</span> </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Տեքստ_հայ</span> </div>
                                    </div>
                                     <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Տեքստ_ռուս</span> </div>
                                    </div>
                                     <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Տեքստ_անգ</span> </div>
                                        
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1"> </div>
                                </div>
                            </li>

                             <?php 
                                 // $Text = json_encode($slide1);
                                 // $RequestText = urlencode($Text);
                                foreach ($work_princip as $value) {

                                    $id         = $value['id'];
                                    $title_am   = $value['title-am'];
                                    $title_ru   = $value['title-ru'];
                                    $title_en   = $value['title-en'];
                                    $info_am    = $value['info-am'];
                                    $info_ru    = $value['info-ru'];
                                    $info_en    = $value['info-en'];
                                    $image      = $value['image'];
                               
                             ?>
                            <li class="item" id="<?php echo 'work_princip'.$id?>">
                                <div class="row p-1">
                                   
                                    <div class="col-lg-2 col-md-11 col-sm-11">
                                        <div class="item-img rounded" data-img="<?php echo 'folder1_'.$image ?>" style="background-image: url('<?=base_url("images/$image") ?>')">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-1 col-md-12 col-sm-12">
                                        <div class="item-heading">Անուն_հայ</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $title_am ?></h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-12 col-sm-12">
                                        <div class="item-heading">Անուն_ռուս</div>
                                        <div>
                                          
                                                <h4 class="item-title title_ru"> <?php echo $title_ru ?> </h4>
                                           
                                        </div>
                                    </div>
                                   <div class="col-lg-1 col-md-12 col-sm-12">
                                        <div class="item-heading">Անուն_անգ</div>
                                        <div>
                                           
                                                <h4 class="item-title title_en"> <?php echo $title_en ?> </h4>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-2 col-md-12 col-sm-12">
                                        <div class="item-heading">Տեքստ_հայ</div>
                                        <div>
                                           
                                                <textarea rows="9" cols="23">
                                                <?php echo $info_am ?>
                                               </textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12 col-sm-12">
                                        <div class="item-heading">Տեքստ_ռուս</div>
                                        <div>
                                           
                                                <textarea rows="9" cols="23">
                                                <?php echo $info_ru ?>
                                                </textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12 col-sm-12">
                                        <div class="item-heading">Տեքստ_անգ</div>
                                        <div>
                                                <textarea rows="9" cols="23">
                                                <?php echo $info_en ?>
                                                </textarea>
                                            
                                        </div>
                                    </div>
                                  
                                    <div class="col-lg-1 col-md-1 col-sm-1 item-col-actions-dropdown">
                                        <div class="item-actions-dropdown"> <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="work_princip" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li>
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/work_princip/'.$id.'?work_princip=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </li>
                        <?php } ?>
                        </ul>
                    </div>

                </article>

                <article class="content1 items-list-page">

               		<h3>Արտադրական գործընթաց</h3>
                	 <button type="button" class="btn btn-primary-outline">
                            <a href="<?php echo base_url('Admin/add_item?product_slide=true') ?>">Ավելացնել արտադրական գործընթացի նկարներ</a>
                    </button>

          		 <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                  
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div> <span>Արտադրության նկար</span> </div>
                                    </div>
                                     <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Արտադրանքի անուն</span> </div>
                                    </div>
                                
                                    <div class="col-lg-1 col-md-1 col-sm-1 item-col-actions-dropdown">
                            
                                   </div>
                                </div>

                            </li>
                            <?php
		               		  foreach ($product_slide as $value) {
		               		  	$id        = $value['id'];
		               		    $image     = $value['image'];
		               		    $categorie = $value['categorie'];
		               		    // print_r($general_image[0]['id']);

		               		?>
                             <li class="item" id="<?php echo 'lori_mozzarella_image_slide'.$id?>">
                                <div class="row p-1">
                                   
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="item-img rounded" data-img="<?php echo 'folder3_'.$image ?>" style="background-image: url('<?=base_url("images/".$categorie."_slide/$image")?>'); padding-bottom: 30%">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Արտադրանքի անուն</div>
                                        <div>
                                          
                                            <h4 class="item-title categorie"> <?php echo $categorie ?> </h4>
                                           
                                        </div>
                                    </div>

                                    <div class="col-lg-1 col-md-1 col-sm-1 item-col-actions-dropdown">
                                        <div class="item-actions-dropdown"> <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="lori_mozzarella_image_slide" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li>
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/lori_mozzarella_image_slide/'.$id.'?product_slide=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </li>
                           
                        <?php   } ?>
                        </ul>
                    </div>


          </article>

           <article class="content2 items-list-page">
                        <h3>Արտադրանքի գործընթաց</h3>
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                   
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Անուն_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Անուն_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-12">
                                        <div> <span>Անուն_անգ</span> </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Տեքստ_հայ</span> </div>
                                    </div>
                                     <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Տեքստ_ռուս</span> </div>
                                    </div>
                                     <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Տեքստ_անգ</span> </div>
                                        
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1"> </div>
                                </div>
                            </li>

                             <?php 
                                 // $Text = json_encode($slide1);
                                 // $RequestText = urlencode($Text);
                                foreach ($product_process_desc as $value) {

                                    $id         = $value['id'];
                                    $title_am   = $value['title-am'];
                                    $title_ru   = $value['title-ru'];
                                    $title_en   = $value['title-en'];
                                    $info_am    = $value['info-am'];
                                    $info_ru    = $value['info-ru'];
                                    $info_en    = $value['info-en'];
                                    
                               
                             ?>
                            <li class="item" id="<?php echo 'product_process_desc'.$id?>">
                                <div class="row p-1">
                                   
                                   
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-heading">Անուն_հայ</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $title_am ?></h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-heading">Անուն_ռուս</div>
                                        <div>
                                          
                                                <h4 class="item-title title_ru"> <?php echo $title_ru ?> </h4>
                                           
                                        </div>
                                    </div>
                                   <div class="col-lg-1 col-md-1 col-sm-12">
                                        <div class="item-heading">Անուն_անգ</div>
                                        <div>
                                           
                                                <h4 class="item-title title_en"> <?php echo $title_en ?> </h4>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-heading">Տեքստ_հայ</div>
                                        <div>
                                           
                                                <textarea rows="13" cols="23">
                                                <?php echo $info_am ?>
                                               </textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-heading">Տեքստ_ռուս</div>
                                        <div>
                                           
                                                <textarea rows="13" cols="23">
                                                <?php echo $info_ru ?>
                                                </textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-heading">Տեքստ_անգ</div>
                                        <div>
                                                <textarea rows="13" cols="23">
                                                <?php echo $info_en ?>
                                                </textarea>
                                            
                                        </div>
                                    </div>
                                  
                                    <div class="col-lg-1 col-md-1 col-sm-1 item-col-actions-dropdown">
                                        <div class="item-actions-dropdown"> <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                              <!--       <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="product_process_desc" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                          </a> </li> -->
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/product_process_desc/'.$id.'?product_process_desc=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </li>
                        <?php } ?>
                        </ul>
                    </div>

                </article>

            <article class="content2 items-list-page">
            				 <h3>Նկարներ</h3>
            				<button type="button" class="btn btn-primary-outline">
                               <a href="<?php echo base_url('Admin/add_item?images=true') ?>">Ավելացնել նկար</a>
                            </button>

            	   <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                   <div class="col-lg-2 col-md-2 col-sm-11">
                                        <div> <span>Նկար</span> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-12">
                                        <div> <span>Անուն_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-12">
                                        <div> <span>Անուն_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-12">
                                        <div> <span>Անուն_անգ</span> </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Տեքստ_հայ</span> </div>
                                    </div>
                                     <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Տեքստ_ռուս</span> </div>
                                    </div>
                                     <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Տեքստ_անգ</span> </div>
                                        
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1"> </div>
                                </div>
                            </li>

                             <?php
		               		  foreach ($images as $value) {
		               		  	$id         = $value['id'];
		               		    $image      = $value['image'];
		               		    $title_am   = $value['title-am'];
		                        $title_ru   = $value['title-ru'];
		                        $title_en   = $value['title-en'];
		                        $desc_am    = $value['desc-am'];
		                        $desc_ru    = $value['desc-ru'];
		                        $desc_en    = $value['desc-en'];
                               
                             ?>
               		
          		 
                            <li class="item" id="<?php echo 'images'.$id?>">
                                <div class="row p-1">
                                   
                                    <div class="col-lg-2 col-md-2 col-sm-11">
                                        <div class="item-img rounded" data-img="<?php echo 'folder4_'.$image ?>" style="background-image: url('<?=base_url("images/gallery/$image") ?>')">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-12">
                                        <div class="item-heading">Անուն_հայ</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $title_am ?></h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-12">
                                        <div class="item-heading">Անուն_ռուս</div>
                                        <div>
                                          
                                                <h4 class="item-title title_ru"> <?php echo $title_ru ?> </h4>
                                           
                                        </div>
                                    </div>
                                   <div class="col-lg-1 col-md-1 col-sm-12">
                                        <div class="item-heading">Անուն_անգ</div>
                                        <div>
                                           
                                                <h4 class="item-title title_en"> <?php echo $title_en ?> </h4>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-heading">Նկարագիր_հայ</div>
                                        <div>
                                           
                                                <textarea rows="9" cols="23">
                                                <?php echo $desc_am ?>
                                               </textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-heading">Նկարագիր_ռուս</div>
                                        <div>
                                           
                                                <textarea rows="9" cols="23">
                                                <?php echo $desc_ru ?>
                                                </textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-heading">Նկարագիր_անգ</div>
                                        <div>
                                                <textarea rows="9" cols="23">
                                                <?php echo $desc_en ?>
                                                </textarea>
                                            
                                        </div>
                                    </div>
                                  
                                    <div class="col-lg-1 col-md-1 col-sm-1 item-col-actions-dropdown">
                                        <div class="item-actions-dropdown"> <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="images" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li>
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/images/'.$id.'?images=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </li>
                            <?php } ?>
                        
                        </ul>
                    </div>


          </article>


         

 </article>