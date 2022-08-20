<?php
define("TITLE","Mamun's Dine");
include('includes/header.php');
    if(isset($_GET["item"])){
    function strip_bad_chars($input){
        $output = preg_replace("/[^a-zA-Z0-9_-]/","",$input);
        return $output;
    }
        $menuItem = strip_bad_chars($_GET["item"]);
        $dish = $menuItems[$menuItem];
    }
    // calculated suggested tip
    function suggested_tip($price,$tip){
        $totalTip = $price * $tip;
        echo money_format('%.2n',$totalTip);
    }
    
    ?>
    <hr>
    <div id = "dish">
        <h1> <?php echo $dish["title"];?><span class="price"><sup>$</sup> <?php echo $dish["price"];?></span></h1>
        <p><?php echo $dish["blurb"] ?> </p>
        <br>
        <p><strong>Suggested Braverage: <?php echo $dish["drink"]; ?> </strong></p>
        <p><em>Suggested Tip: <sup>$</sup> <?php suggested_tip($dish["price"],0.20);?> </em></p>
    </div>
    <hr>
    <a href="menu.php" class="button previous">&laquo; Back to Menu</a>
    <?php include("includes/footer.php"); ?>