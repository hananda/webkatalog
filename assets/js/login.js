$("#loginform").submit(function(e) {
	
	var data = $(this).serialize();

	$.ajax({
		url: global.baseUrl+'login/validateLogin',
		type: 'POST',
		dataType: 'json',
		data: data,
	})
	.done(function(response) {
		if(response.status){
			NotifikasiToast({
				type : 'success', // ini tipe notifikasi success,warning,info,error
    			msg : 'Login Berhasil', //ini isi pesan
    			title : '', //ini judul pesan
			});
			window.location.replace(response.url);
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