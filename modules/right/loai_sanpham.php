<?php
	$sql="select tenloai,product_image,product_title,product_price,product_id from products,loai where products.product_cat=loai.loai_id and product_cat='$_GET[id]' ";
	$sql_tenloai="select tenloai from loai where loai_id='$_GET[id]'   ";
	$tenloai=mysqli_query($conn,$sql_tenloai);
	$dong_tenloai=mysqli_fetch_array($tenloai);
	$loai=mysqli_query($conn,$sql);
	
?>
<p class="loai"><?php echo $dong_tenloai['tenloai'] ?></p>
<ul>

	<?php
	while($dong=mysqli_fetch_array($loai)){
	?>
             <li><a href="#">
                	<?php
					echo '<img src="admincp/modules/sanpham/uploads/'.$dong['product_image'].'" width="120" height="150"/>';
					?>
                    <p>Product Name: <?php echo $dong['product_title'] ?></p>
                    <p>Price:<?php echo $dong['product_price'] ?></p>
                    <p style="color:#900;margin-left:20px;margin-top:5px;"><a href="index.php?xem=chitiet&id=<?php echo $dong['product_id'] ?>"  style="color:#09C;">Purchase</p></a>
                  
                </a></li>
              <?php
	}
			  ?>
            </ul>
          