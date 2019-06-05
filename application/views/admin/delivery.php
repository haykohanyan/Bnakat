<style>          
          #map { 
            height: 400px;    
            width: 100%;            
          }          
        </style> 
<article class="content dashboard-page">
	<h2>Առաքման համակարգ</h2>


              <article class="content2 items-list-page">
                <h3>Վաճառքի կետերի քարտեզ</h3>

                 
                <!--The div element for the map -->
                <div id="map"></div>
                <form action="<?= base_url('admin/insert_location')?>" method="Post">
                   <input type="text" name="lat_lng" class="lat_lng">
                   <button type="submit" class="btn btn-primary-outline" name="save">
                       Պահպանել
                  </button>
                  <button type="submit" class="btn btn-primary-outline" name="remove">
                       Ջնջել
                  </button>
                </form>
     
             </article> 

                       <article class="content2 items-list-page">
                        <h3>Քարտեզի ինֆորմացիա</h3>
                       
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-md-down">
                                <div class="row p-1">
                                    <div class="col-lg-1 col-md-1 col-sm-12">
                                        <div> <span>Անուն_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Անուն_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
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
                                foreach ($delivery_map_info as $value) {

                                    $id         = $value['id'];
                                    $title_am   = $value['title_am'];
                                    $title_ru   = $value['title_ru'];
                                    $title_en   = $value['title_en'];
                                    $info_am    = $value['info_am'];
                                    $info_ru    = $value['info_ru'];
                                    $info_en    = $value['info_en'];
                                   
                               
                             ?>
                            <li class="item" id="<?php echo 'work_princip'.$id?>">
                                <div class="row p-1">
                                   
                                   
                                    <div class="col-lg-1 col-md-12 col-sm-12">
                                        <div class="item-heading">Անուն_հայ</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $title_am ?></h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12 col-sm-12">
                                        <div class="item-heading">Անուն_ռուս</div>
                                        <div>
                                          
                                                <h4 class="item-title title_ru"> <?php echo $title_ru ?> </h4>
                                           
                                        </div>
                                    </div>
                                   <div class="col-lg-2 col-md-12 col-sm-12">
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
                                                <!--     <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="work_princip" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li> -->
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/delivery_map_info/'.$id.'?delivery_map_info=true')?>">
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
                    foreach ($general_title as $value) {
                      $id               = $value['id'];
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

                                </div>
                           </li>
                           
                        
                        </ul>
                    </div>
          </article>
          
		           <article class="content2 items-list-page">
               		<?php
               		  foreach ($general_delivery_image as $value) {
               		  	$id       = $value['id'];
                      $image_am = $value['image_am'];
                      $image_ru = $value['image_ru'];
               		    $image_en = $value['image_en'];
               		     // print_r($general_image1);
               		   } 
               		?>
                    <div class="card items">
                        <ul class="item-list striped">
                          <li class="item item-list-header hidden-sm-down">
                                <div class="row p-1">
                                 
                                    <div class="col-lg-3 col-md-3 col-sm-11">
                                        <div> <span>Նկար_հայ</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Նկար_ռուս</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div> <span>Նկար_անգ</span> </div>
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
                                         <!--    <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="text_info" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li> -->
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/general_delivery_image/'.$id.'?general_delivery_image=true')?>">
                                                <i class="fa fa-pencil"></i>
                                            </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            </li>
                           
                            <li class="item" id="<?php echo 'general_delivery_image'.$id?>">
                                <div class="row p-1">
                                   
                                   <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Նկար_հայ</div>
                                        <div class="item-img rounded" data-img="<?php echo $image_am ?>" style="background-image: url('<?=base_url("images/$image_am") ?>'); padding-bottom: 30%">
                                        </div>

                                    </div>

                                  <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Նկար_ռուս</div>
                                         <div class="item-img rounded" data-img="<?php echo $image_ru ?>" style="background-image: url('<?=base_url("images/$image_ru") ?>'); padding-bottom: 30%">
                                        </div>

                                    </div>

                                   <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Նկար_անգ</div>
                                         <div class="item-img rounded" data-img="<?php echo $image_en ?>" style="background-image: url('<?=base_url("images/$image_en") ?>'); padding-bottom: 30%">
                                        </div>

                                    </div>

                       
                                </div>
                           </li>
                          
                        
                        </ul>
                    </div>

          </article>

          
          
                  <article class="content2 items-list-page">
           	         <?php
                        foreach ($text_info as $value) {
                          $id = $value['id'];
                          $text_info_am = $value['info-am'];
                          $text_info_ru = $value['info-ru'];
                          $text_info_en = $value['info-en'];
                        }
                        ?>
          		 <div class="card items">
                        <ul class="item-list striped">
                          <li class="item item-list-header hidden-sm-down">
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
                                         <!--    <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="text_info" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li> -->
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/text_info/'.$id.'?text_info=true')?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            </li>
                           
                            <li class="item" id="<?php echo 'text_info'.$id?>">
                                <div class="row p-1">
                                   
                                   <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Ինֆորմացիա_հայ</div>
                                        <div>
                                            
                                              <textarea rows="9" cols="35">
                                             	  <?php echo $text_info_am ?>
                                             </textarea>
                                            
                                            
                                        </div>
                                    </div>

                                  <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Ինֆորմացիա_ռուս</div>
                                        <div>
                                          
                                                <textarea rows="9" cols="35">
                                                	<?php echo $text_info_ru ?>
                                                		
                                                	</textarea>
                                           
                                        </div>
                                    </div>

                                   <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-heading">Ինֆորմացիա_անգ</div>
                                        <div>
                                           
                                                <textarea rows="9" cols="35">
                                                    <?php echo $text_info_en ?>
                                                </textarea>
                                            
                                        </div>
                                    </div>

                       
                                </div>
                           </li>
                          
                        
                        </ul>
                    </div>
          </article>




          <article class="content2 items-list-page">
                        <h3>Առաքվող արտադրանքներ</h3>

                       

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
                                    <div class="col-lg-1 col-md-1 col-sm-12">
                                        <div> <span>Անուն_անգ</span> </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Գին</span> </div>
                                    </div>
                                     <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div> <span>Քանակ</span> </div>
                                    </div>
                                    
                                    <div class="col-lg-1 col-md-1 col-sm-1"> </div>
                                </div>
                            </li>

                             <?php 
                                 // $Text = json_encode($slide1);
                                 // $RequestText = urlencode($Text);
                                foreach ($product as $value) {

                                    $id         = $value['id'];
                                    $page_id    = $value['page_id'];
                                    $title_am   = $value['title-am'];
                                    $title_ru   = $value['title-ru'];
                                    $title_en   = $value['title-en'];
                                    $price      = $value['price'];
                                    $count      = $value['count'];
                                    $image      = $value['image'];
                               
                             ?>
                            <li class="item" id="<?php echo 'product'.$id?>">
                                <div class="row p-1">
                                    
                                    <div class="col-lg-2 col-md-2 col-sm-11">
                                        <div class="item-img rounded" data-img="<?php echo 'folder1_'.$image ?>" style="background-image: url('<?=base_url("images/$image") ?>')">
                                        </div>
                                        
                                    </div>

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
                                        <div class="item-heading">Գին</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $price ?></h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-heading">Քանակ</div>
                                        <div>
                                            
                                             <h4 class="item-title title_am"><?php echo $count ?></h4>
                                            
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
                                                    <li> <a class="remove" data-row-id="<?php echo $id?>" data-table="product" href="#" data-toggle="modal" data-target="#confirm-modal">
                                            <i class="fa fa-trash-o "></i>
                                        </a> </li>
                                                <li> <a class="edit"  href="<?php echo base_url('admin/edit_item/product/'.$id.'?delivery_product=true')?>">
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
    
   <script>
 function initMap() {

        var myLatlng = {lat: 40.17814926931652, lng: 44.50312516201416};
        var marker;
        
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: myLatlng
        });
       $.ajax(
          {
              type:"post",
              url: "<?php echo base_url('admin/get_location'); ?>",
              data:{table:'delivery_map'},

              success:function(response)
               {  
                  var array = JSON.parse(response);
                   console.log(array);
                 for (var i = 0; i<array.length;i++){
                   var location = {lat: Number(array[i].lat), lng: Number(array[i].lng)};
                      marker = new google.maps.Marker({
                      position: location,
                      map: map
                  });
                 marker.addListener('dblclick', function() {
                     removeMarker(this);

                });
            
                 }

                 
              }
            
          }
      );  

      google.maps.event.addListener(map, 'click', function(event) {

        var lat = event.latLng.lat();
        var lng = event.latLng.lng();
        var location = {lat:lat, lng:lng};
        $('.lat_lng').val(lat+', '+lng);
           placeMarker(location);
        
});
         
      function placeMarker(location) {
        if ( marker ) {
          marker.setPosition(location);
        } 
        else {
          marker = new google.maps.Marker({
            position: location,
            map: map
          });

        }

      }
     function removeMarker(marker) {
             var loc_remove = marker.getPosition();
             var lat = loc_remove.lat();
             var lng = loc_remove.lng();
             $('.lat_lng').val(lat+', '+lng);
             // var id = array[i].id;
             // console.log(id);

               
      }

}
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWdGA-ndsHMtR5-cdZrc5SHtfKKBG5Bfg&callback=initMap">
    </script>
  
    
</article>
 