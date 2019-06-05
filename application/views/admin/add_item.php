
                <div class="sidebar-overlay" id="sidebar-overlay"></div>


                <article class="content item-editor-page">
                    <div class="title-block">
                        <h3 class="title"> Ավելացնել նոր դաշտ <span class="sparkline bar" data-type="bar"></span> </h3>
                    </div>
                    
                    <div style="display:<?php if(isset($_GET['slide'])){echo 'block';}else{ echo 'none' ;}?>">
                        <form name="item" action="<?= base_url('admin/insert_slide')?>" method="Post" enctype="multipart/form-data" >
                        <h3>Գլխավոր Սլայդ</h3>
                        <div class="card card-block">

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru">
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en"> </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                    <!--     <a href="#" class="add-image" data-toggle="modal" data-target="#modal-media">
                                            <div class="image-container new">
                                                <div class="image">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                        </a> -->
                                       <input type='file' onchange="readURL(this,'blah1');"  name="image" />
                                        <img id="blah1" src="http://placehold.it/180" alt="your image" width="180px" height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Ավելացնել</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                    
                    <div style="display:<?php if(isset($_GET['principles'])){echo 'block';}else{ echo 'none' ;}?>">

                     <form name="item" action="<?= base_url('admin/insert_princip')?>" method="Post" enctype="multipart/form-data" >
                        <h3>Մեր սկզբունքներ</h3>
                        <div class="card card-block">
                            <input type="text" name="table" value="home_info" hidden="true">

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru">
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en"> </div>
                            </div>

                        

                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-am"
                                              rows="5" cols="33">
                                    
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-ru"
                                              rows="5" cols="33">
                                    
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="info-en" rows="5" cols="33">
                                    
                                    </textarea>
                                     </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Image: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah6');"  name="image" />
                                        <img id="blah6" src="http://placehold.it/180" alt="your image"  width="180px" height="180px" />
                                    </div>

                                </div>
                            </div>
                      
                      
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Ավելացնել</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                <div style="display:<?php if(isset($_GET['clients'])){echo 'block';}else{ echo 'none' ;}?>">

                        <form name="item" action="<?= base_url('admin/insert_clients')?>" method="Post" enctype="multipart/form-data" >

                          <h3>Համագործակցող ընկերություն</h3>
                          <div class="card card-block">

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Link: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="link"> 
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                
                                       <input type='file' onchange="readURL(this,'blah7');"  name="image" />
                                        <img id="blah7" src="http://placehold.it/180" alt="your image" width="180px" height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Ավելացնել</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

             <div style="display:<?php if(isset($_GET['comments'])){echo 'block';}else{ echo 'none' ;}?>">
                        
                    <form name="item" action="<?= base_url('admin/insert_comments')?>" method="Post" enctype="multipart/form-data">
                        <h3>Մեկնաբանություններ</h3>
                        <div class="card card-block">
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru" >
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en" > </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-am"
                                              rows="5" cols="33">
                                         
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-ru"
                                              rows="5" cols="33">
                                        
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="info-en"
                                              rows="5" cols="33">
                                       
                                    </textarea>
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Link: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="link"> 
                                </div>
                            </div>
                        
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Ավելացնել</button>
                                </div>
                            </div>
                        </div>
                    </form>
                
                </div>


                <div style="display:<?php if(isset($_GET['text_info'])){echo 'block';}else{ echo 'none' ;}?>">

                     <form name="item" action="<?= base_url('admin/insert_text_info')?>" method="Post" enctype="multipart/form-data" >
                        <h3>Ավելացնել Ինֆորմացիա</h3>
                        <div class="card card-block">
                            <input type="text" name="table" value="text_info" hidden="true">

                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-am"
                                              rows="5" cols="33">
                                    
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-ru"
                                              rows="5" cols="33">
                                    
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="info-en"
                                              rows="5" cols="33">
                                    
                                    </textarea>
                                     </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Ավելացնել</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                <div style="display:<?php if(isset($_GET['work_princip'])){echo 'block';}else{ echo 'none' ;}?>">

                     <form name="item" action="<?= base_url('admin/insert_work_princip')?>" method="Post" enctype="multipart/form-data" >
                        <h3>Մեր սկզբունքներ</h3>
                        <div class="card card-block">
                            <input type="text" name="table" value="home_info" hidden="true">

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru">
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en"> </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-am"
                                              rows="5" cols="33">
                                    
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-ru"
                                              rows="5" cols="33">
                                    
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="info-en"
                                              rows="5" cols="33">
                                    
                                    </textarea>
                                     </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Image: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah8');"  name="image" />
                                        <img id="blah8" src="http://placehold.it/180" alt="your image"  width="180px" height="180px" />
                                    </div>

                                </div>
                            </div>
                      
                      
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Ավելացնել</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

             <div style="display:<?php if(isset($_GET['product_slide'])){echo 'block';}else{ echo 'none' ;}?>">

                 <form name="item" action="<?= base_url('admin/insert_product_slide')?>" method="Post" enctype="multipart/form-data" >

                          <h3>Արտադրության նկար</h3>
                          <div class="card card-block">

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Product Name: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="lori or mozzarella" name="product_name" required=""> 
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                
                                       <input type='file' onchange="readURL(this,'blah9');"  name="image" />
                                        <img id="blah9" src="http://placehold.it/180" alt="your image" width="180px" height="180px"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Ավելացնել</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


               <div style="display:<?php if(isset($_GET['images'])){echo 'block';}else{ echo 'none' ;}?>">

                     <form name="item" action="<?= base_url('admin/insert_images')?>" method="Post" enctype="multipart/form-data" >
                        <h3>Մեր նկարներ</h3>
                        <div class="card card-block">


                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru">
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en"> </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Desc-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="desc-am"
                                              rows="5" cols="33">
                                    
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Desc-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="desc-ru"
                                              rows="5" cols="33">
                                    
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Desc-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="desc-en"
                                              rows="5" cols="33">
                                    
                                    </textarea>
                                     </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Image: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah10');"  name="image" />
                                        <img id="blah10" src="http://placehold.it/180" alt="your image"  width="180px" height="180px" />
                                    </div>

                                </div>
                            </div>
                      
                      
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Ավելացնել</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div style="display:<?php if(isset($_GET['product'])){echo 'block';}else{ echo 'none' ;}?>">

                     <form name="item" action="<?= base_url('admin/insert_product')?>" method="Post" enctype="multipart/form-data" >
                        <h3>Մեր սկզբունքներ</h3>
                        <div class="card card-block">
                            
                            <input type="text" name="page_id" value="3" hidden="true">
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-am: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_am"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-ru: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_ru">
                                     </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title-en: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="title_en"> </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Price: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="price"> 
                                </div>
                            </div>
                               <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Count: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="count"> 
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-am: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-am"
                                              rows="5" cols="33">
                                    
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-ru: </label>
                                <div class="col-sm-10">
                                    <textarea  name="info-ru"
                                              rows="5" cols="33">
                                    
                                    </textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Info-en: </label>
                                <div class="col-sm-10">
                                   <textarea  name="info-en"
                                              rows="5" cols="33">
                                    
                                    </textarea>
                                     </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right" > Image: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                
                                       <input type='file' onchange="readURL(this,'blah11');"  name="image" />
                                        <img id="blah11" src="http://placehold.it/180" alt="your image"  width="180px" height="180px" />
                                    </div>

                                </div>
                            </div>
                      
                      
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Ավելացնել</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </article>

               