<?php
$sql = "SELECT * FROM sanpham ORDER BY id_sp DESC LIMIT 6";
$query = mysql_query($sql);
?>
<div class="prd-block">
    <h2>sản phẩm mới về</h2>
    <div class="pr-list">
    	<?php
		$j = 1;
        while($row = mysql_fetch_array($query)){
		?>
        <div class="prd-item">
            <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp'];?>"><img width="80" height="144" src="quantri/anh/<?php echo $row['anh_sp'];?>" /></a>
            <h3><a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp'];?>"><?php echo $row['ten_sp'];?></a></h3>
            <p>Bảo hành: <?php echo $row['bao_hanh'];?></p>
            <p>Tình trạng: <?php echo $row['tinh_trang'];?></p>
            <p class="price"><span>Giá: <?php echo $row['gia_sp'];?></span></p>
        </div>                
        <?php
			if($j%3==0){
				echo '<div class="clear"></div>';
			}
			$j++;
		}
		?>
    </div>
</div>