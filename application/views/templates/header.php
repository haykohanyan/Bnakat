<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php echo $this->lang->line('title'); ?></title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="<?php echo $this->lang->line('keywords'); ?>" />
	<meta name="description" content="<?php echo $this->lang->line('description'); ?>"/>
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url('images/bnakat-logo.png')?>"/>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="<?php echo base_url('js/jquery-2.2.3.min.js')?>"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138669948-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-138669948-1');
	</script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(53355472, "init", {
	        clickmap:true,
	        trackLinks:true,
	        accurateTrackBounce:true,
	        webvisor:true
	   });
	</script>
<noscript><div><img src="https://mc.yandex.ru/watch/53355472" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
        
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.css')?>">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="<?php echo base_url('css/pretty-checkbox/dist/pretty-checkbox.min.css')?>"/>
	<link href="<?php echo base_url('css/popuo-box.css');?>" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('css/lightbox.css')?>" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url('css/style.css')?>" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="<?php echo base_url('css/font-awesome.css')?>" media="all"/>
	<style>          
              
        </style> 

</head>

	<div class="loader"></div>
<header>
		<!-- navigation -->
		<div class="main-top py-1" id="menu">
			<!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light" style="padding: 0.5% 4%;"> -->
			<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light" style="padding: 0.5% 4%;">
				<!-- <div class="container"> -->
					<!-- logo -->
					<!-- <div class="col-2" style="text-align:right;"> -->
						<div>
					<a class="navbar-brand font-weight-bold" href="<?php echo  base_url('Pages/home')?>">
						<!-- <i class="fa fa-apple mr-2" aria-hidden="true"/></i>Fruitage -->
					</a>
				     </div>
				    <!-- </div> -->
					<!-- //logo -->
					<!-- <div class="col-9" style="text-align:right;"> -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				<!-- </div> -->
					<!-- <div class="col-9"> -->
					<div class="collapse navbar-collapse text-center" id="navbarSupportedContent" style="margin-top: 2%;">
						<ul class="navbar-nav ml-lg-auto">
							<li class="nav-item">
								<a class="nav-link active" href="<?php echo base_url('Pages/index')?>" ><?php echo $this->lang->line('home'); ?>
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item mx-lg-4 my-lg-0 my-3">
								<a class="nav-link" href="<?php echo base_url('Pages/about_us')?>"><?php echo $this->lang->line('about_us'); ?></a>

							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="<?php echo base_url('Pages/our_product')?>"><?php echo $this->lang->line('our_product'); ?></a>
							</li>
							<li class="nav-item ml-lg-4 mt-lg-0 mt-3">
								<a class="nav-link" href="<?php echo base_url('Pages/delivery')?>"><?php echo $this->lang->line('delivery_sis'); ?></a>
							</li>
							<li class="nav-item ml-lg-4 mt-lg-0 mt-3">
								<a class="nav-link" href="<?php echo base_url('LanguageSwitcher/switchLang/am'); ?>"><img src="<?php echo base_url('images/fl_am.png')?>"></a>
							</li>
							<li class="nav-item ml-lg-4 mt-lg-0 mt-3">
								<a class="nav-link" href="<?php echo base_url('LanguageSwitcher/switchLang/ru')?>"><img src="<?php echo base_url('images/fl_ru.png')?>"></a>
							</li>
							<li class="nav-item ml-lg-4 mt-lg-0 mt-3">
								<a class="nav-link" href="<?php echo base_url('LanguageSwitcher/switchLang/en')?>"><img src="<?php echo base_url('images/fl_en.png')?>"></a>
							</li>
						</ul>
					</div>
				<!-- </div> -->
				<!-- </div> -->
			</nav>
		</div>
		<!-- //navigation -->

	</header>