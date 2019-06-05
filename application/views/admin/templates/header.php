<?php ?>
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
       <title>Բնակաթ֊պանրի գործարան</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="<?php echo base_url('apple-touch-icon.png')?>">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url('images/bnakat-logo.png')?>"/>
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?php echo base_url('dashboard/css/vendor.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('dashboard/css/app-custom.css')?>">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="app" id="app">

                <header class="header">
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
    			<i class="fa fa-bars"></i>
    		</button> </div>
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                 <span class="name"><?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}?></span> </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1"> <a class="dropdown-item" href="<?php echo base_url('Admin/signup')?>">
            			      <i class="fa fa-user icon"></i>
            			      Գրանցվել
            			    </a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="<?php echo base_url('Admin')?>">
            			      <i class="fa fa-power-off icon"></i>
            			      Դուրս գալ
            			    </a> </div>
                        </li>
                                </ul>
                            </div>
                </header>

                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo"> <a href="<?php echo base_url('pages') ?>"> <img src="<?php echo base_url('images/bnakat-logo.png') ?>" width=70px height=35px;></a></div> Բնակաթ</div>
                        </div>
                        <nav class="menu">
                            <ul class="nav metismenu" id="sidebar-menu">
                                <li > <a href="<?php echo base_url('admin/home') ?>">
                                  <i class="fa fa-home"></i> Գլխավոր</a> 
                                </li>
                                <li> <a href="<?php echo base_url('admin/about_us') ?>">
                                  <i class="fa fa-th-large"></i> Մեր մասին</a>
                                </li>
                                <li> <a href="<?php echo base_url('admin/our_product') ?>">
                                  <i class="fa fa-table"></i> Մեր արտադրանքը</a>  
                                </li>
                                <li> <a href="<?php echo base_url('admin/delivery') ?>">
                                 <i class="fa fa-pencil-square-o"></i> Առաքման համակարգ</a> 
                           </li>
                            </ul>
                        </nav>
                    </div>
                   <!--  <footer class="sidebar-footer">
                        <ul class="nav metismenu" id="customize-menu">
                            <li>
                                <ul>
                                    <li class="customize">
                                        <div class="customize-item">
                                            <div class="row customize-header">
                                                <div class="col-xs-4"> </div>
                                                <div class="col-xs-4"> <label class="title">fixed</label> </div>
                                                <div class="col-xs-4"> <label class="title">static</label> </div>
                                            </div>
                                            <div class="row hidden-md-down">
                                                <div class="col-xs-4"> <label class="title">Sidebar:</label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed" >
                                            <span></span>
                                        </label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="sidebarPosition" value="">
                                            <span></span>
                                        </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Header:</label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                            <span></span>
                                        </label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="headerPosition" value="">
                                            <span></span>
                                        </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Footer:</label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                            <span></span>
                                        </label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="footerPosition" value="">
                                            <span></span>
                                        </label> </div>
                                            </div>
                                        </div>
                                        <div class="customize-item">
                                            <ul class="customize-colors">
                                                <li> <span class="color-item color-red" data-theme="red"></span> </li>
                                                <li> <span class="color-item color-orange" data-theme="orange"></span> </li>
                                                <li> <span class="color-item color-green active" data-theme=""></span> </li>
                                                <li> <span class="color-item color-seagreen" data-theme="seagreen"></span> </li>
                                                <li> <span class="color-item color-blue" data-theme="blue"></span> </li>
                                                <li> <span class="color-item color-purple" data-theme="purple"></span> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul> <a href="">
                        <i class="fa fa-cog"></i> Customize
                    </a> </li>
                        </ul>
                    </footer> -->
                </aside>