<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title><?php echo $perusahaan ?></title>
<style type="text/css">
    <?php 
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if (count($article) > 0) {
            for ($i=0; $i < count($article); $i++) { 
                $img = ($article[$i]["m_article_desc"]) ? $article[$i]["m_article_desc"] : base_url()."assets/images/no-image.jpg" ;
    ?>
    .banner<?php echo $article[$i]["m_article_id"]; ?>{
        background:url(<?php echo $img; ?>) no-repeat 0px 0px;
        background-size:cover;
        min-height:585px;
    }
    <?php
            }
        }
    ?>
   /* .banner1{
        background:url(<?php echo base_url(); ?>assets/images/bnr.jpg) no-repeat 0px 0px;
        background-size:cover;
        min-height:585px;
    }
    .banner2{
        background:url(<?php echo base_url(); ?>assets/images/bnr2.jpg) no-repeat 0px 0px;
        background-size:cover;
        min-height:585px;
    }
    .banner3{
        background:url(<?php echo base_url(); ?>assets/images/bnr3.jpg) no-repeat 0px 0px;
        background-size:cover;
        min-height:585px;
    }*/
</style>
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
<script>  
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>
  
<div class="header-top">
     <div class="header-bottom">            
                <div class="logo">
                    <h1><a href="<?php echo base_url(); ?>"><?php echo $perusahaan ?></a></h1>                  
                </div>
             <!---->         
             <div class="top-nav">
                <ul class="memenu skyblue">
                    <li class="<?php echo ($actual_link == base_url()) ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="<?php echo ($actual_link == base_url()."artikel") ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>artikel">Artikel</a>
                    <li class="<?php echo ($actual_link == base_url()."produkkam") ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>produkkami">Produk</a>
                    <li class="<?php echo ($actual_link == base_url()."tentangkami") ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>tentangkami">Tentang Kami</a>
                        <!-- <div class="mepanel">
                            <div class="row">
                                <div class="col1 me-one">
                                    <h4>Shop</h4>
                                    <ul>
                                        <li><a href="product.html">New Arrivals</a></li>
                                        <li><a href="product.html">Home</a></li>
                                        <li><a href="product.html">Decorates</a></li>
                                        <li><a href="product.html">Accessories</a></li>
                                        <li><a href="product.html">Kids</a></li>
                                        <li><a href="product.html">Login</a></li>
                                        <li><a href="product.html">Brands</a></li>
                                        <li><a href="product.html">My Shopping Bag</a></li>
                                    </ul>
                                </div>
                                <div class="col1 me-one">
                                    <h4>Type</h4>
                                    <ul>
                                        <li><a href="product.html">Diwali Lights</a></li>
                                        <li><a href="product.html">Tube Lights</a></li>
                                        <li><a href="product.html">Bulbs</a></li>
                                        <li><a href="product.html">Ceiling Lights</a></li>
                                        <li><a href="product.html">Accessories</a></li>
                                        <li><a href="product.html">Lanterns</a></li>
                                    </ul>   
                                </div>
                                <div class="col1 me-one">
                                    <h4>Popular Brands</h4>
                                    <ul>
                                        <li><a href="product.html">Everyday</a></li>
                                        <li><a href="product.html">Philips</a></li>
                                        <li><a href="product.html">Havells</a></li>
                                        <li><a href="product.html">Wipro</a></li>
                                        <li><a href="product.html">Jaguar</a></li>
                                        <li><a href="product.html">Ave</a></li>
                                        <li><a href="product.html">Gold Medal</a></li>
                                        <li><a href="product.html">Anchor</a></li>
                                    </ul>   
                                </div>
                            </div>
                        </div> -->
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
<!----> 
<div class="slider">
      <div class="callbacks_container">
         <ul class="rslides" id="slider">
            <?php 
                if (count($article) > 0) {
                    for ($i=0; $i < count($article); $i++) { 
            ?>
             <li>
                 <div class="banner<?php echo $article[$i]["m_article_id"]; ?>">                
                      <div class="banner-info">
                      <a href="<?php echo base_url(); ?>artikel/view/<?php echo $article[$i]["m_article_id"] ?>"><h3><?php echo $article[$i]["m_article_title"]; ?></h3></a>
                      </div>
                 </div>
             </li>
            <?php
                    }
                }
            ?>
          </ul>
      </div>
  </div>
<!---->
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"> </script>
<style type="text/css">
    .container h3::before {
        background: #eee none repeat scroll 0 0;
        content: "";
        display: inline-block;
        height: 2px;
        left: 20%;
        position: absolute;
        top: 18px;
        width: 18%;
    }

    .container h3::after{
        background: #eee none repeat scroll 0 0;
        content: "";
        display: inline-block;
        height: 2px;
        position: absolute;
        right: 20%;
        top: 18px;
        width: 18%;
    }

    .container h3 {
        font-family: "Dosis-Medium";
        font-size: 2.2em;
        position: relative;
        text-align: center;
    }
