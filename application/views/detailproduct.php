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
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css" type="text/css" media="screen" />
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
    var cicilan = [];
    var dp = '<?php echo $dp; ?>';
    <?php 
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if ($cicilan->num_rows > 0) {
            foreach ($cicilan->result() as $r) {
    ?>
            cicilan['<?php echo $r->t_bunga_id ?>'] = [];
            cicilan['<?php echo $r->t_bunga_id ?>']['prosentase'] = <?php echo $r->t_bunga_prosentase ?>;
            cicilan['<?php echo $r->t_bunga_id ?>']['cicilan'] = <?php echo $r->t_bunga_cicilan ?>;
    <?php
            }
        };
    ?>

    var harga = [];
    var tipeproduk = [];
    <?php 
        if ($tipeproduk->num_rows > 0) {
            $now = 0;
            foreach ($tipeproduk->result() as $r) {
            if ($r->m_type_id == $now) {continue;};
    ?>
            tipeproduk['<?php echo $r->m_type_id ?>'] = [];
            <?php $i=0; foreach ($tipeproduk->result() as $j) {
                if ($r->m_type_id == $j->m_type_id) {
            ?>
                    tipeproduk['<?php echo $r->m_type_id ?>'].push('<?php echo $j->m_transmisi_id ?>-<?php echo $j->m_transmisi_nama ?>');
            <?php
                };
            } 
            ?>
    <?php
            $now = $r->m_type_id;
            }
        };
    ?>


    <?php 
        if ($tipeproduk->num_rows > 0) {
            foreach ($tipeproduk->result() as $r) {
    ?>
        harga['<?php echo $r->m_type_id; ?>,<?php echo $r->m_transmisi_id ?>'] = [];
        harga['<?php echo $r->m_type_id; ?>,<?php echo $r->m_transmisi_id ?>']['hargaasli'] = '<?php echo ($r->t_price_nominal) ? $r->t_price_nominal : 0; ?>';
        harga['<?php echo $r->m_type_id; ?>,<?php echo $r->m_transmisi_id ?>']['hargatampil'] = '<?php echo ($r->t_price_nominal) ? number_format($r->t_price_nominal, 0, ',', '.') : 0; ?>';
    <?php
            $now = $r->m_type_id;
            }
        };
    ?>

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
                    <li class="<?php echo ($actual_link == base_url()."artikel") ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>artikel">Artikel</a></li>
                    <li class="<?php echo ($actual_link == base_url()."produkkami") ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>produkkami">Produk</a></li>
                    <li class="<?php echo ($actual_link == base_url()."tentangkami") ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>tentangkami">Tentang Kami</a></li>
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
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"> </script>
<?php if ($produk->num_rows > 0): ?>
<?php $produk = $produk->row(); ?>
<div class="product">
    <div class="container">
        <div class="product-price1">
            <div class="top-sing">
                <div class="col-md-7 single-top"> 
                    <div class="flexslider">
                        <ul class="slides">
                            <?php if ($fotoproduk->num_rows > 0): ?>
                                <?php foreach ($fotoproduk->result() as $r): ?>
                                    <li data-thumb="<?php echo base_url(); ?>foto_product/<?php echo $idproduk; ?>/<?php echo $r->t_photoproduct_nama; ?>">
                                        <div class="thumb-image"> <img src="<?php echo base_url(); ?>foto_product/<?php echo $idproduk; ?>/<?php echo $r->t_photoproduct_nama; ?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                    </li>
                                <?php endforeach ?>
                            <?php else : ?>
                                <li data-thumb="<?php echo base_url(); ?>assets/images/no-image.jpg">
                                   <div class="thumb-image"> <img src="<?php echo base_url(); ?>assets/images/no-image.jpg" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                </li> 
                            <?php endif ?>
                        </ul>
                    </div>                                       
                    <script src="<?php echo base_url(); ?>assets/js/imagezoom.js"></script>
                    <script defer src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
                    <script>
                        // Can also be used with $(document).ready()
                        $(window).load(function() {
                          $('.flexslider').flexslider({
                            animation: "slide",
                            controlNav: "thumbnails"
                          });
                        });
                    </script> 
                    </div>
                    <div class="col-md-5 single-top-in simpleCart_shelfItem">
                        <div class="single-para ">
                            <h4><?php echo $produk->m_product_nama ?></h4>                          
                            <hr />
                            <!-- <h5 class="item_price"><?php //echo ($produk->t_price_nominal) ? 'Rp '.number_format($produk->t_price_nominal, 0, ',', '.') : 'Harga belum Tersedia'; ?></h5>                             -->
                            <!-- <p class="para">
                            <?php //echo $produk->m_product_desc; ?>
                            </p> -->
                            <div id="desc">
                                <?php echo $produk->m_product_desc; ?>
                            </div>
                            <div class="check">
                                <br/>
                                <br/>
                                <table>
                                    <tr>
                                        <td colspan="3" align="center">SIMULASI KREDIT (DP Sebesar <?php echo $dp; ?>% Dari Harga)</td>
                                    </tr>
                                    <tr>
                                        <td>Pilih Tipe</td>
                                        <td width="10%"></td>
                                        <td>
                                            <select id="tipeproduk">
                                                <option value="0"></option>
                                                <?php if ($tipeproduk->num_rows > 0): ?>
                                                    <?php $now = 0;foreach ($tipeproduk->result() as $r): if ($now == $r->m_type_id) {
                                                        continue;
                                                    }?>
                                                        <option value="<?php echo $r->m_type_id ?>"><?php echo $r->m_type_nama; ?></option>
                                                    <?php $now = $r->m_type_id ?>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pilih Transmisi</td>
                                        <td width="10%"></td>
                                        <td>
                                            <select id="transmisi">
                                                
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td width="10%"></td>
                                        <td>
                                            Rp. &nbsp; <input id="harga" type="text" readonly /><input type="hidden" id="hargahide" /> &nbsp;&nbsp;&nbsp;<p id="mindp"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Input DP</td>
                                        <td width="10%"></td>
                                        <td>
                                            Rp. &nbsp;<input id="dpcust" type="text" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cicilan</td>
                                        <td width="10%"></td>
                                        <td>
                                            <select id="cicilan">
                                                <option value="0"></option>
                                                <?php if ($cicilan->num_rows > 0): ?>
                                                    <?php foreach ($cicilan->result() as $r): ?>
                                                        <option value="<?php echo $r->t_bunga_id ?>"><?php echo $r->t_bunga_keterangan ?></option>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td colspan="3" align="center">
                                        <button id="btnhitung">Hitung</button>
                                    </td>
                                    </tr>
                                </table><br/>
                                <table>
                                    <tr>
                                    <td>Cicilan Per bulan anda adalah sebesar
                                    </td>
                                    <td width="10%"></td>
                                    <td>Rp. <span id="hasilcicilan"></span> (Kurang Lebih)</td>
                                    </tr>
                                </table>
                            </div>                           
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- <div class="bottom-prdt">
                <div class="btm-grid-sec">
                    <div class="col-md-2 btm-grid">
                        <a href="product.html">
                            <img src="images/p3.jpg" alt=""/>
                            <h4>Product#1</h4>
                            <span>$1200</span></a>
                    </div>
                    <div class="col-md-2 btm-grid">
                        <a href="product.html">
                            <img src="images/p10.jpg" alt=""/>
                            <h4>Product#1</h4>
                            <span>$700</span></a>
                    </div>
                    <div class="col-md-2 btm-grid">
                        <a href="product.html">
                            <img src="images/p5.jpg" alt=""/>
                            <h4>Product#1</h4>
                            <span>$1300</span></a>
                    </div>
                    <div class="col-md-2 btm-grid">
                        <a href="product.html">
                            <img src="images/p4.jpg" alt=""/>
                            <h4>Product#1</h4>
                            <span>$9000</span></a>
                    </div>
                    <div class="col-md-2 btm-grid">
                        <a href="product.html">
                            <img src="images/p2.jpg" alt=""/>
                            <h4>Product#1</h4>
                            <span>$450</span></a>
                    </div>
                    <div class="clearfix"></div>
                </div>         
            </div> -->
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#tipeproduk").change(function(event) {
        var idtipe = $(this).val();
        $("#transmisi").html('<option value="0"></option>');
        $("#mindp").html('');
        if (typeof tipeproduk[idtipe] === 'undefined') {
            
        }else{
            for(var i = 0;i<tipeproduk[idtipe].length;i++){
                var isi = tipeproduk[idtipe][i].split('-');
                $("#transmisi").append('<option value="'+isi[0]+'">'+isi[1]+'</option>');
            }
        }

    });

    $("#transmisi").change(function(event) {
        var idtipe = $("#tipeproduk").val();
        var idtrans = $(this).val();
        if (typeof harga[idtipe+','+idtrans]['hargatampil'] === 'undefined') {
            
        }else{
            $("#harga").val(harga[idtipe+','+idtrans]['hargatampil']);
            $("#hargahide").val(harga[idtipe+','+idtrans]['hargaasli']);
            var hargaasli = harga[idtipe+','+idtrans]['hargaasli'];
            var besardp = (parseInt(dp) * parseInt(hargaasli)) / 100;
            // console.info(besardp);
            $("#mindp").html('Minimal DP sebesar Rp. ' + besardp.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
        }
    });

    $("#dpcust").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
             // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $("#btnhitung").click(function(event) {
        event.preventDefault();
        var hargaasli = $("#hargahide").val();
        var dpcust = $("#dpcust").val();
        var selectcicil = $("#cicilan").val();
        if (!hargaasli) {alert("Anda belum memilih harga !");return false;}else{
            if (!dpcust) {alert("Anda belum menentukan besar uang muka !");return false;}else{
                if (selectcicil == '0') {alert("Anda belum memilih jumlah cicilan !");return false;};
            }
        };
        var jmlbulan = cicilan[selectcicil]['cicilan'];
        var jmlbunga = cicilan[selectcicil]['prosentase'];
        var besardp = (parseInt(dp) * parseInt(hargaasli)) / 100;
        // console.info(hargaasli);
        // console.info(besardp);
        if (besardp > parseInt(dpcust)) {alert("Uang muka yang anda masukkan kurang dari minimal yang ditentukan !");return false;};
        var sisabayar = parseInt(hargaasli) - parseInt(dpcust);
        // console.info(sisabayar);
        var perbulan = sisabayar / parseInt(jmlbulan);
        // console.info(perbulan);
        var ygharusdibayar = Math.round(((perbulan * parseInt(jmlbunga)) / 100) + perbulan);
        // console.info(ygharusdibayar);
        $("#hasilcicilan").text(ygharusdibayar.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
    });
</script>
<?php endif ?>
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
