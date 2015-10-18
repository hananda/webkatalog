<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="base" content="<?php echo base_url(); ?>">

    <title>Login | Web Mobil</title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/icheck/flat/green.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bootstrap-toastr/toastr.min.css" rel="stylesheet">

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form id="loginform">
                        <h1>Login Form</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" name="u" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" name="p" />
                        </div>
                        <div>
                            <center><button class="btn btn-default submit" >Log in</button></center>
                            <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <!-- <p class="change_link">New to site?
                                <a href="#toregister" class="to_register"> Create Account </a>
                            </p> -->
                            <div class="clearfix"></div>
                            <!-- <br /> -->
                            <div>
                                <h1><i class="fa fa-building-o" style="font-size: 26px;"></i> <?php echo $perusahaan ?></h1>

                                <p>©2015 All Rights Reserved</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            <!-- <div id="register" class="animate form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Already a member ?
                                <a href="#tologin" class="to_register"> Log in </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                                <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div> -->
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>  
    <script src="<?php echo base_url(); ?>assets/bootstrap-toastr/toastr.min.js"></script>      
    <script src="<?php echo base_url(); ?>assets/js/global.js" type="text/javascript"></script>        
    <script src="<?php echo base_url(); ?>assets/js/login.js" type="text/javascript"></script>        
</body>

</html>