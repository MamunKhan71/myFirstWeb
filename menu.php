<?php
    define("TITLE","Menu | Mamun's Dine");
    include("includes/header.php");
    include("includes/footer.php");
?>
<div id = "menu-items">
    <h1>Our Delicious Menu</h1>
    <p>Like our team, our menu is very small &mdash; but dang!</p>
    <p><em>Click any menu item!</em></p>
    <hr>
    <ul>
        <?php 
        foreach($menuItems as $dish => $item)
        ?>
    </ul>
</div>