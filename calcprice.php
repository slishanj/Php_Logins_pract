<?php

session_start();
$netprice = $_GET['qty'] * $_GET['price'];
$name = $_GET['name'];

$ar = $_SESSION['prods'];

$ar[$name] = $_GET['qty'];
$_SESSION['prods'] = $ar;

header('Location:shopCart.php');
?>
