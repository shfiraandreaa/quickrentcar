var idDapat=0;
var namaMobil = "";

$( document ).ready(function() {
	
	$('#ketersediaan').click(function(evt){
		evt.preventDefault();
		
		var namaFile = "viewDataMobil.php";
			//alert('berhasil');
		$.get(namaFile,function(response){
			$('.wadah-isi').html(response);
		});
	});
	
	$('#form_peminjam').click(function(evt){
		evt.preventDefault();
		
		var namaFile = "formPeminjam.php";
		
		$.get(namaFile,function(response){
			$('.wadah-isi').html(response);
		});
	});
	
	$('#tambah_mobil').click(function(evt){
		evt.preventDefault();
		
		var namaFile = "formMobil.php";
		
		$.get(namaFile,function(response){
			$('.wadah-isi').html(response);
		});
	});
	
	$('#tambah_paket').click(function(evt){
		evt.preventDefault();
		
		var namaFile = "formPaket.php";
		
		$.get(namaFile,function(response){
			$('.wadah-isi').html(response);
		});
	});
	
	$('#data_peminjam').click(function(evt){
		evt.preventDefault();
		
		var namaFile = "viewDataPeminjam.php";
		
		$.get(namaFile,function(response){
			$('.wadah-isi').html(response);
		});
	});
	
	$('body').on('submit', '#isian_mobil', function(evt){
		evt.preventDefault();
			//alert('sukses');
		var alamatTujuan = "controller/simpanMobil.php";
		var nama = $('#nama_mbl').val();
		var tahun = $('#tahun_mbl').val();
		var warna = $('#warna_mbl').val();
		var kapasitas = $('#jumlah_pnm').val();
		var harga = $('#harga').val();
		
		var data = {namaMbl: nama, tahunMbl: tahun, warnaMbl: warna, kapasitas: kapasitas, hargaSewa: harga};
		
		$.post(alamatTujuan, data, function(tanggapan){
			if(tanggapan=='Data Tersimpan'){
				alert("Berhasil Disimpan");
				
			}else{
				alert("Gagal Disimpan");
			}
		});
		
	});
	
	$('body').on('submit', '#isian-pinjam', function(evt){
		evt.preventDefault();
			//alert('sukses');
		var alamatTujuan = "controller/simpanPeminjam.php";
		var nama = $('#namaPeminjam').val();
		var alamatPjm = $('#alamatPjm').val();
		var tlp = $('#tlpPjm').val();
		var mobilDipesan = $('#selectMbl').val();
		var tglPinjam = $('#tglPjm').val();
		var banyakHari = $('#jmlHari').val();
		var pilihanPaket = $('#pilPaket').val();
		var harga = $('#harga').val();
		
		var data = {namaPjm: nama, alamat: alamatPjm, tlp: tlp, pilihanMbl: mobilDipesan, tanggal_pesan: tglPinjam, lama_hari: banyakHari, pilihanPkt: pilihanPaket, harga: harga};
		
		$.post(alamatTujuan, data, function(tanggapan){
			if(tanggapan=='Data Tersimpan'){
				alert("Pemesanan Anda Berhasil dilakukan, Untuk pengambilan Mobil bisa langsung menghubungi staff kami.");
				
			}else{
				alert("Gagal Disimpan");
			}
		});
		
	});
	
	$('body').on('submit', '#isian_paket', function(evt){
		evt.preventDefault();
			//alert('sukses');
		var alamatTujuan = "controller/simpanPaket.php";
		var nama = $('#nama_mobil').val();
		var pilihan = $('#pilih_pkt').val();
		var harga = $('#harga_pkt').val();
		
		var data = {namaMbl: nama, pilPkt: pilihan, harga: harga};
		
		$.post(alamatTujuan, data, function(tanggapan){
			if(tanggapan=='Data Tersimpan'){
				alert("Berhasil Disimpan");
				
			}else{
				alert("Gagal Disimpan");
			}
		});
		
	});
	
	$('body').on('click', '#selectMbl', function(){
		
		var namaMobil = $(this).val();
		//	alert(namaMobil);
		var alamatTujuan = "controller/getNamaPaket.php";
		var data = {pilihMbl: namaMobil};
			
			$.post(alamatTujuan, data, function(response){
				$('#pilPaket').html(response); 
			});
			
	});
	
	$('body').on('click', '#pilPaket', function(){
		
		var namaMobil = $('#selectMbl').val();
		var namaPaket = $(this).val();
		//	alert(namaMobil);
		var alamatTujuan = "controller/getHargaPaket.php";
		var data = {pilihanMbl: namaMobil, pilihanPkt: namaPaket};
			//alert(namaMobil);
			$.post(alamatTujuan, data, function(response){
				$('#harga').html(response); 
			});
			
	});
	
	$('body').on('click', '.delete', function(evt){
		evt.preventDefault();
		
		var alamatTujuan = $(this).attr('href');
		var namaTarget = $(this).attr('data');
		var namaFile= 'viewData'+namaTarget + '.php';
			
			$.get(alamatTujuan, function(data){
				
				if(data=='sukses'){
					alert("data berhasil terhapus");
					
				$.get(namaFile, function(data){
					$('.wadah-isi').html(data);
			});
			
				}else if(data=='gagal'){
					alert("data gagal terhapus");
				}
			
			});
	});
	
	$('body').on('click', '#ubahMenggunakan', function(){
		//alert('a');
		var alamatDituju = "controller/updateStatus.php";
		
			
		var isiData = "Sedang Menggunakan";
		var data = {id: idDapat, status: isiData, nama_mobil: namaMobil};
		
		 $.post(alamatDituju, data, function(response){
			location.reload();
		});
	});
	
	$('body').on('click', 'input[type="checkbox"]', function(){
		
		idDapat = $(this).val();
		namaMobil = $(this).attr('nama-mobil');
	});

	$('body').on('click', '#ubahKembali', function(){
		//alert('a');
		var alamatDituju = "controller/updateStatus.php";
		var isiData = "Mobil Sudah Dikembalikan";
		var data = {id: idDapat, status: isiData, nama_mobil: namaMobil};
		
		 $.post(alamatDituju, data, function(response){
			location.reload();
		});
	});
	
});