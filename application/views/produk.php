<?php 
    
    // $tot_rows = counted rows for query
    // $pp = items per page
    // $curr_page = the current page number

    function get_paging_info($tot_rows,$pp,$curr_page)
    {
        $pages = ceil($tot_rows / $pp); // calc pages

        $data = array(); // start out array
        $data['si']        = ($curr_page * $pp) - $pp; // what row to start at
        $data['pages']     = $pages;                   // add the pages
        $data['curr_page'] = $curr_page;               // Whats the current page

        return $data; //return the paging data

    }
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $perusahaan ?></title>
<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href="<?php echo base_url() ?>assets/css/docs.min.css" rel="stylesheet"> -->
<!-- Custom Theme files -->
<!--theme style-->
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="<?php echo base_url() ?>assets/css/form.css" rel="stylesheet" type="text/css" media="all" /> 
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
                    <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="grid"><a href="<?php echo base_url(); ?>produkkami">Produk</a>
                    <li class="grid"><a href="<?php echo base_url(); ?>tentangkami">Tentang Kami</a>
                    </li>
                    <!-- <li class="grid"><a href="contact.html">Kontak Kami</a></li>                     -->
                </ul>               
             </div>
             <div class="clearfix"> </div>
             <!---->             
             </div>
            <div class="clearfix"> </div>
