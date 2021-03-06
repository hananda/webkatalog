<link href="<?php echo base_url(); ?>assets/css/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/js/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrapPager.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/textarea/autosize.min.js"></script>
<div class="page-title">
    <div class="title_left">
        <h3>
            Master
            <small>
                produk
            </small>
        </h3>
    </div>

    <!-- <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div> -->
</div>
<div class="clearfix"></div>

<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form produk</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><!-- <i class="fa fa-wrench"></i> --></a>
                    </li>
                    <li><a href="#"><!-- <i class="fa fa-close"></i> --></a>
                    </li>
                    <li><a class="collapse-link" id="formcollapse"></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left" id="formproduk" >
                    <input type="hidden" name="idproduk" id="idproduk" />
                    <div class="form-group">
                        <label for="namaproduk" class="control-label col-md-3 col-sm-3 col-xs-12">Nama produk
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control col-md-7 col-xs-12" required="required" name="namaproduk" id="namaproduk">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kategori" class="control-label col-md-3 col-sm-3 col-xs-12">kategori produk
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="kategori" id="kategori">
                                <option value="">Pilih Kategori</option>
                                <?php if ($categories->num_rows > 0): ?>
                                    <?php foreach ($categories->result() as $r): ?>
                                        <option value="<?php echo $r->m_categories_id; ?>"><?php echo $r->m_categories_nama; ?></option>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi produk</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;" name="desc" id="desc">

                            </textarea>
                        </div>
                    </div>
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-success" type="submit">Simpan</button>
                            <button class="btn btn-primary" id="btnbatal">Batal</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <br />

</div>

