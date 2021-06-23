<div class="content_right" style="width:100%;">
	<?php
		$sql="select * from video where id_video=$_GET[id] limit 1";
		$run_video=mysqli_query($conn,$sql);
		$dong_video=mysqli_fetch_array($run_video);
		echo '<h1 align="center">'.$dong_video['tenvideo'].'</h1>';
		echo '<iframe width="100%" height="480" src="https://www.youtube.com/embed/'.$dong_video['linkvideo'].'" frameborder="0" allowfullscreen></iframe>';
	?>
</div>