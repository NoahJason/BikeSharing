<!-- HEADER -->
<?php
function homeHeadTag()
{
    session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- STYLE FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.jpeg">
    <link rel="stylesheet" href="index.css">

    <title>BikeSharing</title>
<?php
}
?>

<!-- NAVBAR -->
<?php
function navbar()
{
?>
    <section class="navigation w3-metro-light-blue w3-container">
       <button onclick="goToTop()" id="back-to-top" title="Go to top"><i class="fa fa-toggle-up"></i></button>
      <nav class="nav-container">
        <div class="logo w3-padding-large"> 
          <p><img src="img/logo.jpeg" alt="" class="logo"></p>
        </div>
        <div class="mobile-button">
          <span style="float: right;" onclick="toggleMobileNavigation()">&#9776;</span>
        </div>
        <div class="links" id="navbar">
          <a href="#about" >ABOUT US</a>-
          <a href="#consulting" >CONSULTING</a>-
          <a href="#contact" >LOCATIONS</a>            
        </div>
        <div id="mobile-sidenav" class="mobile-links w3-sand">
          <a href="javascript:void(0)" class="closebtn w3-round" onclick="toggleMobileNavigation()">&times;</a>
          <a href="#about" onclick="toggleMobileNavigation()">ABOUT</a>
          <a href="#consulting" onclick="toggleMobileNavigation()">CONSULTING</a>
          <a href="#contact" onclick="toggleMobileNavigation()">CONTACT</a>
        </div>
      </nav>
    </section>
<?php
}
?>