<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tabel Foto produk</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><!-- <i class="fa fa-wrench"></i> --></a>
                    </li>
                    <!-- <li><a id="btnadd"><i class="fa fa-plus"></i></a> -->
                    </li>
                    <li><a class="collapse-link" id="formcollapse2"></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left" enctype="multipart/form-data" id="formupload" >
                    <input type="hidden" name="idproduk" id="idproduk2" value="1" />
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" class="form-control col-md-7 col-xs-12" name="fotoproduk">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="progress">
                                <div data-transitiongoal="100" class="progress-bar progress-bar-info" style="width: 0%;" aria-valuenow="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div>
                    </div>

                </form>
                <table id="tablefoto" class="table table-striped responsive-utilities jambo_table">
                    <thead>
                        <tr class="headings">
                            <th></th>
                            <th>
                                No
                            </th>
                            <th>Foto produk </th>
                            <th class=" no-link last"><span class="nobr">Action</span>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>

                </table>
                <button class="btn btn-primary" id="btnbatal2">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tabel Harga produk</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><!-- <i class="fa fa-wrench"></i> --></a>
                    </li>
                    <li>
                    </li>
                    <li><a class="collapse-link" id="formcollapse3"></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left" id="formharga" >
                    <input type="hidden" name="idproduk" id="idproduk3" />
                    <input type="hidden" name="idharga" id="idharga" />
                    <div class="form-group">
                        <label for="tipe" class="control-label col-md-3 col-sm-3 col-xs-12">Tipe
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="tipe" id="tipe" required>
                                <option value="">Pilih Tipe</option>
                                <?php if ($type->num_rows > 0): ?>
                                    <?php foreach ($type->result() as $r): ?>
                                        <option value="<?php echo $r->m_type_id; ?>"><?php echo $r->m_type_nama; ?></option>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="transmisi" class="control-label col-md-3 col-sm-3 col-xs-12">Transmisi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="transmisi" id="transmisi" required>
                                <option value="">Pilih Transmisi</option>
                                <?php if ($transmisi->num_rows > 0): ?>
                                    <?php foreach ($transmisi->result() as $r): ?>
                                        <option value="<?php echo $r->m_transmisi_id; ?>"><?php echo $r->m_transmisi_nama; ?></option>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="harga" class="control-label col-md-3 col-sm-3 col-xs-12">Harga                       </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control col-md-7 col-xs-12" required name="harga" id="harga">
                        </div>
                    </div>
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-success" type="submit">Simpan</button>
                            <button class="btn btn-primary" id="btnclearharga">Clear</button>
                        </div>
                    </div>

                </form>
                <table id="tabelharga" class="table table-striped responsive-utilities jambo_table">
                    <thead>
                        <tr class="headings">
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>
                                No
                            </th>
                            <th>Tipe </th>
                            <th>Transmisi </th>
                            <th>Harga </th>
                            <th class=" no-link last"><span class="nobr">Action</span>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>

                </table>
                <button class="btn btn-success" id="btntutupharga">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tabel produk</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><!-- <i class="fa fa-wrench"></i> --></a>
                    </li>
                    <li><a id="btnadd"><i class="fa fa-plus"></i></a>
                    </li>
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="tabelproduk" class="table table-striped responsive-utilities jambo_table">
                    <thead>
                        <tr class="headings">
                            <th></th>
                            <th></th>
                            <th>
                                No
                            </th>
                            <th>Nama produk </th>
                            <th>Kategori produk </th>
                            <th class=" no-link last"><span class="nobr">Action</span>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        
        autosize($('.resizable_textarea'));
        var idproduk = 0;
        var jendela = false;
        var jendela2 = false;
        var jendela3 = false;
        $("#formcollapse").click();
        $("#formcollapse2").click();
        $("#formcollapse3").click();
        $('.progress-bar').hide();

        $("#formproduk").submit(function(e) {
            e.preventDefault();
            var data = $(this).serialize();

            $.ajax({
                url: '<?php echo base_url(); ?>produk/index/update',
                type: 'POST',
                dataType: 'json',
                data: data,
            })
            .done(function(response) {
                if(response.status){
                    NotifikasiToast({
                        type : 'success', // ini tipe notifikasi success,warning,info,error
                        msg : response.message, //ini isi pesan
                        title : '', //ini judul pesan
                    });
                    $("#btnbatal").click();
                    table.ajax.reload();
                }
                else{
                    NotifikasiToast({
                        type : 'error', // ini tipe notifikasi success,warning,info,error
                        msg : response.message, //ini isi pesan
                        title : '', //ini judul pesan
                    });
                }
            })
            .fail(function() {
                NotifikasiToast({
                    type : 'error', // ini tipe notifikasi success,warning,info,error
                    msg : 'Network Error', //ini isi pesan
                    title : '', //ini judul pesan
                });
            });
            

            return false;
        });

        $("#btnbatal").click(function(e) {
            e.preventDefault();
            clear();
            if (jendela) {
                $("#formcollapse").click();
                jendela = !jendela;
            };
        });

        $("#btnclearharga").click(function(e) {
            e.preventDefault();
            clear1();
        });

        $("#btnbatal2").click(function(e) {
            e.preventDefault();
            if (jendela2) {
                $("#formcollapse2").click();
                jendela2 = !jendela2;
            };
        });

        $("#btntutupharga").click(function(e) {
            e.preventDefault();
            if (jendela3) {
                $("#formcollapse3").click();
                jendela3 = !jendela3;
            };
        });

        $("#btnadd").click(function(e) {
            e.preventDefault();
            clear();
            if (!jendela) {
                $("#formcollapse").click();
                jendela = !jendela;
            };
        });

        var table = $('#tabelproduk').DataTable({
          // "order": [[ 4, "asc" ]],
          "columns": [
            {"visible" : false,"orderable":false },
            {"visible" : false,"orderable":false },
            {"orderable":false },
            {"orderable":false },
            {"orderable":false },
            {"orderable":false}
          ],
          pagingType: "bootstrapPager",
          "sDom": "Rfrtlip",
          pagerSettings: {
              searchOnEnter: true,
              language: "Halaman ~ Dari ~"
          },
          processing: true,
          serverSide: true,
          ajax: {
            url: "<?php echo base_url(); ?>produk/index/get",
            type: "POST",
            data: function (d) {
                
            }
          },
          paginate: true
        });

        var tablefoto = $('#tablefoto').DataTable({
          // "order": [[ 4, "asc" ]],
          "columns": [
            {"visible" : false,"orderable":false },
            {"orderable":false },
            {"orderable":false },
            {"orderable":false }
          ],
          pagingType: "bootstrapPager",
          "sDom": "Rrtlip",
          pagerSettings: {
              searchOnEnter: true,
              language: "Halaman ~ Dari ~"
          },
          processing: true,
          serverSide: true,
          ajax: {
            url: "<?php echo base_url(); ?>produk/index/getFoto",
            type: "POST",
            data: function (d) {
                d.idproduk = idproduk;
            }
          },
          paginate: true
        });

        var tableharga = $('#tabelharga').DataTable({
          // "order": [[ 4, "asc" ]],
          "columns": [
            {"visible" : false,"orderable":false },
            {"visible" : false,"orderable":false },
            {"visible" : false,"orderable":false },
            {"orderable":false },
            {"orderable":false },
            {"orderable":false },
            {"orderable":false },
            {"orderable":false }
          ],
          pagingType: "bootstrapPager",
          "sDom": "Rrtlip",
          pagerSettings: {
              searchOnEnter: true,
              language: "Halaman ~ Dari ~"
          },
          processing: true,
          serverSide: true,
          ajax: {
            url: "<?php echo base_url(); ?>produk/index/getHarga",
            type: "POST",
            data: function (d) {
                d.idproduk = idproduk;
            }
          },
          paginate: true
        });

        table.on('xhr.dt', function (e, settings, json) {
              setTimeout(function () {
                  initEvent();
              }, 500);
        });

        tablefoto.on('xhr.dt', function (e, settings, json) {
              setTimeout(function () {
                  initEvent2();
              }, 500);
        });

        tableharga.on('xhr.dt', function (e, settings, json) {
              setTimeout(function () {
                  initEvent3();
              }, 500);
        });

        function initEvent() {
            $(".btndelete").click(function (e) {
                var sure = confirm("Apakah Anda yakin?");
                e.preventDefault();
                var parent = $(this).parent().parent();
                var dataedit = table.row( parent ).data();
                var id = dataedit[0];
                var aktif = $(this).data().aktif;
                if (sure) {
                    $.post("<?php echo base_url(); ?>produk/index/delete", {'idproduk': id,aktif:aktif}, function (response) {
                        if(response.status){
                            NotifikasiToast({
                                type : 'success', // ini tipe notifikasi success,warning,info,error
                                msg : response.message, //ini isi pesan
                                title : '', //ini judul pesan
                            });
                            table.ajax.reload();
                        }
                        else{
                            NotifikasiToast({
                                type : 'error', // ini tipe notifikasi success,warning,info,error
                                msg : response.message, //ini isi pesan
                                title : '', //ini judul pesan
                            });
                        }
                    });
                };
            });

            $(".btnedit").click(function (e) {
                e.preventDefault();
                var parent = $(this).parent().parent();
                var dataedit = table.row( parent ).data();
                

                $("#idproduk").val(dataedit[0]);
                $("#kategori").val(dataedit[1]);
                $("#namaproduk").val(dataedit[3]);
                if (!jendela) {
                    $("#formcollapse").click();
                    jendela = !jendela;
                };
            });

            $(".btnupload").click(function(e) {
                e.preventDefault();
                var id = $(this).data().id;
                idproduk = id;
                $("#idproduk2").val(id);
                tablefoto.ajax.reload();
                if (!jendela2) {
                    $("#formcollapse2").click();
                    jendela2 = !jendela2;
                };
            });

            $(".btnharga").click(function(e) {
                e.preventDefault();
                var id = $(this).data().id;
                idproduk = id;
                $("#idproduk3").val(id);
                tableharga.ajax.reload();
                if (!jendela3) {
                    $("#formcollapse3").click();
                    jendela3 = !jendela3;
                };
            });
        }

        function initEvent2() {
            $(".btndeletefoto").click(function (e) {
                var sure = confirm("Apakah Anda yakin?");
                e.preventDefault();
                var parent = $(this).parent().parent();
                var dataedit = tablefoto.row( parent ).data();
                var id = dataedit[0];
                if (sure) {
                    $.post("<?php echo base_url(); ?>produk/index/deletefoto", {'idfoto': id,'idproduk':idproduk}, function (response) {
                        if(response.status){
                            NotifikasiToast({
                                type : 'success', // ini tipe notifikasi success,warning,info,error
                                msg : response.message, //ini isi pesan
                                title : '', //ini judul pesan
                            });
                            tablefoto.ajax.reload();
                        }
                        else{
                            NotifikasiToast({
                                type : 'error', // ini tipe notifikasi success,warning,info,error
                                msg : response.message, //ini isi pesan
                                title : '', //ini judul pesan
                            });
                        }
                    });
                };
            });

            $(".btnaktif").click(function (e) {
                var sure = confirm("Apakah Anda yakin?");
                e.preventDefault();
                var parent = $(this).parent().parent();
                var dataedit = tablefoto.row( parent ).data();
                var id = dataedit[0];
                var aktif = $(this).data().aktif;
                if (sure) {
                    $.post("<?php echo base_url(); ?>produk/index/setmainfoto", {'idfoto': id,aktif:aktif,idproduk:idproduk}, function (response) {
                        if(response.status){
                            NotifikasiToast({
                                type : 'success', // ini tipe notifikasi success,warning,info,error
                                msg : response.message, //ini isi pesan
                                title : '', //ini judul pesan
                            });
                            tablefoto.ajax.reload();
                        }
                        else{
                            NotifikasiToast({
                                type : 'error', // ini tipe notifikasi success,warning,info,error
                                msg : response.message, //ini isi pesan
                                title : '', //ini judul pesan
                            });
                        }
                    });
                };
            });
        }

        function initEvent3() {
            $(".btndeleteharga").click(function (e) {
                var sure = confirm("Apakah Anda yakin?");
                e.preventDefault();
                var parent = $(this).parent().parent();
                var dataedit = tableharga.row( parent ).data();
                var id = dataedit[0];
                if (sure) {
                    $.post("<?php echo base_url(); ?>produk/index/deleteharga", {'idharga': id}, function (response) {
                        if(response.status){
                            NotifikasiToast({
                                type : 'success', // ini tipe notifikasi success,warning,info,error
                                msg : response.message, //ini isi pesan
                                title : '', //ini judul pesan
                            });
                            tableharga.ajax.reload();
                        }
                        else{
                            NotifikasiToast({
                                type : 'error', // ini tipe notifikasi success,warning,info,error
                                msg : response.message, //ini isi pesan
                                title : '', //ini judul pesan
                            });
                        }
                    });
                };
            });

            $(".btnaktifharga").click(function (e) {
                var sure = confirm("Apakah Anda yakin?");
                e.preventDefault();
                var parent = $(this).parent().parent();
                var dataedit = tableharga.row( parent ).data();
                var id = dataedit[0];
                var aktif = $(this).data().aktif;
                if (sure) {
                    $.post("<?php echo base_url(); ?>produk/index/setmainharga", {'idharga': id,aktif:aktif,idproduk:idproduk}, function (response) {
                        if(response.status){
                            NotifikasiToast({
                                type : 'success', // ini tipe notifikasi success,warning,info,error
                                msg : response.message, //ini isi pesan
                                title : '', //ini judul pesan
                            });
                            tableharga.ajax.reload();
                        }
                        else{
                            NotifikasiToast({
                                type : 'error', // ini tipe notifikasi success,warning,info,error
                                msg : response.message, //ini isi pesan
                                title : '', //ini judul pesan
                            });
                        }
                    });
                };
            });

            $(".btneditharga").click(function (e) {
                e.preventDefault();
                var parent = $(this).parent().parent();
                var dataedit = tableharga.row( parent ).data();
                

                $("#idharga").val(dataedit[0]);
                $("#tipe").val(dataedit[1]);
                $("#transmisi").val(dataedit[2]);
                $("#harga").val(dataedit[6]);
            });
        }

        function clear () {
            $("#idproduk").val("");
            $("#namaproduk").val("");
            $("#kategori").val("");
            $("#price").val("");
            $("#price2").val("");
            $("#desc").val("");
            $("#disc").val("");
        }

        function clear1 () {
            $("#idharga").val("");
            $("#tipe").val("");
            $("#transmisi").val("");
            $("#harga").val("");
        }

        $("#formupload").submit(function(e) {
            e.preventDefault();
            var formdata = new FormData($(this)[0]);
            $.ajax({
                url: '<?php echo base_url(); ?>produk/index/upload',
                type: 'POST',
                dataType: 'json',
                data: formdata,
                cache: false,
                contentType: false,
                xhr: function() {  // Custom XMLHttpRequest
                    var myXhr = $.ajaxSettings.xhr();
                    if(myXhr.upload){ // Check if upload property exists
                        myXhr.upload.addEventListener('progress',progressHandlingFunction, false); // For handling the progress of the upload
                    }
                    return myXhr;
                },
                beforeSend: function(){
                    $('.progress-bar').show();
                },
                processData: false
            })
            .done(function(response) {
                if (response.status) {
                    NotifikasiToast({
                        type : 'success', // ini tipe notifikasi success,warning,info,error
                        msg : response.message, //ini isi pesan
                        title : '', //ini judul pesan
                    });
                    tablefoto.ajax.reload();
                }else{
                     NotifikasiToast({
                        type : 'error', // ini tipe notifikasi success,warning,info,error
                        msg : response.message.error, //ini isi pesan
                        title : '', //ini judul pesan
                    });
                }
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
                $('.progress-bar').hide();
            });
            
            return false;
        });

        function progressHandlingFunction(e){
            if(e.lengthComputable){
                var max = e.total;
                var current = e.loaded;
                var Percentage = (current * 100) / max;
                $('.progress-bar').attr("style", "width:" + Math.round(Percentage) + "%;\"");
            }
        }

        $("#formharga").submit(function(e) {
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                url: '<?php echo base_url(); ?>produk/index/save_harga',
                type: 'POST',
                dataType: 'json',
                data: data
            })
            .done(function(response) {
                if (response.status) {
                    NotifikasiToast({
                        type : 'success', // ini tipe notifikasi success,warning,info,error
                        msg : response.message, //ini isi pesan
                        title : '', //ini judul pesan
                    });
                    $("#btnclearharga").click();
                    tableharga.ajax.reload();
                }else{
                     NotifikasiToast({
                        type : 'error', // ini tipe notifikasi success,warning,info,error
                        msg : response.message, //ini isi pesan
                        title : '', //ini judul pesan
                    });
                }
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            
            return false;
        });

    });
</script>