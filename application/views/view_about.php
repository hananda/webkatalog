<link href="<?php echo base_url(); ?>assets/css/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/js/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrapPager.js" type="text/javascript"></script>
<div class="page-title">
    <div class="title_left">
        <h3>
            Tentang
            <small>
                Perusahaan
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
                <h2>Form Tentang Perusahaan</h2>
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
                <form class="form-horizontal form-label-left" data-parsley-validate="" id="formabout" enctype="multipart/form-data" novalidate="">
                    <input type="hidden" name="idabout" id="idabout" />
                    
                    <textarea id="descr" style="display:none;"></textarea>
                    <br />

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-success" type="submit">Simpan</button>
                            <!-- <button class="btn btn-primary" id="btnbatal">Batal</button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <br />

</div>

<script type="text/javascript">
    CKEDITOR.disableAutoInline = true;
    var roxyFileman = '<?php echo base_url(); ?>assets/fileman/index.html';

    $(document).ready(function () {
        // var jendela = false;
        // $("#formcollapse").click();

        $( '#descr' ).ckeditor({
            // "filebrowserImageUploadUrl": "/path_to/ckeditor/plugins/imgupload.php"
            filebrowserBrowseUrl:roxyFileman,
            filebrowserImageBrowseUrl:roxyFileman+'?type=image',
            removeDialogTabs: 'link:upload;image:upload'
        }); // Use CKEDITOR.replace() if element is <textarea>.


        $("#formabout").submit(function(e) {
            e.preventDefault();
            var data = $(this).serialize();
            var isi = CKEDITOR.instances.descr.getData();
            data += '&isi='+escape(isi);
            $.ajax({
                url: '<?php echo base_url(); ?>about/index/update',
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

        function clear () {
            CKEDITOR.instances.descr.setData('');
        }

        function loaddata(){
            $.getJSON('<?php echo base_url() ?>about/index/get', {}, function(json, textStatus) {
                    console.info(json);
                    CKEDITOR.instances.descr.setData(json.m_about_desc);
                    $("#idabout").val(json.m_about_id);
            });
        }

        loaddata();
    });
</script>