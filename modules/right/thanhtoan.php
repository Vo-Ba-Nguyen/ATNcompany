<?php
	session_start();
	if(isset($_POST['login'])){
		$c_email=$_POST['email'];
		$c_pass=$_POST['password'];
		$sel_c="select * from customers where customer_pass='$c_pass' and customer_email='$c_email'";
		$run_login=mysqli_query($conn,$sel_c);
		$check_login=mysqli_num_rows($run_login);
		if($check_login==0){
			echo '<script>alert("password or email incorrect")</script>';
		}else{
			$_SESSION['dangnhap']=$c_email;
			header('location:index.php?xem=cart');
		}
	}
?>

<div class="content_right" style="width:100%;">
	<h1 align="center"><p class="loai">Login and Purchase</p></h1>
    <form action="" method="post">
    <table width="400" height="100"  align="center">
    	<tr>
        	<td>Email</td>
            <td><input type="text" name="email" placeholder="Enter email..." /></td>
        </tr>
        	<tr>
        	<td>Password</td>
            <td><input type="password" name="password" placeholder="Enter pass..." /></td>
        </tr>
        <tr>
        	<td><input type="submit" name="login" value="Log in" /></td>
        </tr>
    </table>
		<h2 align="right"><a href="index.php?xem=dangky">Create a new account</a></h2>
</form>

</div>
