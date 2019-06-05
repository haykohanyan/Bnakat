	<footer class="section section-fluid footer-classic footer-emp-w3ls  py-4">
		<div class="container-fluid">
			<div class="row justify-content-between footer-top">
					  <div class="col-md-10 col-lg-12 col-xl-4 wow fadeInRight">
		              <div class="box-footer box-footer-small">
		                <div class="footer-brand"><a href="index.html"><img src="<?php  echo base_url('images/bnakat-logo.png')?>" alt="" width="191" height="60"/></a></div>
		                <p class="text-width-medium"><?php echo $this->lang->line('info_footer');?></p>
		                <div class="contact-classic">
		                  <div class="contact-classic-item">
		                    <div class="unit-adresses unit-spacing-md align-items-center">
		                      <div class="unit-left">
		                        <h6 class="contact-classic-title"><?php echo $this->lang->line('address');?></h6>
		                      </div>
		                      <div class="unit-body contact-classic-link"><a href="#"><?php echo $this->lang->line('address_place');?></a></div>
		                    </div>
		                  </div>
		                  <div class="contact-classic-item">
		                    <div class="unit-adresses unit-spacing-md align-items-center">
		                      <div class="unit-left">
		                        <h6 class="contact-classic-title"><?php echo $this->lang->line('phone');?></h6>
		                      </div>
		                      <div class="unit-body contact-classic-link"> <a href="tel:(+374)77351777">(+374) 77 35 17 77</a>
		                      </div>
		                    </div>
		                  </div>
		                  <div class="contact-classic-item">
		                    <div class="unit-adresses unit-spacing-md align-items-center">
		                      <div class="unit-left">
		                        <h6 class="contact-classic-title"><?php echo $this->lang->line('email');?></h6>
		                      </div>
		                      <div class="unit-body contact-classic-link"><a href="mailto:bnakat2011@gmail.com"> bnakat2011@gmail.com</a>
		                      </div>
		                    </div>
		                  </div>
		                </div>
		                <ul class="list-inline list-inline-sm footer-social-list">
		                  <li><a class="icon fa fa-facebook" href="https://www.facebook.com/Bnakat-LLC-cheese-factory-587860851732162/?epa=SEARCH_BOX" target="_blank"></a></li>
		                  <li><a class="icon fa fa-instagram" href="https://www.instagram.com/bnakatllc/" target="_blank"></a></li>
		                </ul>
		              </div>
		            </div>
                 <div class="col-md-10 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
              <div class="box-footer">
                     
              <!-- Google Map-->
              <section class="section" id="contacts" style="margin-top: 2%;">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d762.013651705631!2d44.52410641660233!3d40.18559817806327!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1523555988679" width="100%" height="508" frameborder="0" style="border:0" allowfullscreen=""> -->
                	<div id="map1" style="height: 508px"></div>
                <!-- </iframe> -->
             </section>
              </div>
            </div>
		           <div class="col-md-10 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
              <div class="box-footer">
                <h3 class="font-weight-normal"><?php echo $this->lang->line('contact_us');?></h3>
                 <p class="text-width-medium"><?php echo $this->lang->line('contact_info');?></p>

                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="<?php  echo base_url('pages/send_mail')?>">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-name-6" type="text" name="name" data-constraints="@Required"/ placeholder="<?php echo $this->lang->line('contact_name');?>">
                    <label class="form-label" for="contact-name-6"></label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input" id="contact-email-6" type="email" name="email" data-constraints="@Email @Required"/ placeholder="<?php echo $this->lang->line('contact_email');?>">
                    <label class="form-label" for="contact-email-6"></label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input" id="contact-phone-6" type="text" name="phone" data-constraints="@Required @Numeric"/ placeholder="<?php echo $this->lang->line('contact_phone');?>">
                    <label class="form-label" for="contact-phone-6"></label>
                  </div>
                  <div class="form-wrap">
                    <label class="form-label" for="contact-message-6"></label>
                    <textarea class="form-input" id="contact-message-6" name="message" data-constraints="@Required" placeholder="<?php echo $this->lang->line('contact_message');?>"></textarea>
                  </div>
                  <button class="button button-block button-primary send-button" type="submit"><?php echo $this->lang->line('contact_button');?></button>
                </form>

              </div>
            </div>
       
          </div>
        </div>
		<div class="copy-right-top border-top mt-5">
			<p class="copy-right text-center pt-xl-5 pt-4">&copy; <?php echo $this->lang->line('under_info');?>
				<!-- <a href="http://w3layouts.com/"> W3layouts </a> -->
			</p>
		</div>
	</footer>

	<script type="text/javascript" src="<?php echo base_url('js/load.js')?>"></script>
	<!-- <script src="<?php echo base_url('js/fixed-nav.js')?>"></script> -->
	<script src="<?php echo base_url('js/bootstrap.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/owl.carousel.min.js')?>"></script>
	<script type="text/javascript">
		$('#owl-demo').owlCarousel({
			loop:true,
		     // autoPlay : 2000,
		    items:1,
		    margin:30,
		    stagePadding:30,
		    smartSpeed:450,
		    dots:true,
		    nav:false,
		    

			});
		$('#owl-clients').owlCarousel({
			    loop:true,
			    margin:10,
			    nav:true,
			    dots:false,
			    responsive:{
			        0:{
			            items:3
			        },
			        768:{
			            items:5
			        },
			        1000:{
			            items:7
			        }
			    }

			});
		$('#owl-mozzarella').owlCarousel({
			    items:1,
			    loop:true,
			    margin:10,
			    nav:true,
			    dots:false,
			    smartSpeed:450,
			

			});
		$('#owl-lori').owlCarousel({
			    items:1,
			    loop:true,
			    margin:10,
			    nav:true,
			    dots:false,
			    smartSpeed:450,
			

			})


	</script>
	<script src="<?php echo base_url('js/spin.js')?>"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- fixed navigation -->
	
	<script src="<?php echo base_url('js/lightbox-plus-jquery.min.js')?>"></script>

	<!-- //fixed navigation -->
	<!-- dropdown smooth -->
	<script>
		$(document).ready(function (){
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
					$(window).load(function(){
				    $('html,body').animate({ scrollTop: $('#<?php if(isset($_GET['read_more']))echo $_GET['read_more'];else echo "menu"  ?>').offset().top - 100 }, 'slow');
				});


			  $('nav ul li a').each(function() {
              	 let url = window.location.href;
              	
			   if (this.href === url) {
			  	$('nav ul li a').each(function() {
			  		$(this).removeClass('active');
			  	})
			   $(this).addClass('active');
			  }
			 });
			});
		</script>
		<script src="<?php echo base_url('js/jquery.countup.js')?>"></script>
	<!-- //dropdown smooth -->

	<!-- banner -->
	<script src="<?php echo base_url('js/responsiveslides.min.js')?>"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 1
			$("#slider").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});


	</script>
	<!-- //banner -->

	<!-- search plugin -->
	<!-- pop-up-box -->
	
	<script src="<?php echo base_url('js/jquery.magnific-popup.js')?>"></script>
	<!-- //pop-up-box -->
	<!-- search script -->
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		  
		});
	</script>
	<script>
    $(function() {
        var header = $(".navbar");

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 50) {
            	header.removeClass('bg-light');
                header.addClass("scrolled");
            } else {

                header.removeClass("scrolled");
                 header.addClass("bg-light");
            }
        });

    });
