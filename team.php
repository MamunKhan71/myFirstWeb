<?php
define("TITLE","Team | Md. Mamun");
    include('includes/header.php');
?>
<div id="team-members" class="cf">
    <h1>Our Team at Mamun's</h1>
    <p>We are small, but mighty. Franklin's Fine Dining has been a family owned and run business since the dirty thirties.</p>
    <hr>
<?php
    foreach($teamMembers as $members){
?>

    <div class="member">
        <img src="img/<?php echo $members["img"]; ?>.png" alt ="<?php echo $members["name"]; ?>">
        <h2><?php echo $members["name"]; ?> </h2>
        <p> <?php echo $members["bio"];?></p>
    </div>
    <?php
        }
    ?>
</div>
<hr>
<?php
include('includes/footer.php');
?>