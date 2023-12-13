<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact | Spiccato</title>
        <style type="text/css">
            .p1{
                text-align: justify;
            }
        </style>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'includes/header.php';
?>
<div class="container" id="content">
    <div class="row">
    <div class="col-lg">
        
        <h1>Get in Touch</h1>
        <p id="p1" style="text-align: justify;">Visit the Official Website: Go to the official website of Spiccato. Look for a "Contact Us" or "Customer Support" section on their website. Many companies provide email addresses, phone numbers, or contact forms for customer inquiries. Social Media: Check Spiccato's official social media pages (such as Facebook, Instagram, Twitter). Companies often provide customer support information on their social media profiles. You can send them a direct message or look for any contact details they may have shared. Review Emails or Order Confirmation: If you have made a purchase from Spiccato, check your emails for order confirmations or shipping details. Often, these emails include customer support contact information. Online Search: Conduct an online search for "Spiccato online shop" or similar terms. It's possible that there may be updated contact information available.</p>
    </div><br><br>
    <div class="col-lg">
        <div style="float: right;">
            <h1>COMPANY INFORMATION</h1><br>
            <p id="p1">Indonesia, Surabaya - 60111</p><br>
            <p id="p1">Phone : +62 86464746498</p><br>
            <p id="p1">Email : spiccato1234@gmail.com</p>
        </div>
        <h1>CONTACT US</h1>
        <div style="float: left;">
        <form>
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" autofocus="on" class="form-control" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
            </div>
            <div class="form-group">
                <textarea rows="5" cols="60" placeholder="Address"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>