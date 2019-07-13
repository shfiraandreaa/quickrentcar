function showRegister (){

	var namaFile = "../registerUser.php";
		
		$.get(namaFile, function(data){
			$('.body-login').html(data);
			
		});
}

function showLogin (){
	
	var namaFile = "../login.php";
		
		$.get(namaFile, function(data){
			$('.body-login').html(data);
			
		});
}

$( document ).ready(function() {
	
	// signup action started
	$(".signup").click(function(evt){
		
		evt.preventDefault();
		
		showRegister();
			
		
	});
	// signup action ended
	
	$('body').on('submit', '#reg', function(evt){
		evt.preventDefault();
		
		var tujuan = "controller/Usersignup.php";
		
		var data = {user : $('#user').val() , pass : $('#pass').val() , email : $('#email').val()};
		
		$.post(tujuan, data, function(respon){
			if(respon == 'Tersimpan'){
				alert("data berhasil disimpan");
				//location.reload();
				showLogin();
			}else{
				alert("data gagal disimpan");
			}
		});
	});
	
});