<?php
define("TITLE","Mamun's Dine");
include('includes/header.php');
if(isset($_GET["item"])){
    $menuItem = $_GET["item"];
    $dish = $menuItems[$menuItem];
}
?>