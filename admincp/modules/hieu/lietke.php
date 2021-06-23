<?php
	
	$sql="select * from hieu order by hieu_id asc ";
	$loai=mysqli_query($sql);
?>
<table width="268" height="124" border="1">
  <tr>
    <td colspan="4"><div align="center">Liệt kê Hiệu</div></td>
  </tr>
  <tr>
    <td width="60">ID</td>
    <td width="56">Tên Hiệu</td>
    <td colspan="2">Quản lý</td>
  </tr>
    <?php
   	$i=0;
  	while($dong=mysqli_fetch_array($loai)){
  ?>
  <tr>

    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tenhieu'] ?> </td>
    <td width="25"><a href="index.php?quanly=hieu&ac=sua&id=<?php echo $dong['hieu_id'] ?>">Sửa</a></td>
    <td width="170"><a href="modules/hieu/xuly.php?id=<?php echo $dong['hieu_id'] ?>">Xóa</a></td>
  </tr>
  <?php
  $i++;
	}
  ?>
</table>

