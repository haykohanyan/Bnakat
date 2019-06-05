<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $this->lang->line('title'); ?></title>
    <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="<?php echo $this->lang->line('keywords'); ?>" />
         <link rel="shortcut icon" type="image/png" href="<?php echo base_url('images/bnakat-logo.png')?>"/>
       
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?php echo base_url('dashboard/css/vendor.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('dashboard/css/app-custom.css')?>">
    
    </head>

    <body>
         
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                             <div class="logo"> <img src="<?php echo base_url('images/bnakat-logo.png') ?>" width=70px height=35px;></div>  Բնակաթ
                         </h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-xs-center">Գրանցվել</p>
                        <form id="signup-form" action="<?php echo base_url('Admin/signup_admin')?>" method="Post" novalidate="">
                            <div class="form-group"> <label for="firstname">Անուն</label>
                                <div class="row">
                                    <div class="col-sm-6"> <input type="text" class="form-control underlined" name="firstname" id="firstname" placeholder="Enter firstname" required=""> </div>
                                    <div class="col-sm-6"> <input type="text" class="form-control underlined" name="lastname" id="lastname" placeholder="Enter lastname" required=""> </div>
                                </div>
                            </div>
                            <div class="form-group"> <label for="email">Էլ․ հասցե</label> <input type="email" class="form-control underlined" name="email" id="email" placeholder="Enter email address" required=""> </div>
                            <div class="form-group"> <label for="password">Գաղտնաբառ</label>
                                <div class="row">
                                    <div class="col-sm-6"> <input type="password" class="form-control underlined" name="password" id="password" placeholder="Enter password" required=""> </div>
                                    <div class="col-sm-6"> <input type="password" class="form-control underlined" name="retype_password" id="retype_password" placeholder="Re-type password" required=""> </div>
                                </div>
                            </div>
                  <!--           <div class="form-group"> <label for="agree">
            <input class="checkbox" name="agree" id="agree" type="checkbox" required=""> 
            <span>Agree the terms and <a href="#">policy</a></span>
          </label> </div> -->
                            <div class="form-group"> <button type="submit" class="btn btn-block btn-primary">Գրանցվել</button> </div>
                            <div class="form-group">
                                <p class="text-muted text-xs-center"><a href="<?php echo base_url('Admin/index')?>" style="color: #70b02b;">Գնալ մուտքի էջ</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-xs-center"> <a href="<?php echo base_url('Admin/home')?>" class="btn btn-secondary rounded btn-sm">
      <i class="fa fa-arrow-left"></i> Դեպի Ադմին պանել
    </a> </div>
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="<?php echo base_url('dashboard/js/vendor.js')?>"></script>
        <script src="<?php echo base_url('dashboard/js/app.js')?>"></script>
    </body>

</html>