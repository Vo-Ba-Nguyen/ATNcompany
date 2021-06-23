<div class="content">

    <?php
    if (isset($_GET['quanly'])) {
        $tam = $_GET['quanly'];
    } else {
        $tam = '';
    }
    if ($tam == 'loai') {
        include('modules/loai/main.php');
    } else if ($tam == 'hieu') {
        include('modules/hieu/main.php');
    } else if ($tam == 'sanpham') {
        include('modules/sanpham/main.php');
    } else if ($tam == 'donhang') {
        include('modules/donhang/main.php');
    } else {
        echo '<h1 align="center">Chào mừng đến trang quản trị</h1>';
    }
    ?>

    <div class="clear"></div>