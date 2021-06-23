<div class="content_right" style="width:100%;">
	<?php

		if(isset($_POST['search'])){
			$timkiem=$_POST['search_query'];
			$sql="select * from products where product_keywords like '%$timkiem%'";
			$run_timkiem=mysqli_query($conn,$sql);
				
			while($dong_timkiem=mysqli_fetch_array($run_timkiem)){
			

			
				echo '<img src="admincp/modules/sanpham/uploads/'.$dong_timkiem['product_image'].'" width="120" height="150"/>';
				echo '<p>Product Name:'.$dong_timkiem['product_title'].'</p>';
				echo '<p>Price:'.$dong_timkiem['product_price'].'</p>';
				echo '<p><a href="index.php?xem=chitiet&id='.$dong_timkiem['product_id'].'">Purchase</a></p>';
					
			}
		
		}else{
			echo 'No results found or you entered incorrectly';
		}	
	
 ?>
 </div>