</style>
<div class="items">
     <div class="container">
        <h3>Produk Terbaru Kami</h3><br/>
         <div class="items-sec">
            <?php if ($product['first']->num_rows > 0): ?>
                <?php foreach ($product['first']->result() as $r): ?>
                     <div class="col-md-3 feature-grid">
                         <a href="<?php echo base_url() ?>produk/detail/<?php echo $r->m_product_id ?>"><img width="256" height="256" src="<?php echo base_url() ?><?php echo ($r->t_photoproduct_nama) ? 'foto_product/'.$r->m_product_id.'/'.$r->t_photoproduct_nama : 'assets/images/no-image.jpg' ; ?>" alt=""/> 
                             <div class="arrival-info">
                                 <h4><?php echo $r->m_product_nama; ?></h4>
                                 <p><?php echo ($r->t_price_nominal) ? 'Rp '.number_format($r->t_price_nominal, 0, ',', '.') : 'Harga belum Tersedia'; ?></p>
                             </div>
                             <div class="viw">
                                <a href="<?php echo base_url() ?>produk/detail/<?php echo $r->m_product_id ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
                             </div>
                          </a>
                     </div>
                <?php endforeach ?>
            <?php endif ?>
         </div>
         <div class="items-sec btm-sec">
            <?php if ($product['second']->num_rows > 0): ?>
                <?php foreach ($product['second']->result() as $r): ?>
                     <div class="col-md-3 feature-grid">
                         <a href="<?php echo base_url() ?>produk/detail/<?php echo $r->m_product_id ?>"><img width="256" height="256" src="<?php echo base_url() ?><?php echo ($r->t_photoproduct_nama) ? 'foto_product/'.$r->m_product_id.'/'.$r->t_photoproduct_nama : 'assets/images/no-image.jpg' ; ?>" alt=""/> 
                             <div class="arrival-info">
                                 <h4><?php echo $r->m_product_nama; ?></h4>
                                 <p><?php echo ($r->t_price_nominal) ? 'Rp '. number_format($r->t_price_nominal, 0, ',', '.') : 'Harga belum Tersedia'; ?></p>
                             </div>
                             <div class="viw">
                                <a href="<?php echo base_url() ?>produk/detail/<?php echo $r->m_product_id ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
                             </div>
                          </a>
                     </div>
                <?php endforeach ?>
            <?php endif ?>
            
         </div>
     </div>
</div>
<!---->
<!-- <div class="offers">
     <div class="container">
     <h3>End of Season Sale</h3>
     <div class="offer-grids">
         <div class="col-md-6 grid-left">
             <a href="#"><div class="offer-grid1">
                 <div class="ofr-pic">
                     <img src="images/ofr2.jpeg" class="img-responsive" alt=""/>
                 </div>
                 <div class="ofr-pic-info">
                     <h4>Emergency Lights <br>& Led Bulds</h4>
                     <span>UP TO 60% OFF</span>
                     <p>Shop Now</p>
                 </div>
                 <div class="clearfix"></div>
             </div></a>
         </div>
         <div class="col-md-6 grid-right">
             <a href="#"><div class="offer-grid2">               
                 <div class="ofr-pic-info2">
                     <h4>Flat Discount</h4>
                     <span>UP TO 30% OFF</span>
                     <h5>Outdoor Gate Lights</h5>
                     <p>Shop Now</p>
                 </div>
                 <div class="ofr-pic2">
                     <img src="images/ofr3.jpg" class="img-responsive" alt=""/>
                 </div>
                 <div class="clearfix"></div>
             </div></a>
         </div>
         <div class="clearfix"></div>
     </div>
     </div>
</div>
<div class="subscribe">
     <div class="container">
         <h3>Newsletter</h3>
         <form>
             <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
             <input type="submit" value="Subscribe">
         </form>
     </div>
</div>
<div class="footer">
     <div class="container">
         <div class="footer-grids">
             <div class="col-md-3 about-us">
                 <h3>About Us</h3>
                 <p>Maecenas nec auctor sem. Vivamus porttitor tincidunt elementum nisi a, euismod rhoncus urna. Curabitur scelerisque vulputate arcu eu pulvinar. Fusce vel neque diam</p>
             </div>
             <div class="col-md-3 ftr-grid">
                    <h3>Information</h3>
                    <ul class="nav-bottom">
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">New Products</a></li>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Our Stores</a></li>
                        <li><a href="#">Best Sellers</a></li>   
                    </ul>                   
             </div>
             <div class="col-md-3 ftr-grid">
                    <h3>More Info</h3>
                    <ul class="nav-bottom">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Membership</a></li> 
                    </ul>                   
             </div>
             <div class="col-md-3 ftr-grid">
                    <h3>Categories</h3>
                    <ul class="nav-bottom">
                        <li><a href="#">Car Lights</a></li>
                        <li><a href="#">LED Lights</a></li>
                        <li><a href="#">Decorates</a></li>
                        <li><a href="#">Wall Lights</a></li>
                        <li><a href="#">Protectors</a></li> 
                    </ul>                   
             </div>
             <div class="clearfix"></div>
         </div>
     </div>
</div> -->
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
