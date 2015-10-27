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
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
                    <!-- <li class="grid"><a href="contact.html">Kontak Kami</a></li>                     -->
                </ul>               
             </div>
             <div class="clearfix"> </div>
             <!---->             
             </div>
            <div class="clearfix"> </div>
</div>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"> </script>
<style type="text/css">
    .container h3::before {
        background: #eee none repeat scroll 0 0;
        content: "";
        display: inline-block;
        height: 2px;
        left: 10%;
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
        right: 10%;
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
<div class="article">  
     <div class="container">
        <br/>
        <h3>Artikel dan Pengumuman</h3> 
        <br/>          
         <div class="col-md-12 product-model-sec">
                <div class="row">
                    <?php if ($article->num_rows > 0): ?>
                        <?php foreach ($article->result() as $r): ?>
                            <?php 
                                preg_match_all('/<img[^>]+>/i',$r->m_article_desc, $img);
                                if (@$img[0][0]) {
                                    $doc = new DOMDocument();
                                    $doc->loadHTML(@$img[0][0]);
                                    $xpath = new DOMXPath($doc);
                                    $src = $xpath->evaluate("string(//img/@src)"); # "/images/image.jpg"
                                }else{
                                    $src = base_url()."assets/images/no-image.jpg";
                                }
                            ?>
                            <a href="<?php echo base_url() ?>artikel/view/<?php echo $r->m_article_id ?>"><div class="product-grid">
                                <div class="more-product"><span> </span></div>                      
                                <div class="product-img b-link-stripe b-animate-go  thickbox">
                                    <img width="256" height="256" src="<?php echo $src ?>"  alt="">
                                    <div class="b-wrapper">
                                    <h4 class="b-animate b-from-left  b-delay03">                           
                                    <button><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Lihat Selengkapnya</button>
                                    </h4>
                                    </div>
                                </div></a>                     
                                <div class="product-info simpleCart_shelfItem">
                                    <div class="product-info-cust prt_name">
                                        <h4><?php echo $r->m_article_title; ?></h4>
                                    </div>                                              
                                    
                                </div>
                            </div>  
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
                <div class="row">
                    <?php if ($article->num_rows > 0): ?>
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
                            <?php $paging_info = get_paging_info($countarticle,$numperpage,$curr_page); ?>
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
