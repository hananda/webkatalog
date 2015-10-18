<div class="row">
	<div class="col-md-6 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Ubah Bunga Persentase</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form name="bunga" id="formbunga">
                <div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    Jenis
                </div>
				<div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    Persentase Bunga (%)
                </div>
				<div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    Cicilan (x)
                </div>
				<div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    DP
                </div>
				<div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <input type="text" name="bunga_1" value="<?php echo $bunga->row()->t_bunga_prosentase ?>" class="form-control" placeholder="">
                </div>
				<div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <input type="text" class="form-control" placeholder="" disabled="" style="display:none;">
                </div>
                </div>
                <div class="divider-dashed"></div>
                <div class="row">
                <?php foreach ($bunga->result() as $r): ?>
                	<?php if ($r->t_bunga_keterangan == 'DP'): ?>
                		<?php continue; ?>
                	<?php endif ?>
					<div class="col-md-4 col-sm-12 col-xs-12 form-group">
	                    <?php echo $r->t_bunga_keterangan ?>
	                </div>
					<div class="col-md-4 col-sm-12 col-xs-12 form-group">
	                    <input type="text" name="bunga_<?php echo $r->t_bunga_id; ?>" value="<?php echo $r->t_bunga_prosentase ?>" required class="form-control" placeholder="">
	                </div>
					<div class="col-md-4 col-sm-12 col-xs-12 form-group">
	                    <input type="text" name="cicilan_<?php echo $r->t_bunga_id; ?>" value="<?php echo $r->t_bunga_cicilan ?>" required class="form-control" placeholder="">
	                </div>
                <?php endforeach ?>
                </div>
                <div class="row">
                <button class="btn btn-success" id="btnsimpan" type="submit">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#formbunga").submit(function(event) {
        var data = $(this).serialize();
        event.preventDefault();
        $.ajax({
            url: '<?php echo base_url(); ?>bunga/index/save',
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
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        
        return false;
    });
</script>