<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Ganti Password</h2>
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
                <form class="form-horizontal form-label-left" id="formchangepasswd">
                    <input type="hidden" name="iduser" value="<?php echo $this->session->userdata('user_id'); ?>" id="idinfoperusahaan" />
                    <div class="form-group">
                        <label for="passlama" class="control-label col-md-3 col-sm-3 col-xs-12">Password lama
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="password" class="form-control col-md-7 col-xs-12" required name="passlama" id="passlama"><ul class="parsley-errors-list"></ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="passbaru" class="control-label col-md-3 col-sm-3 col-xs-12">Password Baru
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="password" class="form-control col-md-7 col-xs-12" required name="passbaru" id="passbaru"><ul class="parsley-errors-list"></ul>
                        </div>
                    </div>
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <br />

</div>
<script type="text/javascript">
    $("#formchangepasswd").submit(function(event) {
        event.preventDefault();
        var data = $(this).serialize();

        $.ajax({
            url: '<?php echo base_url(); ?>login/savepass',
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
</script>