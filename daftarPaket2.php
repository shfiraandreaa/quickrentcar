<html>
    <head>
        
		 <title></title>
    </head>

    <body>
		
	   <div class="page-paket">
                <div class="x-Paket">
					<img src="images/delete-icon.png" />
               </div>

            <div class="ketPkt">
                <h5 class="pil-Paket">Daftar Paket Mobil</h5>
                <!--<button type="button" id="pkt-dlmkota" class="btn btn-outline-info">DALAM KOTA</button>
                <button type="button" id="-pkt-antarkota" class="btn btn-outline-info">ANTAR KOTA</button>-->
            </div>
			
			<div class="isi-daftarPkt">
			
                <table class="table-dlmKota" style="width:100%">
					<?php
						include('controller/showAllPaket.php');
					?>
                </table>
				
				
            </div>
        </div>
    </body>
</html>