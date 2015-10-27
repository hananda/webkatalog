<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title><?php echo $perusahaan;
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?></title>
<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url() ?>assets/css/docs.min.css" rel="stylesheet">
<!-- Custom Theme files -->
<!--theme style-->
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />  
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sales mobil" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="<?php echo base_url() ?>assets/js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="<?php echo base_url() ?>assets/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/memenu.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/numeral/numeral.min.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script> 
<!-- /start menu -->
</head>
<body> 
<!--header-->   
<script src="<?php echo base_url() ?>assets/js/responsiveslides.min.js"></script>
  
<div class="header-top">
     <div class="header-bottom">            
                <div class="logo">
                    <h1><a href="<?php echo base_url(); ?>"><?php echo $perusahaan ?></a></h1>                  
                </div>
             <!---->         
             <div class="top-nav">
                <ul class="memenu skyblue">
                    <li class="<?php echo ($actual_link == base_url()) ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="<?php echo ($actual_link == base_url()."artikel") ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>artikel">Artikel</a></li>
                    <li class="<?php echo ($actual_link == base_url()."produkkami") ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>produkkami">Produk</a></li>
                    <li class="<?php echo ($actual_link == base_url()."tentangkami") ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>tentangkami">Tentang Kami</a></li>
                    </li>
                    <!-- <li class="grid"><a href="contact.html">Kontak Kami</a></li>                     -->
                </ul>               
             </div>
             <!---->
             <!-- <div class="cart box_1">
                 <a href="checkout.html">
                    <div class="total">
                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                <div class="clearfix"> </div>
             </div> -->
             <div class="clearfix"> </div>
             <!---->             
             </div>
            <div class="clearfix"> </div>
</div>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"> </script>

<div class="article">
    <center>
      <div class="container" style="align:center;">  
            <br/>
            <h3><?php echo $article->m_article_title; ?></h3> 
            <br/> 
            <hr />             
            <div class="col-md-12">
                <?php echo $article->m_article_desc; ?>
          </div>
      </div>
    </center>
 </div>
<div class="copywrite">
     <div class="container">
         <div class="copy">
             <p>© 2015 <?php echo $perusahaan ?>. All Rights Reserved </p>
         </div>
         <div class="social">                           
                <!-- <a href="#"><i class="facebook"></i></a>
                <a href="#"><i class="twitter"></i></a> -->
                <!-- <a href="#"><i class="dribble"></i></a>  -->
                <!-- <a href="#"><i class="google"></i></a>   -->
                <!-- <a href="#"><i class="youtube"></i></a>  -->
         </div>
         <div class="clearfix"></div>
     </div>
</div>
<!---->
</body>
</html>
