
<!doctype html>
<html class="no-js" lang="en">

    <head>
    <title><?php echo $this->lang->line('title'); ?></title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="<?php echo $this->lang->line('keywords'); ?>" />
         <link rel="apple-touch-icon" href="<?php echo base_url('apple-touch-icon.png')?>">
          <link rel="shortcut icon" type="image/png" href="<?php echo base_url('images/bnakat-logo.png')?>"/>
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
                           <div class="logo"> <img src="<?php echo base_url('images/bnakat-logo.png') ?>" width=70px height=35px;></div>  Բնակաթ</h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-xs-center">Մուտք</p>
                        <form id="login-form" action="<?php echo base_url('Admin/home')?>" method="POST" novalidate="">
                            <div class="form-group"> <label for="username">Էլ․հասցե</label> <input type="email" class="form-control underlined" name="email" id="username" placeholder="Your email address" required> </div>
                            <div class="form-group"> <label for="password">Գաղտնաբառ</label> <input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password" required> </div>
           
                            <div class="form-group"> <button type="submit" class="btn btn-block btn-primary">Մուտք</button> </div>
                          
                        </form>
                    </div>
                </div>
         
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