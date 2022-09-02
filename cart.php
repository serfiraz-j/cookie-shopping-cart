<?php require_once 'products.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cart</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body >

    <div class="container col-md-12 mt-5">
      <div class="row">
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <h1 class="col-md-2" style="font-weight:bold;">Cart</h1> 
    <form class="d-flex">
           <a  style="border-radius: 15px; background-color: #6E174C;"href="index.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left-long"></i>  Back To Shopping</a>  
    </form>
  </div>
</nav>
<hr>
<?php $total=0; ?>
<?php if (isset($_COOKIE['cart'])) { ?>


<?php foreach ($_COOKIE['cart'] as $key => $value) { ?>
  <div class="card mb-3 shadow mt-2" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php  echo $products[$key]['img']; ?>" class="img-fluid rounded-start mt-3 mb-3" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <div class="container-fluid mt-3"> 
        <div class="row">
        <div class="col">    
        <h5 class="card-title" style="font-weight: bold;"><?php  echo $products[$key]['name']; ?></h5>
        <p class="card-text"><?php  echo $products[$key]['details']; ?></p>  </div>    
         <div class="col" align="right">
          <form method="POST" action="processes.php">
           <label>Qty : </label>
          <input id="txt" name="qtyu" style="width: 13%; text-align: center;" min="1" type="text" maxlength="3" value="<?php echo $value; ?>">
          <input type="hidden" name="qid" value="<?php echo $key; ?>">
          <button class="btn-1" name="update">update</button>
          </form>
        <h5 class="card-title mt-3" style="font-weight:bold;"><?php $up= $products[$key]['price'] * $value;  $total += $up; echo $up;  ?>$</h5>
        <a href="processes.php?removetocart&id=<?php echo $key; ?>&qty=1"><button class="btn-2"><i class="fa-regular fa-trash-can" style=" color: red;"></i></button></a>
        </div>
        </div>
       </div>       
      </div>
      </div>
    </div>
  </div>
<?php } ?>

<div align="right">
<div class="card col-md-4  mb-5" style="border-width: 10px; border-color:  #730d0d; height: 120px;">
  <div class="card-body">
    <div class="container">
    <div class="row mt-2" >
      <div class="col "><h5 class="text-left" style="text-align: left;"> Sub Total: <?php echo $total; ?>$</h5></div> 
      <div class="col"><a style="border-radius: 15px; background-color:  #901010; height: 55px; width:150px"href="processes.php?co" class="btn btn-primary btn-sm"><p style="margin-top: 10px; margin-bottom:10px;">Order Confirmation</p></a></div>
   </div>
   </div>
  </div>
</div>
</div>
<?php } ?>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/07e336a2d2.js" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
document.getElementById("txt").onkeypress = function(e) {
    var chr = String.fromCharCode(e.which);
    if ("1234567890".indexOf(chr) < 0)
        return false;
};

$("#txt").on("input", function() {
  if (/^0/.test(this.value)) {
    this.value = this.value.replace(/^0/, "")
  }
})
</script>

<?php 
if (isset($_GET['co']) AND $_GET['co']=='ok') {
  ?>
  <script type="text/javascript">
  Swal.fire({
  title: 'Success',
  text: "Order has been completed!",
  icon: 'success',
  showCancelButton: false,
  confirmButtonColor: '#266715',
  cancelButtonColor: '#d33',
  confirmButtonText: 'OK'
  }).then((result) => {
  if (result.isConfirmed) {
    window.location.assign("index.php")
  }
})

  </script>
   <?php
}

 ?>
</body>
</html>

<style type="text/css">
  .btn-1 {
    width: 70px;
    height: 30px;
    border: none;
    color: white;
    background-color: black;
    cursor: pointer;
    border: 2px solid #FFFF00 ;
  }
  .btn-2 {
    width: 30px;
    height: 30px;
    border: none;
    color: white;
    background-color: white;
    cursor: pointer;
    border: 2px solid #DF808B;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}</style>