<?php 
    define("TITLE","Contact Us | Mamun's Dine");
    include('includes/header.php');

?>
    <div id = "contact">
    <h1> Get in touch with us</h1>
    <form method="post" ation="" id="contact-form">
        <label for="name">Your Name</label>
        <input type="text" id="name" name ="name">
        <label for="email">Your Email</label>
        <input type="email" id="email" name ="email">
        <label for="message">Your Message</label>
        <textarea id="message" name="message"></textarea>
        <input type="checkbox" id="subscribe" name ="subscribe" value="subscribe">
        <label for="subscribe">Subscribe to news letter</label>
        <input type = "submit" class="button next" name="contact_submit" value="Send Message">
    </form>

    </div>
<?php include('includes/footer.php'); ?>