</div>
<!----> 
<div class="slider">
      <div class="callbacks_container">
         <ul class="rslides" id="slider">
             <li>
                 <div class="banner1">                
                      <div class="banner-info">
                      <h3>Morbi lacus hendrerit efficitur.</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
                      </div>
                 </div>
             </li>
             <li>
                 <div class="banner2">
                     <div class="banner-info">
                     <h3>Phasellus elementum tincidunt.</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
                     </div>
                 </div>
             </li>
             <li>
                 <div class="banner3">
                 <div class="banner-info">
                 <h3>Maecenas interposuere volutpat.</h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
                 </div>
                 </div>
             </li>
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
<div class="product-model">  
     <div class="container">
        <br/>
        <h3>Produk Kami</h3> 
        <br/>          
         <div class="col-md-9 product-model-sec">
                <div class="row">
                    <?php if ($produk->num_rows > 0): ?>
                        <?php foreach ($produk->result() as $r): ?>
                            <a href="<?php echo base_url() ?>produk/detail/<?php echo $r->m_product_id ?>"><div class="product-grid">
                                <div class="more-product"><span> </span></div>                      
                                <div class="product-img b-link-stripe b-animate-go  thickbox">
                                    <img width="256" height="256" src="<?php echo base_url() ?><?php echo ($r->t_photoproduct_nama) ? 'foto_product/'.$r->m_product_id.'/'.$r->t_photoproduct_nama : 'assets/images/no-image.jpg' ; ?>"  alt="">
                                    <div class="b-wrapper">
                                    <h4 class="b-animate b-from-left  b-delay03">                           
                                    <button><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Detail</button>
                                    </h4>
                                    </div>
                                </div></a>                      
                                <div class="product-info simpleCart_shelfItem">
                                    <div class="product-info-cust prt_name">
                                        <h4><?php echo $r->m_product_nama; ?></h4>                              
                                        <span class="item_price"><?php echo ($r->t_price_nominal) ? 'Rp '.number_format($r->t_price_nominal, 0, ',', '.') : 'Harga belum Tersedia'; ?></span>
                                        <div class="clearfix"> </div>
                                    </div>                                              
                                    
                                </div>
                            </div>  
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
                <div class="row">
                    <?php if ($produk->num_rows > 0): ?>
                        <center>
                        <nav>
                            <ul class="pagination">
                                <!-- <li class="disabled"><a aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="?pages=2">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li> -->
                             <!-- Create the query -->

                            <!-- Call our function from above -->
                            <?php $paging_info = get_paging_info($countproduk,$numperpage,$curr_page); ?>
                                <!-- If the current page is more than 1, show the First and Previous links -->
                                <?php if($paging_info['curr_page'] > 1) : ?>
                                    <li><a aria-label="Previous" href="0"><span aria-hidden="true">«</span></a></li>
                                    <li><a aria-label="Previous" href="<?php echo ($paging_info['curr_page'] - 1); ?>"><span aria-hidden="true">Prev</span></a></li>
                                <?php endif; ?>



                                <?php
                                    //setup starting point

                                    //$max is equal to number of links shown
                                    $max = 7;
                                    if($paging_info['curr_page'] < $max)
                                        $sp = 1;
                                    elseif($paging_info['curr_page'] >= ($paging_info['pages'] - floor($max / 2)) )
                                        $sp = $paging_info['pages'] - $max + 1;
                                    elseif($paging_info['curr_page'] >= $max)
                                        $sp = $paging_info['curr_page']  - floor($max/2);
                                ?>

                                <!-- If the current page >= $max then show link to 1st page -->
                                <?php if($paging_info['curr_page'] >= $max) : ?>
                                    <li><a href="?pages=1">1</a></li>
                                    <li class="disabled"><a>...</a></li>
                                <?php endif; ?>

                                <!-- Loop though max number of pages shown and show links either side equal to $max / 2 -->
                                <?php for($i = $sp; $i <= ($sp + $max -1);$i++) : ?>

                                    <?php
                                        if($i > $paging_info['pages'])
                                            continue;
                                    ?>

                                    <?php if($paging_info['curr_page'] == $i) : ?>
                                        <li class="active"><a href="?pages=<?php echo $i ?>"><?php echo $i ?> <span class="sr-only">(current)</span></a></li>

                                    <?php else : ?>
                                        <li><a href="?pages=<?php echo $i ?>"><?php echo $i ?></a></li>

                                    <?php endif; ?>

                                <?php endfor; ?>


                                <!-- If the current page is less than say the last page minus $max pages divided by 2-->
                                <?php if($paging_info['curr_page'] < ($paging_info['pages'] - floor($max / 2))) : ?>

                                    <li class="disabled"><a>...</a></li>
                                    <li><a href="?pages=<?php echo $paging_info['pages']; ?>"><?php echo $paging_info['pages']; ?></a></li>

                                <?php endif; ?>

                                <!-- Show last two pages if we're not near them -->
                                <?php if($paging_info['curr_page'] < $paging_info['pages']) : ?>
                                    <li><a aria-label="Next" href="pages=<?php echo ($paging_info['curr_page'] + 1); ?>"><span aria-hidden="true">Next</span></a></li>
                                    <li><a aria-label="Next" href="pages=<?php echo $paging_info['pages']; ?>"><span aria-hidden="true">»</span></a></li>
                                    
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </center>
                    <?php endif ?>
                    
                </div>
            </div>
            <style type="text/css">.kategori{cursor:pointer;}</style>
            <div class="rsidebar span_1_of_left">
                 <section  class="sky-form">
                     <div class="product_right">
                         <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Kategori</h4>
                         <div class="tab1">
                             <div class="single-bottom">   
                                    <a href="<?php echo base_url() ?>produkkami" data-id="all"><p>Semua Kategori</p></a> 
                                    <?php if ($kategori->num_rows > 0): ?>
                                        <?php foreach ($kategori->result() as $r): ?>  
                                            <a href="<?php echo base_url()."produkkami/".strtolower(str_replace(" ", "-", $r->m_categories_nama)) ?>"><p><?php echo $r->m_categories_nama ?></p></a>        
                                        <?php endforeach ?>                          
                                    <?php endif ?>
                             </div>
                          </div>            
                 </section>
                
                   
                 <!-- <section  class="sky-form">
                        <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Price</h4>
                            <ul class="dropdown-menu1">
                                 <li><a href="">                                               
                                <div id="slider-range"></div>                           
                                <input type="text" id="amount" style="border: 0; font-weight: NORMAL;   font-family: 'Dosis-Regular';" />
                             </a></li>          
                          </ul>
                   </section>
                     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
                     <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery-ui.css">
                    <script type='text/javascript'>//<![CDATA[ 
                    // $(window).load(function(){
                    //  $( "#slider-range" ).slider({
                    //             range: true,
                    //             min: 0,
                    //             max: 100000,
                    //             values: [ 500, 100000 ],
                    //             slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                    //             }
                    //  });
                    // $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

                    // });//]]> 
                    </script>
                    -->
                   
             </div>              
          </div>
        </div>
</div>
<br />
<br />
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
