<?php

include_once("../dal/dal.php");

$id = $_GET['id'];
DeleteCategory($id);
header('location:category-list.php');

?>