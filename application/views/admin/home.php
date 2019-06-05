
                <div class="sidebar-overlay" id="sidebar-overlay"></div>



                <article class="content dashboard-page">
                        <h2>Գլխավոր</h2>
                        

            
             <article class="content2 items-list-page">
                    
                    <button type="button" class="btn btn-primary-outline">
                            <a href="<?php echo base_url('Admin/add_item?slide=true') ?>">Ավելացնել Սլայդ</a>
                    </button>
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                 
                                    <div class="col-lg-2 col-md-2 col-sm-11">
                                        <div> <span>Նկար</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Անուն_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Անուն_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Անուն_անգ</span> </div>
                                    </div>
                                
                                    <div class="col-lg-1 col-md-1 col-sm-1"> </div>
                                </div>
                            </li>

                             <?php 
                                 if(isset($slide1)){


                                foreach ($slide1 as $value) {
                                    $id       = $value['id'];
                                    $title_am = $value['title-am'];
                                    $title_ru = $value['title-ru'];
                                    $title_en = $value['title-en'];
                                    $image    = $value['image'];
                               
                             ?>
                            <li class="item" id="<?php echo 'slider1'.$id?>">
                                <div class="row p-1">
                                   
                                    <div class="col-lg-2 col-md-2 col-sm-11">
                                        <div class="item-img rounded" data-img="<?php echo 'folder1_'.$image ?>" style="background-image: url('<?=base_url("images/$image") ?>')">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Անուն_հայ</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $title_am ?></h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Անուն_ռուս</div>
                                        <div>
                                          
                                                <h4 class="item-title title_ru"> <?php echo $title_ru ?> </h4>
                                           
                                        </div>
                                    </div>
                                   <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Անուն_անգ</div>
                                        <div>
                                           
                                                <h4 class="item-title title_en"> <?php echo $title_en ?> </h4>
                                            
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
                                                    <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="slider1" href="#" data-toggle="modal" data-target="#confirm-modal" >
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li>
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/slider1/'.$id.'?slide=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </li>
                        <?php } }?>
                        </ul>
                    </div>

                </article>

                   <article class="content items-list-page">  
                     

                         <?php 
                                 if(isset($home_info)){
                                
                                foreach ($home_info as $value) {
                                    $id         = $value['id'];
                                    $title_am   = $value['title-am'];
                                    $title_ru   = $value['title-ru'];
                                    $title_en   = $value['title-en'];
                                    $info_am    = $value['info-am'];
                                    $info_ru    = $value['info-ru'];
                                    $info_en    = $value['info-en'];
                                    $image_left = $value['image'];
                                    $image1     = $value['image1'];
                                    $image2     = $value['image2'];
                               
                             ?>
                    <div class="card items" id="<?php echo 'home_info'.$id?>">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                 
                                    <div class="col-lg-3 col-md-5 col-sm-11">
                                        <div> <span>Ձախ նկար</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Նկար1</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Նկար2</span> </div>
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
                                             <!--        <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="home_info" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li> -->
                                                     <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/home_info/'.$id.'?title=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 </li>
                                <li class="item">
                                <div class="row p-1">
                                   
                                     <div class="col-lg-3 col-md-3 col-sm-11">
                                        <div class="item-img rounded" data-img="<?php echo $image_left ?>" style="background-image: url('<?=base_url("images/$image_left") ?>')">
                                        </div>
                                        
                                    </div>
                                     <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-img rounded" data-img="<?php echo $image1 ?>" style="background-image: url('<?=base_url("images/$image1") ?>')">
                                        </div>
                                        
                                    </div>
                                     <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-img rounded" data-img="<?php echo $image2 ?>" style="background-image: url('<?=base_url("images/$image2") ?>')">
                                        </div>                               
                                         </div>
                                 
                               </li>
                                 <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Վերնագիր_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Վերնագիր_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Վերնագիր_անգ</span> </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1"> </div>
                                    </div>
                                </div>
                                 </li>

                               <li class="item">
                                <div class="row p-1">

                                      <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Վերնագիր_հայ</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $title_am ?></h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Վերնագիր_ռուս</div>
                                        <div>
                                          
                                                <h4 class="item-title title_ru"> <?php echo $title_ru ?> </h4>
                                           
                                        </div>
                                    </div>
                                   <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Վերնագիր_անգ</div>
                                        <div>
                                           
                                          <h4 class="item-title title_en"> <?php echo $title_en ?> </h4>
                                            
                                        </div>
                                    </div>
                               </li>

                                 <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                     <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div> <span>Տեքստ_հայ</span> </div>
                                    </div>
                                     <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div> <span>Տեքստ_ռուս</span> </div>
                                    </div>
                                     <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div> <span>Տեքստ_անգ</span> </div>
                                        
                                    </div>
                                   
                                </div>
                            </li>

                             <li class="item">
                                <div class="row p-1">

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="item-heading">Տեքստ_հայ</div>
                                        <div>
                                           
                                                <p>
                                                <?php echo $info_am ?>
                                               </p>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="item-heading">Տեքստ_ռուս</div>
                                        <div>
                                           
                                                <p >
                                                <?php echo $info_ru ?>
                                                </p>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="item-heading">Տեքստ_անգ</div>
                                        <div>
                                                <p >
                                                <?php echo $info_en ?>
                                                </p>
                                            
                                        </div>
                                    </div>
                                     <div class="col-lg-1 col-md-1 col-sm-1 item-col-actions-dropdown actions-dropdown-sm">
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
                                             <!--        <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="home_info" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li> -->
                                                     <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/home_info/'.$id.'?title=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                               </li>
            
                        <?php } }?>
                        </ul>
                    </div>

                    </article>

                 <article class="content2 items-list-page">
                    <?php
                        if(isset($home_image)){


                      foreach ($home_image as $value) {
                        $id      = $value['id'];
                        $image   = $value['image'];
                        $page_id = $value['page_id'];
                        // print_r($general_image[0]['id']);
                        
                       
                    ?>
                 <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header">
                                <div class="row p-1">
                                 
                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-6">
                                        <div> <span>Նկար</span> </div>
                                    </div>
                                    
                                
                               <div class="col-lg-1 col-md-1 col-sm-1 col-xs-6 item-col-actions-dropdown">
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
                                             <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/pages_images/'.$id.'?home_image=true')?>">
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
                           
                        <?php } }?>
                        </ul>
                    </div>

          </article>

         <article class=" items-list-page" style="padding: 20px 35px 20px 35px;">
                        <h3 >Սկզբունքների վերնագիր և նկար</h3>
                        <?php 
                                 // $Text = json_encode($slide1);
                                 // $RequestText = urlencode($Text);
                            if(isset($princip_title)){
                                foreach ($princip_title as $value) {
                                    $id = $value['id'];
                                    $title_am = $value['title-am'];
                                    $title_ru = $value['title-ru'];
                                    $title_en = $value['title-en'];
                                    $image = $value['image'];
                                }
                               
                             ?>
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                 
                                    <div class="col-lg-2 col-md-2 col-sm-11">
                                        <div> <span>Նկար</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Անուն_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Անուն_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Անուն_անգ</span> </div>
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
                                        <!--     <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="princip_title_image" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li> -->
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/princip_title_image/'.$id.'?princip_title=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                             
                            <li class="item" id="<?php echo 'princip_title_image'.$id?>">
                                <div class="row p-1">
                                   
                                    <div class="col-lg-2 col-md-2 col-sm-11">
                                        <div class="item-img rounded" data-img="<?php echo $image ?>" style="background-image: url('<?=base_url("images/$image") ?>')">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Անուն_հայ</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $title_am ?></h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Անուն_ռուս</div>
                                        <div>
                                          
                                                <h4 class="item-title title_ru"> <?php echo $title_ru ?> </h4>
                                           
                                        </div>
                                    </div>
                                   <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Անուն_անգ</div>
                                        <div>
                                           
                                                <h4 class="item-title title_en"> <?php echo $title_en ?> </h4>
                                            
                                        </div>
                                    </div>
                                
                                  

                                </div>


                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </article>


                <article class="content items-list-page">
                        <button type="button" class="btn btn-primary-outline">
                            <a href="<?php echo base_url('Admin/add_item?principles=true') ?>">Ավելացնել Սկզբունքներ</a>
                        </button>

                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-md-down hidden-lg-down">
                                <div class="row p-1">
                                    <div class="col-lg-2 col-md-11 col-sm-11">
                                        <div> <span>Նկար</span> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-12 col-sm-12">
                                        <div> <span>Անուն_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-12 col-sm-12">
                                        <div> <span>Անուն_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-12 col-sm-12">
                                        <div> <span>Անուն_անգ</span> </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12 col-sm-12">
                                        <div> <span>Տեքստ_հայ</span> </div>
                                    </div>
                                     <div class="col-lg-2 col-md-12 col-sm-12">
                                        <div> <span>Տեքստ_ռուս</span> </div>
                                    </div>
                                     <div class="col-lg-2 col-md-12 col-sm-12">
                                        <div> <span>Տեքստ_անգ</span> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1"> </div>
                                </div>
                            </li>

                             <?php 
                                 // $Text = json_encode($slide1);
                                 // $RequestText = urlencode($Text);
                             if(isset($principles)){


                                foreach ($principles as $value) {

                                    $id         = $value['id'];
                                    $title_am   = $value['title-am'];
                                    $title_ru   = $value['title-ru'];
                                    $title_en   = $value['title-en'];
                                    $info_am    = $value['info-am'];
                                    $info_ru    = $value['info-ru'];
                                    $info_en    = $value['info-en'];
                                    $image      = $value['image'];
                               
                             ?>
                            <li class="item" id="<?php echo 'principles'.$id?>">
                                <div class="row p-1">
                                   
                                    <div class="col-xl-2 col-lg-11 col-md-11 col-sm-11">
                                        <div class="item-img rounded" data-img="<?php echo 'folder1_'.$image ?>" style="background-image: url('<?=base_url("images/$image") ?>')">
                                        </div>
                                        
                                    </div>
                                    <div class="col-xl-1 col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-heading1">Անուն_հայ</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $title_am ?></h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-heading1">Անուն_ռուս</div>
                                        <div>
                                          
                                                <h4 class="item-title title_ru"> <?php echo $title_ru ?> </h4>
                                           
                                        </div>
                                    </div>
                                   <div class="col-xl-1 col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-heading1">Անուն_անգ</div>
                                        <div>
                                           
                                                <h4 class="item-title title_en"> <?php echo $title_en ?> </h4>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-heading1">Տեքստ_հայ</div>
                                        <div>
                                           
                                                <textarea rows="9" cols="23">
                                                <?php echo $info_am ?>
                                               </textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-heading1">Տեքստ_ռուս</div>
                                        <div>
                                           
                                                <textarea rows="9" cols="23">
                                                <?php echo $info_ru ?>
                                                </textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-heading1">Տեքստ_անգ</div>
                                        <div>
                                                <textarea rows="9" cols="23">
                                                <?php echo $info_en ?>
                                                </textarea>
                                            
                                        </div>
                                    </div>
                                  
                                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 item-col-actions-dropdown">
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
                                                    <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="principles" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li>
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/principles/'.$id.'?principles=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </li>
                        <?php } }?>
                        </ul>
                    </div>

                </article>



                <article class="items-list-page" style="padding: 20px 35px 20px 35px;">
                        <button type="button" class="btn btn-primary-outline  clients-button">
                            <a href="<?php echo base_url('Admin/add_item?clients=true') ?>">Ավելացնել համագործակցող ընկերություն</a>
                        </button>

                <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                    <div class="col-lg-2 col-md-2 col-sm-11">
                                        <div> <span>Ընկերության լոգո</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-11">
                                        <div> <span>Հղում</span> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1"> </div>

                                </div>
                            </li>

                             <?php 
                                 // $Text = json_encode($slide1);
                                 // $RequestText = urlencode($Text);
                             if (isset($clients)) {
                                 
                                foreach ($clients as $value) {
                                    $id    = $value['id'];
                                    $link  = $value['link'];
                                    $image = $value['image'];
                               
                             ?>
                            <li class="item" id="<?php echo 'clients'.$id?>">
                                <div class="row p-1">
                                   
                                    <div class="col-lg-2 col-md-2 col-sm-11">
                                        <div class="item-img rounded" data-img="<?php echo 'folder2_'.$image ?>" style="background-image: url('<?=base_url("images/Logo/$image") ?>')">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Հղում</div>
                                        <div>
                                            
                                             <h4 class="item-title link"><?php 
                                                if (strlen($link)>30) {
                                                    $link1=substr($link, 0, 15) . "..." . substr($link, -15);
                                                }
                                             echo $link1 ?></h4>
                                            
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
                                                    <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="clients" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li>
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/clients/'.$id.'?clients=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </li>
                        <?php } }?>
                        </ul>
                    </div>
                   
                </article>



            <article class=" items-list-page" style="padding: 20px 35px 20px 35px;" >

                        <h3 >Գործընկերների վերնագիր և մեկնաբանությունների նկար</h3>
                         <?php 
                                 // $Text = json_encode($slide1);
                                 // $RequestText = urlencode($Text);
                              if(isset($clients_title)){
                                foreach ($clients_title as $value) {
                                    $id = $value['id'];
                                    $title_am = $value['title-am'];
                                    $title_ru = $value['title-ru'];
                                    $title_en = $value['title-en'];
                                    $image = $value['image'];
                                }
                               
                             ?>
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                 
                                    <div class="col-lg-2 col-md-2 col-sm-11">
                                        <div> <span>Նկար</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Անուն_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Անուն_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Անուն_անգ</span> </div>
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
                                        <!--     <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="princip_title_image" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li> -->
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/clients_title/'.$id.'?clients_title=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            
                            <li class="item" id="<?php echo 'clients_title'.$id?>">
                                <div class="row p-1">
                                   
                                    <div class="col-lg-2 col-md-2 col-sm-11">
                                        <div class="item-img rounded" data-img="<?php echo $image ?>" style="background-image: url('<?=base_url("images/$image") ?>')">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Անուն_հայ</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $title_am ?></h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Անուն_ռուս</div>
                                        <div>
                                          
                                                <h4 class="item-title title_ru"> <?php echo $title_ru ?> </h4>
                                           
                                        </div>
                                    </div>
                                   <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Անուն_անգ</div>
                                        <div>
                                           
                                                <h4 class="item-title title_en"> <?php echo $title_en ?> </h4>
                                            
                                        </div>
                                    </div>
                                
                                  
                          
                                </div>


                            </li>
                      <?php }?>
                        </ul>
                    </div>
                </article>

             <article class="items-list-page" style="padding: 20px 35px 20px 35px;">
                        <button type="button" class="btn btn-primary-outline comments">
                            <a href="<?php echo base_url('Admin/add_item?comments=true') ?>">Ավելացնել մեկնաբանություններ</a>
                        </button>

                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-md-down hidden-lg-down">
                                <div class="row p-1">
                                   
                                    <div class="col-lg-1 col-md-12 col-sm-12">
                                        <div> <span>Անուն_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-12 col-sm-12">
                                        <div> <span>Անուն_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-12 col-sm-12">
                                        <div> <span>Անուն_անգ</span> </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12 col-sm-12">
                                        <div> <span>Տեքստ_հայ</span> </div>
                                    </div>
                                     <div class="col-lg-2 col-md-12 col-sm-12">
                                        <div> <span>Տեքստ_ռուս</span> </div>
                                    </div>
                                     <div class="col-lg-2 col-md-12 col-sm-12">
                                        <div> <span>Տեքստ_անգ</span> </div>
                                        
                                    </div>
                                    <div class="col-lg-2 col-md-12 col-sm-12">
                                        <div> <span>Հղում</span> </div>
                                        
                                    </div>
                                    <div class="col-lg-1 col-md-12 col-sm-1"> </div>
                                </div>
                            </li>

                             <?php 
                                 // $Text = json_encode($slide1);
                                 // $RequestText = urlencode($Text);
                             if(isset($comments)){
                                foreach ($comments as $value) {

                                    $id         = $value['id'];
                                    $link       = $value['link'];
                                    $title_am   = $value['title-am'];
                                    $title_ru   = $value['title-ru'];
                                    $title_en   = $value['title-en'];
                                    $info_am    = $value['info-am'];
                                    $info_ru    = $value['info-ru'];
                                    $info_en    = $value['info-en'];
                                  
                               
                             ?>
                            <li class="item" id="<?php echo 'comments'.$id?>">
                                <div class="row p-1">
                                
                                    <div class="col-xl-1 col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-heading1">Անուն_հայ</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $title_am ?></h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-heading1">Անուն_ռուս</div>
                                        <div>
                                          
                                                <h4 class="item-title title_ru"> <?php echo $title_ru ?> </h4>
                                           
                                        </div>
                                    </div>
                                   <div class="col-xl-1 col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-heading1">Անուն_անգ</div>
                                        <div>
                                           
                                                <h4 class="item-title title_en"> <?php echo $title_en ?> </h4>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-heading1">Տեքստ_հայ</div>
                                        <div>
                                           
                                                <textarea rows="9" cols="20">
                                                <?php echo $info_am ?>
                                               </textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-heading1">Տեքստ_ռուս</div>
                                        <div>
                                           
                                                <textarea rows="9" cols="20">
                                                <?php echo $info_ru ?>
                                                </textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-heading1">Տեքստ_անգ</div>
                                        <div>
                                                <textarea rows="9" cols="20">
                                                <?php echo $info_en ?>
                                                </textarea>
                                            
                                        </div>
                                    </div>
                                  <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12">
                                        <div class="item-heading1">Հղում</div>
                                        <div>
                                            
                                             <h4 class="item-title link"><?php 
                                                if (strlen($link)>15) {
                                                    $link1=substr($link, 0, 10) . "..." . substr($link, -10);
                                                }
                                             echo $link1 ?></h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-12 col-sm-1 item-col-actions-dropdown">
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
                                                    <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="comments" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li>
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/comments/'.$id.'?comments=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </li>
                        <?php } }?>
                        </ul>
                    </div>

                </article>
     </article>
                