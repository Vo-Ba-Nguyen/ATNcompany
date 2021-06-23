<?php

$sql = "select * from products where product_brand='$_GET[id]' ";
$hieu = mysqli_query($conn, $sql);
$sql_tenhieu = "select tenhieu from hieu where hieu_id='$_GET[id]'   ";
$tenhieu = mysqli_query($conn, $sql_tenhieu);
$dong_tenhieu = mysqli_fetch_array($tenhieu);
?>
<p class="loai"><?php echo $dong_tenhieu['tenhieu'] ?></p>
<ul>

    <?php
    while ($dong_hieu = mysqli_fetch_array($hieu)) {
        ?>
        <li><a href="#">
                <?php
                echo '<img src="admincp/modules/sanpham/uploads/' . $dong_hieu['product_image'] . '" width="120" height="150"/>';
                ?>
                <p>Product Name: <?php echo $dong_hieu['product_title'] ?></p>
                <p>Price:<?php echo $dong_hieu['product_price'] ?></p>
                <p style="color:#900;margin-left:20px;margin-top:5px;"><a
                            href="index.php?xem=chitiet&id=<?php echo $dong_hieu['product_id'] ?>" style="color:#09C;">Purchase</p></a>

            </a></li>
        <?php
    }
    ?>
</ul>
          