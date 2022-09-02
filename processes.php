<?php 

if (isset($_GET['addtocart'])) {
	setcookie('cart['.(($_GET['id'])-1).']',$_GET['qty'],strtotime('+1 day'));

	header('location:index.php');
	exit;

}

if (isset($_GET['removetocart'])) {
	setcookie('cart['.$_GET['id'].']',$_GET['qty'],strtotime('-1 day'));

	header('location:cart.php');
	exit;

}

if (isset($_POST['update'])) {


  setcookie('cart['.$_POST['qid'].']',$_POST['qtyu'],strtotime('+1 day'));
  header('location:cart.php');
  exit;

}

if (isset($_GET['co'])) {
		foreach ($_COOKIE['cart'] as $key => $value) { 
			setcookie('cart['.$key.']',$value,strtotime('-1 day'));
		}
		header('location:cart.php?co=ok');
  	exit;
	}


 ?>