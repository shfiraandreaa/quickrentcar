$( document ).ready(function() {

	$('.isiMU').fadeIn(1000);
	$('.gmbMU').fadeIn(1000);
	
    $('.have-profil').click(function(evt){
        evt.preventDefault();

        $('.isiMU , .gmbMU').fadeToggle();
        $('.isi-profil').delay(500).slideToggle();
    });

    $('.x').click(function(){
		// $('.isi-profil').hide();
		// $('.isiMU , .gmbMU').fadeToggle();
		location.reload();
    });

    $('.have-mobil').click(function(evt){
        evt.preventDefault();
			//alert('berhasil diklik');
        var alamatTujuan = "daftarMobil.php";
		
		$.get(alamatTujuan, null, function(response){
			$('.konten').html(response);
			//alert('sukses');
		});
		
    });
	
	$('body').on('click', '#avanza-car', function(){
		sembunyikan();
		
		$('#mobil-avanza').fadeIn();
		$('#mobil-avanza').attr('class','aktif');
		
		
	});

	$('body').on('click', '#apv-car', function(){
		sembunyikan();
		
		$('#mobil-apv').fadeIn();
		$('#mobil-apv').attr('class','aktif');
		
		
		
	});

	$('body').on('click', '#fortuner-car', function(){
		sembunyikan();
		
		$('#mobil-fortuner').fadeIn();
		$('#mobil-fortuner').attr('class','aktif');
		
	});

	$('body').on('click', '#innova-car', function(){
		sembunyikan();
		
		$('#mobil-innova').fadeIn();
		$('#mobil-innova').attr('class','aktif');
		
	});

	$('body').on('click', '#hiace-car', function(){
		sembunyikan();
		
		$('#mobil-hiace').fadeIn();
		$('#mobil-hiace').attr('class','aktif');
		
	});


	$('body').on('click', '.x-mobil', function(){
		location.reload();
	});

	$('.have-paket').click(function(evt){
        evt.preventDefault();
			//alert('berhasil diklik');
        var alamatTujuan = "daftarPaket.php";
		
		$.get(alamatTujuan, null, function(response){
			$('.konten').html(response);
			//alert('sukses');
		});
		
	});
	

	$('body').on('click', '.x-Paket', function(){
		location.reload();
	});

	$('.have-kontak').click(function(evt){
		evt.preventDefault();
		
		$('.isiMU , .gmbMU').fadeToggle();
        $('.isi-kontak').slideToggle();
	});
	
	$('.x-kontak').click(function(){
		location.reload();
	});
	
	$("#btn-kontak").click(function(evt){
		evt.preventDefault();
		
		$('.isiMU , .gmbMU').fadeToggle();
        $('.isi-kontak').slideToggle();
	});
	
	$('.have-login').click(function(evt){
		evt.preventDefault();
		
		var alamatTujuan = "login.php";
		
		$.get(alamatTujuan, null, function(response){
			$('.konten').html(response);
			
		});
	});
	
	$('body').on('click','.x-login', function(){
		//ini fungsinya merefresh
		location.reload();
	});

});

function sembunyikan(){
	$('.aktif').attr('class','non-aktif');
	$('.non-aktif').fadeOut();
}