<?php
$sql = "select * from products where product_id=$_GET[id]";
$chitiet = mysqli_query($conn, $sql);
$row_chitiet = mysqli_fetch_array($chitiet);

?>


<?php
echo
'<form action="cart_update.php" method="post" enctype="multipart/form-data">';
echo '<div class="content_right" style="width:100%; padding-top:10px;">';
$current_url = base64_encode($url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
$id = $_GET['id'];
echo '<img src="admincp/modules/sanpham/uploads/' . $row_chitiet['product_image'] . '" width="120" height="150"/>';
echo '<input type="hidden" name="product_id" value="' . $id . '"/>';
echo '<input type="hidden" name="type" value="add"/>';
echo '<input type="hidden" name="return_url" value="' . $current_url . '"/>';

echo '<p style="margin-bottom:10px;font-size:20px">Product Name:' . $row_chitiet['product_title'] . '</p>';
echo '<p>Price:' . $row_chitiet['product_price'] . '</p>';
echo ' <p style="font-weight:bold">Describe:' . $row_chitiet['product_desc'] . '</p>';
echo ' <p>Amount <input type="text" name="qty" value="1" size="3" /></p>';
echo '<input type="submit" name="add" value="Order" style="margin-top:20px;float:right" />';

echo '</div>';
echo '</form>';
echo '<a href="index.php" style="float:right">Return</a></p>';
?>
<?php
if (isset($_SESSION['product'])) {
    $count = count($_SESSION['product']);
    echo $count;
}
?>
<!--Bình luận-->

<?php

if (isset($_POST['binhluan'])) {
    $id = $_GET['id'];
    $name = $_POST['ten'];
    $comment = $_POST['noidung'];
    $name_length = strlen($name);
    $comment_length = strlen($comment);
    if ($name_length > 0 && $comment_length > 0) {

        $sql = "insert into comment (id_sanpham,name,comment) values('$id','$name','$comment')  ";
        mysqli_query($conn, $sql);
    } else {
        echo 'Please fill in all the information';
    }

}

?>

<form action="" method="post" enctype="multipart/form-data">

    <table width="200" border="0" style="margin-bottom:40px;">
        <tr>
            <td colspan="2" style="font-size:16px; font-weight:bold">Comments, product reviews</div></td>

        </tr>
        <tr>
            <td width="68">Name</td>
            <td width="122"><label for="ten"></label>
                <input type="text" name="ten" id="ten" size="30" placeholder="Your Name..."/></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><label for="noidung"></label>
                <textarea name="noidung" id="noidung" cols="45" rows="5" placeholder="Comment Content..."></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="binhluan" id="binhluan" value="Comment"/></td>

        </tr>
    </table>

</form>
<?php
$fine_comment = "select name,comment,id_sanpham,product_id,date from comment,products where id_sanpham=$_GET[id] and products.product_id=comment.id_sanpham order by id desc";
$ketqua_comment = mysqli_query($conn, $fine_comment);
while ($dong_comment = mysqli_fetch_array($ketqua_comment)) {
    $comment_name = $dong_comment['name'];
    $comment = $dong_comment['comment'];
    echo '<p  style="border-bottom:1px solid #ccc">';
    echo "<p style='font-weight:bold;'>$comment_name</p>  $comment<p>";
    echo '<p style="opacity:0.5">' . $dong_comment["date"] . '</p>';
    echo '</p >';
}
?>
