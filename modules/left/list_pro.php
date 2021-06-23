<?php
$sgl1 = "select * from loai";
$run_loai = mysqli_query($conn, $sgl1);
?>
<p class="loai">Products Type</p>
<ul>
    <?php
    while ($dong = mysqli_fetch_array($run_loai)) {
        ?>
        <li><a href="index.php?xem=loai&id=<?php echo $dong['loai_id'] ?>"><?php echo $dong['tenloai'] ?></a></li>
        <?php
    }
    ?>
</ul>
<?php
$sgl2 = "select * from hieu";
$run_hieu = mysqli_query($conn, $sgl2);
?>
<p class="loai">Brand</p>
<ul>
    <?php
    while ($dong = mysqli_fetch_array($run_hieu)) {
        ?>
        <li><a href="index.php?xem=hieu&id=<?php echo $dong['hieu_id'] ?>"><?php echo $dong['tenhieu'] ?></a></li>

        <?php
    }
    ?>
</ul>
          
          
           
           
      