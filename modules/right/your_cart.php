<?php
	session_start();
?>
<div class="content_right" style="width:100%;">
	<h1 align="center">Your cart</h1>
    <p align="right" style="color:#063;font-size:18px;text-decoration:underline;" >Hello: <?php
	
			if(isset($_SESSION['dangnhap'])){
			echo $_SESSION['dangnhap'];
		}
		
	?></p>
    <?php
	if(isset($_SESSION['dangnhap'])){
   	echo '<form action="logout.php" method="post">';
    	echo '<p style="float:right;"><input type="submit" name="logout" value="Log Out" /></p>';
    echo '</form>';
	
	}
 ?>
    <?php
		
	
		$current_url=base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		if(isset($_SESSION['product'])){
			$total=0;
			foreach($_SESSION['product'] as $cart_itm){
				
				echo '<img src="admincp/modules/sanpham/uploads/'.$cart_itm['image'].'" width="50" height="50" />';
				echo '<p style="font-weight:bold">Product_name:'.$cart_itm['name'].'</p>';
				echo '<p style="float:right;margin-right:10px;"><a href="cart_update.php?removep='.$cart_itm['id'].'&return_url='.$current_url.'"><img src="image/button_cancel_256.png" width="20" height="20"></a></p>';
			    echo '<p style="font-weight:bold">Product_code:'.$cart_itm['id'].'</p>';
			    echo '<p>produce qty:'.$cart_itm['qty'].'</p>';
				echo '<p>Product_price:'.$cart_itm['price'].'</p>';
				
				$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        		$total = ($total + $subtotal);
				
			}
			echo '<strong style="float:right">Totals : '.$total.'$'.'</strong>';
			echo' <p style="margin-top:30px;"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Delete all</a></p><br/><br/>';
		
		if(!isset($_SESSION['dangnhap'])){
		echo '<p><a href="?xem=thanhtoan">Pay</a></p>';}else{
		echo '<form action="thanhtoan.php" method="post">';
		echo '<input type="submit" name="muahang" value="Purchase products"/>';
		echo '</form>';
		}
		
		}
	else{
				echo 'Your cart is empty';
	}
	?>
   
    <?php
	
	echo '<div class="giohang">';

	if(isset($_SESSION['product'])){
		echo' <a href="giohang.php"><img src="image/14085970186309_icon-giao-hang.png" width="40" height="40"></a>';
		$count=count($_SESSION['product']);
		echo '<p style="float:right;line-height:40px;margin-left:10px;color:red;">'.$count.'   Items'.'</p>';
	}
	echo '</div>';
	?>
 <p style="font-size:20px;margin-top:30px;"><a href="index.php">Continue to Purchase</a></p>
</div>