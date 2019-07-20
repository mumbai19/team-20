<?php
// Inialize session
session_start();
include('config.php');
// Include database connection settings
if(!isset($_SESSION["login_user"]))
{
  header("Location:register.php");
}
else if(!isset($_SESSION["amount"]) )
{
    $amount=$_POST['amount'];
    // echo '<script>alert("'.$amount.'");</script>';
    $_SESSION['amount']= $amount;

  }
  ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Charilife Charity</title>

  <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Roboto:300,400" rel="stylesheet">
  <!--
      CSS
      ============================================= -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

  <!--================ Start Header Area =================-->
  <header class="default-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li><a  href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="causes.html">Causes</a></li>
            <li><a href="event.html">Event</a></li>
            <li class="dropdown">
              <div class="dropdown-menu">
                <a class="dropdown-item" href="event-details.html">Event Details</a>
                <a class="dropdown-item" href="elements.html">Elements</a>
              </div>
            </li>
          <li><a class="active" href="payment.html">Payment</a></li>
                         <li><a href="contact.html">Contact</a></li>
           <li class="dropdown">
							<a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							<?php echo $_SESSION['login_user'];?>
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="logout.php">Logout</a>
							</div>
						</li>
          </ul>
        </div>
      </div>
    </nav>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

/** {
  box-sizing: border-box;
}
*/
/* Add padding to containers */
#container1 {
  padding: 16px;
  background-color: white;
  width: 400px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 5px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
  width: 400px;
}
</style>
</head>
<body>

<form action="otp_verify.php" method="POST">
 <center>
  <div id="container1">
    
    <h1>Donation</h1>
    <p></p>
    <hr>

    <label for="text"><b>OTP</b></label>
    <input type="text" placeholder="Enter OTP" name="otp" required><br>

    <button type="submit" class="registerbtn" name='btn_login'>Verify</button>
  </div>
 
  </center>
</form>

</body>
</html>
