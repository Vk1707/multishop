<?php

include_once("../dal/dal.php");

$id = $_GET['id'];
DeleteDiscount($id);
header('location:discount-list.php');

?>