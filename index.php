<?php require_once 'products.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body >

		<div class="container col-md-12 mt-5">
			<div class="row">
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <h1 class="col-md-2" style="font-weight:bold;">Products</h1> 
    <form class="d-flex">
           <a  style="border-radius: 15px; background-color: #6E174C;"href="cart.php" class="btn btn-primary btn-xs"><i class="fa-solid fa-cart-shopping"><sub><?php if (isset($_COOKIE['cart'])) {
           	echo count($_COOKIE['cart']);
           } ?></sub></i> Cart  <i class="fa-solid fa-arrow-right-long"></i></a>  
    </form>
  </div>
</nav>
<hr>
		<div class="row row-cols-1 row-cols-md-4	 g-4">
			<?php foreach ($products as $product ) { ?>
<div class="col">
    <div class="card h-100 shadow">
      <img src="<?php echo $product["img"]; ?>" class="card-img-top" alt="...">
      <div class="card-body" >
        <h5 class="card-title" style="font-weight: bold;"><?php echo $product["name"]; ?></h5>
        <p class="card-text"><?php echo$product["details"]; ?></p>
        <div align="right">
        <h5 class="card-title" style="font-weight:bold;"><?php echo $product['price']; ?>$</h5>
        <a  style="border-radius: 15px; background-color: #6E174C;" href="processes.php?addtocart&id=<?php echo $product['id']; ?>&qty=1" class="btn btn-primary btn-m">Add To Cart</a></div>
      </div>
    </div>
  </div>
			
<?php } ?>
 
</div>
				</div>
			</div>
<script src="https://kit.fontawesome.com/07e336a2d2.js" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>