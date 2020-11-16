<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shop điện thoại</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="styles.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<?php include('connect.php'); ?>
	<div class="container">
		<div class="bg-primary">
			<p>SẢN PHẨM NỔI BẬT</p>
		</div>
		<div class="row">
		<?php 
			if(!isset($_POST['search'])){
				$sql = "select * from sanpham limit 3";
				$result = mysqli_query($conn,$sql);
				if(mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_assoc($result)) {
				?>				
		
			<div class="col-lg-4">
				<div id="idProduct">	
					<div class="top">
						<img src="<?php echo $row['image'];?>" alt="" class="image">
						<p><?php echo $row['name']; ?></p>
						<p><?php echo '*Bảo hành:'.$row['maintain'].' tháng'; ?></p>
						<p><?php echo '*Trạng thái: '.(($row['status']) ? "còn hàng" : "hết hàng"); ?></p>
					</div>
					<div class="bottom">
						<span>Giá: <?php echo number_format($row['price']).'d'; ?></span>
						<span>Chi tiết</span>
					</div>
				</div>
			</div>

				<?php 		
					}
				}
			}
		 ?>
		 		</div>
			<form action="" method="POST">
				<tr>
					<label>Tên sản phẩm:</label>
					<input type="text" name="input_Search">	
				</tr>
				<br><br>
				<tr>
					<input type="submit" value="Tìm kiếm" id="search">	
				</tr>
		 </form>
		 </div>
	</body>
</html>