</script>

	<!-- //search script -->
	<!-- //search plugin -->

	<!-- stats -->
	<script src="<?php echo base_url('js/jquery.waypoints.min.js')?>"></script>

	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- smooth scrolling -->
	<script src="<?php echo base_url('js/SmoothScroll.min.js')?>"></script>
	<!-- move-top -->
	<script src="<?php echo base_url('js/move-top.js')?>"></script>
	<!-- easing -->
	<script src="<?php echo base_url('js/easing.js')?>"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="<?php echo base_url('js/fruitage.js')?>"></script>

	<!-- <script src="js/bootstrap.js"></script> -->
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //Js files -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 1500,
        arrows: true,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        },{
            breakpoint: 520,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            },
            breakpoint: 1,
            settings: {
                slidesToShow: 1,
                slidesToScroll:1
            }
        }]
    });
         
		


    
});
</script>
<script>

 function initMap() {
        var loc = window.location.href;
        if(loc == 'http://www.bnakat.am/Pages/delivery'){
            
            var myLatlng = {lat: 40.17814926931652, lng: 44.50312516201416};
            var marker;
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 13,
              center: myLatlng
            });  
    
              $.ajax(
                    {
                        type:"post",
                        url: "<?php echo base_url('Pages/get_location'); ?>",
                        data:{table:'delivery_map'},
    
                        success:function(response)
                         {  
                            var array = JSON.parse(response);
                            // console.log(array);
                           for (var i = 0; i<array.length;i++){
                             var location = {lat: Number(array[i].lat), lng: Number(array[i].lng)};
                                marker = new google.maps.Marker({
                          position: location,
                          map: map
                        });
                        
                      
                           }
    
                           
                        }
                      
                    }
                );
            }
 
             var map1 = new google.maps.Map(document.getElementById('map1'), {
                          zoom: 13,
                          center: {lat: 40.17582252343473, lng: 44.44191990198874}
                        }); 
             var marker1 = new google.maps.Marker({
                      position: {lat: 40.17582252343473, lng: 44.44191990198874},
                      map: map1
                    });
         }
    
    </script>
     <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWdGA-ndsHMtR5-cdZrc5SHtfKKBG5Bfg&callback=initMap">
    </script>

	
</body>

</html>