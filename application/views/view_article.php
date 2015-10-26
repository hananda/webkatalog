<link href="<?php echo base_url(); ?>assets/css/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/js/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrapPager.js" type="text/javascript"></script>
<div class="page-title">
    <div class="title_left">
        <h3>
            Artikel
            <small>
                
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
                <h2>Form Artikel</h2>
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
                <form class="form-horizontal form-label-left" data-parsley-validate="" id="formarticle" enctype="multipart/form-data" novalidate="">
                    <input type="hidden" name="idarticle" id="idarticle" />
                    <div class="form-group">
                        <label for="judulartikel" class="control-label col-md-3 col-sm-3 col-xs-12">Judul Artikel
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control col-md-7 col-xs-12" required="required" name="judulartikel" id="judulartikel">
                        </div>
                    </div>
                    <textarea id="descr" style="display:none;"></textarea>
                    <br />

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
                <h2>Tabel Artikel</h2>
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
                <table id="tabelartikel" class="table table-striped responsive-utilities jambo_table">
                    <thead>
                        <tr class="headings">
                            <th></th>
                            <th>
                                No
                            </th>
                            <th>Judul Artikel </th>
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
    CKEDITOR.disableAutoInline = true;
    var roxyFileman = '<?php echo base_url(); ?>assets/fileman/index.html';
    var jendela = false;

    $(document).ready(function () {
        // var jendela = false;
        // $("#formcollapse").click();
        $("#formcollapse").click();

        $( '#descr' ).ckeditor({
            // "filebrowserImageUploadUrl": "/path_to/ckeditor/plugins/imgupload.php"
            filebrowserBrowseUrl:roxyFileman,
            filebrowserImageBrowseUrl:roxyFileman+'?type=image',
            removeDialogTabs: 'link:upload;image:upload'
        }); // Use CKEDITOR.replace() if element is <textarea>.


        $("#formarticle").submit(function(e) {
            e.preventDefault();
            var data = $(this).serialize();
            var isi = CKEDITOR.instances.descr.getData();
            data += '&isi='+escape(isi);
            $.ajax({
                url: '<?php echo base_url(); ?>article/index/update',
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

        $("#btnadd").click(function(e) {
            e.preventDefault();
            clear();
            if (!jendela) {
                $("#formcollapse").click();
                jendela = !jendela;
            };
        });

        function clear () {
            CKEDITOR.instances.descr.setData('');
            $("#idarticle").val("");
            $("#judulartikel").val("");
        }

        var table = $('#tabelartikel').DataTable({
          // "order": [[ 4, "asc" ]],
          "columns": [
            {"visible" : false,"orderable":false },
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
            url: "<?php echo base_url(); ?>article/index/get",
            type: "POST",
            data: function (d) {
                
            }
          },
          paginate: true
      });

        table.on('xhr.dt', function (e, settings, json) {
              setTimeout(function () {
                  initEvent();
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
                    $.post("<?php echo base_url(); ?>article/index/delete", {'idarticle': id,aktif:aktif}, function (response) {
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
                

                $("#idarticle").val(dataedit[0]);
                $("#judulartikel").val(dataedit[2]);
                loaddesc(dataedit[0]);
                if (!jendela) {
                    $("#formcollapse").click();
                    jendela = !jendela;
                };
            });
        }

        function loaddesc (idarticle) {
            $.post('<?php echo base_url(); ?>article/index/getdesc', {idarticle: idarticle}, function(json, textStatus) {
                    CKEDITOR.instances.descr.setData(json.m_article_desc);
            });
        }
    });
</script>