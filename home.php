<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="intro.css">
    <title>Flixy</title>
</head>
<body>
    <div class="m">
        <div class="bg">
            <header>
                <div class="header">
                    <img src="logo.png" alt="flixy logo">
                    <div>
                        <ul class="menu">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="home.php">About Us</a></li>
                            <!-- <li><a href="#">faqs</a></li> -->
                            <li><a href="home.php">Contact Us</a></li>
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="logout.php">log out</a></li>
                          </ul>
                    </div>
                </div>
            </header>
            <div class="text">
                <h1>All Verified Documents in One Place</h1>
                <h3>Access and Share your documents anytime anywhere</h3>
                <h2>Upload Documents</h2>
				<div class="container">
  <form class="form">
    <div class="file-upload-wrapper" data-text="Select your file!">
      <input name="file-upload-field" type="file" class="file-upload-field" value="">
    </div>
  </form>
</div>
            </div>
        </div>
    </div>
</body>
</html>
