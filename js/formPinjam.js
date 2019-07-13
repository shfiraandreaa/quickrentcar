$(document).ready(function(){
	$('body').on('change','#selectMbl',function(e){
		e.preventDefault();
		var selected = $(this).children('option:selected').val();
		//console.log(selected);
		$.ajax({
			type : 'post',
			url  : '/controller/getPaketHarga.php',
			data : {selectMbl : selected},
			success : function(data){
				console.log(data);
				var getData = JSON.parse(data);
				var opsiAll = "";
				$.each(getData,function(key,value){
					var paket = value.pilihan_paket;
					//console.log(paket);
					var opsiBaru = "<option value='paket'>" + paket+"</option>";
                    opsiAll += opsiBaru;
				});
				$('#pilPaket').html(opsiAll);
			}
		});
	});
});