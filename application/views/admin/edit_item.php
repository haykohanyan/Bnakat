
                <div class="sidebar-overlay" id="sidebar-overlay"></div>


                <article class="content item-Փոփոխելor-page">
                    <div class="title-block">
                        <h3 class="title"> Փոփոխել դաշտերը <span class="sparkline bar" data-type="bar"></span> </h3>
                    </div>
                    
                    <div style="display:<?php if(isset($_GET['slide'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 
                        if($result_slider1){
                            
                        ?>
                    <form name="item" action="<?= base_url('admin/update_items/slider1/'.$result_slider1[0]['id'].'?img='.$result_slider1[0]['image'])?>" method="Post" enctype="multipart/form-data">
                        <div class="card card-block">
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am" value="<?php echo $result_slider1[0]['title-am']?>"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru" value="<?php echo $result_slider1[0]['title-ru']?>">
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en" value="<?php echo $result_slider1[0]['title-en']?>"> </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah1');"  name="image"/>
                                        <img id="blah1" src="<?php echo base_url('images/'.$result_slider1[0]['image'])?>" alt="your image" width="180px"  height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }

                    ?>
                </div>


                 <div style="display:<?php if(isset($_GET['title'])){echo 'block';}else{ echo 'none'; }?>">
                     <?php 
                        if($result_home_info){
                         
                           
                        ?>
                     <form name="item" action="<?= base_url('admin/update_items/home_info/'.$result_home_info[0]['id'].'?img='.$result_home_info[0]['image'].'&img1='.$result_home_info[0]['image1'].'&img2='.$result_home_info[0]['image2'])?>" method="Post" enctype="multipart/form-data" >
                        <h3>Գլխավոր վերնագիր</h3>
                        <div class="card card-block">
                            <input type="text" name="table" value="<?php echo $result_home_info[0]['id']?>" hidden="true">

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am" value='<?php echo $result_home_info[0]['title-am']?>'> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru"  value='<?php echo $result_home_info[0]['title-ru']?>'>
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en"  value='<?php echo $result_home_info[0]['title-en']?>'> 
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-am"
                                              rows="5" cols="33">
                                         <?php echo $result_home_info[0]['info-am']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-ru"
                                              rows="5" cols="33">
                                        <?php echo $result_home_info[0]['info-ru']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="info-en"
                                              rows="5" cols="33">
                                        <?php echo $result_home_info[0]['info-en']?>
                                    </textarea>
                                     </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Image_left: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                
                                       <input type='file' onchange="readURL(this,'blah2');"  name="image_left" />
                                        <img id="blah2" src="<?php echo base_url('images/'.$result_home_info[0]['image'])?>" alt="your image"  width="180px" height="180px" />
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Image1: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                               
                                       <input type='file' onchange="readURL(this,'blah3');"  name="image1" />
                                        <img id="blah3" src="<?php echo base_url('images/'.$result_home_info[0]['image1'])?>" alt="your image" width="180px" height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Image2: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                
                                       <input type='file' onchange="readURL(this,'blah4');"  name="image2" />
                                        <img id="blah4" src="<?php echo base_url('images/'.$result_home_info[0]['image2'])?>" alt="your image" width="180px" height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                     <?php 
                   }
                    ?>
                </div>


                <div style="display:<?php if(isset($_GET['princip_title'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 
                        if($result_princip_title_image){
                           
                        ?>
                    <form name="item" action="<?= base_url('admin/update_items/princip_title_image/'.$result_princip_title_image[0]['id'].'?img='.$result_princip_title_image[0]['image'])?>" method="Post" enctype="multipart/form-data">
                        <div class="card card-block">
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am" value="<?php echo $result_princip_title_image[0]['title-am']?>"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru" value="<?php echo $result_princip_title_image[0]['title-ru']?>">
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en" value="<?php echo $result_princip_title_image[0]['title-en']?>"> </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah5');"  name="image"/>
                                        <img id="blah5" src="<?php echo base_url('images/'.$result_princip_title_image[0]['image'])?>" alt="your image" width="180px"  height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }
                    ?>
                </div>

            <div style="display:<?php if(isset($_GET['principles'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 
                        if($result_principles){
                            
                        ?>
                    <form name="item" action="<?= base_url('admin/update_items/principles/'.$result_principles[0]['id'].'?img='.$result_principles[0]['image'])?>" method="Post" enctype="multipart/form-data">
                        <h3>Մեր սկզբունքներ</h3>
                        <div class="card card-block">
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am" value="<?php echo $result_principles[0]['title-am']?>"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru" value="<?php echo $result_principles[0]['title-ru']?>">
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en" value="<?php echo $result_principles[0]['title-en']?>"> </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-am"
                                              rows="5" cols="33">
                                         <?php echo $result_principles[0]['info-am']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-ru"
                                              rows="5" cols="33">
                                        <?php echo $result_principles[0]['info-ru']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="info-en"
                                              rows="5" cols="33">
                                        <?php echo $result_principles[0]['info-en']?>
                                    </textarea>
                                     </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah6');"  name="image"/>
                                        <img id="blah6" src="<?php echo base_url('images/'.$result_principles[0]['image'])?>" alt="your image" width="180px"  height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }
                    ?>
                </div>


            <div style="display:<?php if(isset($_GET['clients'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 
                        if($result_clients){
                          
                        ?>
                     <form name="item" action="<?= base_url('admin/update_items/clients/'.$result_clients[0]['id'].'?img='.$result_clients[0]['image'])?>"" method="Post" enctype="multipart/form-data" >

                          <h3>Համագործակցող ընկերություն</h3>
                          <div class="card card-block">

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Link: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="link" value="<?php echo $result_clients[0]['link']?>"> 
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                
                                       <input type='file' onchange="readURL(this,'blah7');"  name="image" />
                                        <img id="blah7" src="<?php echo base_url('images/Logo/'.$result_clients[0]['image'])?>" alt="your image" width="180px" height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }
                  
                    ?>
                </div>
                

                <div style="display:<?php if(isset($_GET['clients_title'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 
                        if($result_clients_title){
                           
                        ?>
                    <form name="item" action="<?= base_url('admin/update_items/clients_title/'.$result_clients_title[0]['id'].'?img='.$result_clients_title[0]['image'])?>" method="Post" enctype="multipart/form-data">
                        <h3>Համագործակցող ընկերություն</h3>
                        <div class="card card-block">
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am" value="<?php echo $result_clients_title[0]['title-am']?>"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru" value="<?php echo $result_clients_title[0]['title-ru']?>">
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en" value="<?php echo $result_clients_title[0]['title-en']?>"> </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah8');"  name="image"/>
                                        <img id="blah8" src="<?php echo base_url('images/'. $result_clients_title[0]['image'])?>" alt="your image" width="180px"  height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }
                    ?>
                </div>

             <div style="display:<?php if(isset($_GET['comments'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 
                        if($result_comments){
                            
                        ?>
                    <form name="item" action="<?= base_url('admin/update_items/comments/'.$result_comments[0]['id'])?>" method="Post" enctype="multipart/form-data">
                        <h3>Մեկնաբանություններ</h3>
                        <div class="card card-block">
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am" value="<?php echo $result_comments[0]['title-am']?>"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru" value="<?php echo $result_comments[0]['title-ru']?>">
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en" value="<?php echo $result_comments[0]['title-en']?>"> </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-am"
                                              rows="5" cols="33">
                                         <?php echo $result_comments[0]['info-am']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-ru"
                                              rows="5" cols="33">
                                        <?php echo $result_comments[0]['info-ru']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="info-en"
                                              rows="5" cols="33">
                                        <?php echo $result_comments[0]['info-en']?>
                                    </textarea>
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Link: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="link" value="<?php echo $result_comments[0]['link']?>"> 
                                </div>
                            </div>
                       
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }
                    ?>
                </div>

             <div style="display:<?php if(isset($_GET['general_delivery_image'])){echo 'block';}else{ echo 'none' ;}?>">
                         <?php 
                        if($result_general_delivery_image){
                           
                        ?>
                     <form name="item" action="<?= base_url('admin/update_delivery_items/general_delivery_image/'.$result_general_delivery_image[0]['id'].'?img1='.$result_general_delivery_image[0]['image_am'].'&img2='.$result_general_delivery_image[0]['image_ru'].'&img3='.$result_general_delivery_image[0]['image_en'])?>" method="Post" enctype="multipart/form-data" >
                        
                        <div class="card card-block">
                            <input type="text" name="table" value="image" hidden="true">

                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images-am: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah18');"  name="image-am"/>
                                        <img id="blah18" src="<?php echo base_url('images/'.$result_general_delivery_image[0]['image_am'])?>" alt="your image" width="180px"  height="180px"/>
                                    </div>

                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images-ru: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah19');"  name="image-ru"/>
                                        <img id="blah19" src="<?php echo base_url('images/'.$result_general_delivery_image[0]['image_ru'])?>" alt="your image" width="180px"  height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images-en: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah20');"  name="image-en"/>
                                        <img id="blah20" src="<?php echo base_url('images/'.$result_general_delivery_image[0]['image_en'])?>" alt="your image" width="180px"  height="180px"/>
                                    </div>

                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php 
                   }
                    ?>
                </div>
             <div style="display:<?php if(isset($_GET['general_image'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 
                        if($result_general_image){
                            
                        ?>
                    <form name="item" action="<?= base_url('admin/update_about_items/general_image/'.$result_general_image[0]['id'].'?img='.$result_general_image[0]['image'])?>" method="Post" enctype="multipart/form-data">
                        <div class="card card-block">
                            

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah12');"  name="image"/>
                                        <img id="blah12" src="<?php echo base_url('images/'.$result_general_image[0]['image'])?>" alt="your image" width="180px"  height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }

                    ?>
                </div>


            <div style="display:<?php if(isset($_GET['general_title'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 
                        if($result_general_titles){
                           
                        ?>
                    <form name="item" action="<?= base_url('admin/update_about_items/general_titles/'.$result_general_titles[0]['id'])?>" method="Post" enctype="multipart/form-data">
                        <div class="card card-block">

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> General_title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am" value="<?php echo $result_general_titles[0]['title-am']?>"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> General_title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru" value="<?php echo $result_general_titles[0]['title-ru']?>">
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> General_title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en" value="<?php echo $result_general_titles[0]['title-en']?>"> </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }
                    ?>
                </div>

               <div style="display:<?php if(isset($_GET['text_info'])){echo 'block';}else{ echo 'none' ;}?>">
                         <?php 
                        if($result_text_info){
                           
                        ?>
                     <form name="item" action="<?= base_url('admin/update_about_items/text_info/'.$result_text_info[0]['id'])?>" method="Post" enctype="multipart/form-data" >
                        
                        <div class="card card-block">
                            <input type="text" name="table" value="text_info" hidden="true">

                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-am"
                                              rows="5" cols="33">
                                            <?php echo $result_text_info[0]['info-am']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-ru"
                                              rows="5" cols="33">
                                            <?php echo $result_text_info[0]['info-ru']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="info-en"
                                              rows="5" cols="33">
                                            <?php echo $result_text_info[0]['info-en']?>
                                    </textarea>
                                     </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php 
                   }
                    ?>
                </div>

                <div style="display:<?php if(isset($_GET['about_subtitle'])){echo 'block';}else{ echo 'none' ;}?>">
                         <?php 
                        if($result_about_subtitles){
                           
                        ?>
                     <form name="item" action="<?= base_url('admin/update_about_items/about_subtitles/'.$result_about_subtitles[0]['id'])?>" method="Post" enctype="multipart/form-data" >
                        
                        <div class="card card-block">
                            <input type="text" name="table" value="text_info" hidden="true">


                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Subtitles-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="subtitle_am" value="<?php echo $result_about_subtitles[0]['subtitle-am']?>"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Subtitles-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="subtitle_ru" value="<?php echo $result_about_subtitles[0]['subtitle-ru']?>"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Subtitles-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="subtitle_en" value="<?php echo $result_about_subtitles[0]['subtitle-en']?>"> 
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php 
                   }
                    ?>
                </div>



                <div style="display:<?php if(isset($_GET['work_princip'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 
                        if($result_work_princip){
                            
                        ?>
                    <form name="item" action="<?= base_url('admin/update_about_items/work_princip/'.$result_work_princip[0]['id'].'?img='.$result_work_princip[0]['image'])?>" method="Post" enctype="multipart/form-data">
                        <div class="card card-block">
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am" value="<?php echo $result_work_princip[0]['title-am']?>"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru" value="<?php echo $result_work_princip[0]['title-ru']?>">
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en" value="<?php echo $result_work_princip[0]['title-en']?>"> </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-am"
                                              rows="5" cols="33">
                                         <?php echo $result_work_princip[0]['info-am']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-ru"
                                              rows="5" cols="33">
                                        <?php echo $result_work_princip[0]['info-ru']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="info-en"
                                              rows="5" cols="33">
                                        <?php echo $result_work_princip[0]['info-en']?>
                                    </textarea>
                                     </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah9');"  name="image"/>
                                        <img id="blah9" src="<?php echo base_url('images/'.$result_work_princip[0]['image'])?>" alt="your image" width="180px"  height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }
                    ?>
                </div>

            <div style="display:<?php if(isset($_GET['product_slide'])){echo 'block';}else{ echo 'none' ;}?>">
                     <?php 
                        if($result_lori_mozzarella_image_slide){
                            
                        ?>
                 <form name="item" action="<?= base_url('admin/update_about_items/lori_mozzarella_image_slide/'.$result_lori_mozzarella_image_slide[0]['id'].'?img='.$result_lori_mozzarella_image_slide[0]['image'])?>" method="Post" enctype="multipart/form-data" >

                          <h3>Արտադրության նկար</h3>
                          <div class="card card-block">

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Product Name: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="product_name" value="<?php echo $result_lori_mozzarella_image_slide[0]['categorie']?>" readonly> 
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                
                                       <input type='file' onchange="readURL(this,'blah10');"  name="image" />
                                        <img id="blah10" src="<?php echo base_url('images/'.$result_lori_mozzarella_image_slide[0]['categorie'].'_slide/'.$result_lori_mozzarella_image_slide[0]['image']) ?>" alt="your image" width="180px" height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php 
                }
                ?>
                </div>

                 <div style="display:<?php if(isset($_GET['product_process_desc'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 
                        if($result_product_process_desc){
                            
                        ?>
                    <form name="item" action="<?= base_url('admin/update_about_items/product_process_desc/'.$result_product_process_desc[0]['id'])?>" method="Post" enctype="multipart/form-data">
                        <div class="card card-block">
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am" value="<?php echo $result_product_process_desc[0]['title-am']?>"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru" value="<?php echo $result_product_process_desc[0]['title-ru']?>">
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en" value="<?php echo $result_product_process_desc[0]['title-en']?>"> </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-am"
                                              rows="5" cols="33">
                                         <?php echo $result_product_process_desc[0]['info-am']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-ru"
                                              rows="5" cols="33">
                                        <?php echo $result_product_process_desc[0]['info-ru']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="info-en"
                                              rows="5" cols="33">
                                        <?php echo $result_product_process_desc[0]['info-en']?>
                                    </textarea>
                                     </div>
                            </div>

                        
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }
                    ?>
                </div>

                 <div style="display:<?php if(isset($_GET['images'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 
                        if($result_images){
                            
                        ?>
                    <form name="item" action="<?= base_url('admin/update_about_items/images/'.$result_images[0]['id'].'/2?img='.$result_images[0]['image'])?>" method="Post" enctype="multipart/form-data">
                        <div class="card card-block">
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am" value='<?php echo $result_images[0]['title-am']?>'> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru" value='<?php echo $result_images[0]['title-ru']?>'>
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en" value='<?php echo $result_images[0]['title-en']?>'> </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Desc-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="desc-am"
                                              rows="5" cols="33">
                                         <?php echo $result_images[0]['desc-am']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Desc-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="desc-ru"
                                              rows="5" cols="33">
                                        <?php echo $result_images[0]['desc-ru']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Desc-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="desc-en"
                                              rows="5" cols="33">
                                        <?php echo $result_images[0]['desc-en']?>
                                    </textarea>
                                     </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah11');"  name="image"/>
                                        <img id="blah11" src="<?php echo base_url('images/gallery/'.$result_images[0]['image'])?>" alt="your image" width="180px"  height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }
                    ?>
                </div>


            <div style="display:<?php if(isset($_GET['about_image'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 
                        if($result_pages_images){
                            
                        ?>
                    <form name="item" action="<?= base_url('admin/update_about_items/pages_images/'.$result_pages_images[0]['id'].'?img='.$result_pages_images[0]['image'])?>" method="Post" enctype="multipart/form-data">
                        <div class="card card-block">
                            

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah13');"  name="image"/>
                                        <img id="blah13" src="<?php echo base_url('images/'.$result_pages_images[0]['image'])?>" alt="your image" width="180px"  height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }

                    ?>
                </div>

            <div style="display:<?php if(isset($_GET['home_image'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 
                        if($result_pages_images){
                            
                        ?>
                    <form name="item" action="<?= base_url('admin/update_items/pages_images/'.$result_pages_images[0]['id'].'?img='.$result_pages_images[0]['image'])?>" method="Post" enctype="multipart/form-data">
                        <div class="card card-block">
                            

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah14');"  name="image"/>
                                        <img id="blah14" src="<?php echo base_url('images/'.$result_pages_images[0]['image'])?>" alt="your image" width="180px"  height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }

                    ?>
                </div>


                <div style="display:<?php if(isset($_GET['counters'])){echo 'block';}else{ echo 'none'; }?>">
                        <?php 
                        if($result_counter_numbers){
                            
                        ?>
                     <form name="item" action="<?= base_url('admin/update_about_items/counter_numbers/'.$result_counter_numbers[0]['id'].'?img='.$result_counter_numbers[0]['image'])?>" method="Post" enctype="multipart/form-data" >
                        
                        <div class="card card-block">
                            <input type="text" name="table" value="<?php echo $result_counter_numbers[0]['id']?>" hidden="true">

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am" value='<?php echo $result_counter_numbers[0]['title-am']?>'> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru"  value='<?php echo $result_counter_numbers[0]['title-ru']?>'>
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en"  value='<?php echo $result_counter_numbers[0]['title-en']?>'> 
                                </div>
                            </div>
                              <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Number: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="number"  value='<?php echo $result_counter_numbers[0]['number']?>'> 
                                </div>
                            </div>
                            


                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Image: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                
                                       <input type='file' onchange="readURL(this,'blah15');"  name="image"/>
                                        <img id="blah15" src="<?php echo base_url('images/svg_icons/'.$result_counter_numbers[0]['image'])?>" alt="your image"  width="180px" height="180px" />
                                    </div>

                                </div>
                            </div>
                         
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                     <?php 
                   }
                    ?>
                </div>

                <div style="display:<?php if(isset($_GET['product'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 

                        if($result_product){
                            
                        ?>
                    <form name="item" action="<?= base_url('admin/update_about_items/product/'.$result_product[0]['id'].'/'.$result_product[0]['page_id'].'?img='.$result_product[0]['image'])?>" method="Post" enctype="multipart/form-data">
                        <div class="card card-block">
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am" value="<?php echo $result_product[0]['title-am']?>"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru" value='<?php echo $result_product[0]['title-ru']?>'>
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en" value='<?php echo $result_product[0]['title-en']?>'> </div>
                            </div>

                                <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Price: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="price" value='<?php echo $result_product[0]['price']?>'> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Count: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="count" value='<?php echo $result_product[0]['count']?>'> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-am"
                                              rows="5" cols="33">
                                         <?php echo $result_product[0]['info-am']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-ru"
                                              rows="5" cols="33">
                                        <?php echo $result_product[0]['info-ru']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="info-en"
                                              rows="5" cols="33">
                                        <?php echo $result_product[0]['info-en']?>
                                    </textarea>
                                     </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah16');"  name="image"/>
                                        <img id="blah16" src="<?php echo base_url('images/'.$result_product[0]['image'])?>" alt="your image" width="180px"  height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }
                    ?>
                </div>

                 <div style="display:<?php if(isset($_GET['delivery_product'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 

                        if($result_product){
                            
                        ?>
                    <form name="item" action="<?= base_url('admin/update_about_items/product/'.$result_product[0]['id'].'/4?img='.$result_product[0]['image'])?>" method="Post" enctype="multipart/form-data">
                        <div class="card card-block">
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am" value="<?php echo $result_product[0]['title-am']?>"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru" value='<?php echo $result_product[0]['title-ru']?>'>
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en" value='<?php echo $result_product[0]['title-en']?>'> </div>
                            </div>

                                <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Price: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="price" value='<?php echo $result_product[0]['price']?>'> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Count: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="count" value='<?php echo $result_product[0]['count']?>'> 
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah17');"  name="image"/>
                                        <img id="blah17" src="<?php echo base_url('images/'.$result_product[0]['image'])?>" alt="your image" width="180px"  height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }
                    ?>
                </div>

                <div style="display:<?php if(isset($_GET['delivery_map_info'])){echo 'block';}else{ echo 'none' ;}?>">
                        <?php 
                        if($result_delivery_map_info){
                            
                        ?>
                    <form name="item" action="<?= base_url('admin/update_delivery_items/delivery_map_info/'.$result_delivery_map_info[0]['id'])?>" method="Post" enctype="multipart/form-data">
                        <h3>Քարտեզ ինֆորմացիա</h3>
                        <div class="card card-block">
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am" value="<?php echo $result_delivery_map_info[0]['title_am']?>"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru" value="<?php echo $result_delivery_map_info[0]['title_ru']?>">
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en" value="<?php echo $result_delivery_map_info[0]['title_en']?>"> </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-am"
                                              rows="5" cols="33">
                                         <?php echo $result_delivery_map_info[0]['info_am']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-ru"
                                              rows="5" cols="33">
                                        <?php echo $result_delivery_map_info[0]['info_ru']?>
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="info-en"
                                              rows="5" cols="33">
                                        <?php echo $result_delivery_map_info[0]['info_en']?>
                                    </textarea>
                                     </div>
                            </div>

                           
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Փոփոխել </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                   }
                    ?>
                </div>
                </article>

               