global = {
	baseUrl : ''
}

function getBase() { 
   var metas = document.getElementsByTagName('meta'); 

   for (i=0; i<metas.length; i++) { 
      if (metas[i].getAttribute("name") == "base") { 
         global.baseUrl = metas[i].getAttribute("content"); 
      } 
   } 
}

getBase(); 

// cara menampilkan notifikasi, panggil fungsi :
//   NotifikasiToast({
//     type : '', // ini tipe notifikasi success,warning,info,error
//     msg : '', //ini isi pesan
//     title : '', //ini judul pesan
//   });
var NotifikasiToast = function (data) {
	if(!data)
	  return;
	var type,msg,title;
	if(!data.type){type = 'success';}else{type = data.type;}
	if(!data.msg){msg = '';}else{msg = data.msg;}
	if(!data.title){title = '';}else{title = data.title;}

	toastr.options = {
	  closeButton: true,
	  debug: false,
	  positionClass: "toast-top-full-width",
	  onclick: null,
	  showDuration: "1000",
	  hideDuration: "1000",
	  timeOut: "3000",
	  extendedTimeOut: "1000",
	  showEasing: "swing",
	  hideEasing: "linear",
	  showMethod: "fadeIn",
	  hideMethod: "fadeOut"
	}

	var $toast = toastr[type](msg, title);
}