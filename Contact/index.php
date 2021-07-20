<?php include 'Sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACTS</title>
    <link rel="stylesheet" href="CSS/ContactStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/HeaderFooterStyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/NavBarStyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/ButtonStyle.css">
    <style>

::placeholder {
  color: black;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: red;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: red;
}
</style>
</head>
  
<body>

<h6 id="Header"><?php include '../Header/header.php';?></h6>

<div class="sticky">
<div class="topnav">

<a href="../View/Content.php">HOME</a>

<a href="../View/Accounts.php">ACCOUNTS</a>

<a href="../Account/User/View/Account.php">FLAT RENTER</a>

<a href="../Account/Owner/View/Account.php">FLAT OWNER</a>

<a href="../Account/Admin/View/Account.php">ADMIN PANEL</a>

</div>
</div>
  
    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
      <h6 style="font-size:10px; font-family: verdana; color: white ; margin-left:-20px; margin-bottom:-20px;"></h6>
        <div><i class="fas fa-map-marker-alt"> Dhaka, Bangladesh</i></div>
        <div><i class="fas fa-envelope"> nativetube71@gmail.com</i></div>
        <div><i class="fas fa-clock"> Available Anytime!</i></div>
        <div class="link"><a href="tel: 01869510882" style="font-size:20px; text-align:center"> Contact</a></div>
      </div>
      
      <div class="contact-form">
      <ul class="main-nav animated slideInDown" id="check-class">
        <li><h1 style="font-size:40px; font-family: calibri; text-align:center">SEND EMAIL</h1></li>
        </ul>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

</div>
</body>
<h6 id="Footer"><?php include '../Footer/footer.php';?></h6>
</html>