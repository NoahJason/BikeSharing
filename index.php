<?php
require("inc/functions.php");
?>

<head>
    <?php homeHeadTag(); ?>
</head>
  <body> 

   <?php
   homeNavbar();
   ?>

    <section class="hero w3-padding-large w3-container">
      <h1 style="display: inline;"><span><i class="fa fa-check-square-o"></i></span>Go to your destination with the best bike!</h1>
      <p>Reliable bikes with the best prices</p>
      <a href="#contact" class="w3-padding-large w3-round">Reserve</a>
    </section>

    <section class="about w3-padding-large w3-container" id="about">
      <div class="content container w3-round-large">
        <h2 style="text-align: center;">- Our Goal -</h2>
        <p style="text-align: center;">To satisfy customers with bicycles for purchase and or rent.</p>
        <h3 style="text-align: center;">- About Us -</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <div class="leadership content container w3-margin-top w3-round-large">
        <h3 style="text-align: center;">- Founders -</h3>
        <div class="l-cards">
          <div class="l-card">
            <div class="circular-portrait">
              <!-- <img src="https://spaces.w3schools.com/images/sgZX15Da8YE.jpg" alt="Photo by Shipman Northcutt | Unsplash"/> -->
            </div>
            <h4><strong>Melih Ceylan</strong></h4>
            <p style="margin-top: 0 !important;">Founder</p>
            <div class="icons">
              <a href="" target="_blank"><span><i class="fa fa-facebook-square"></i></a>
              <a href="" target="_blank"><span><i class="fa fa-linkedin-square"></i></a>
              <a href="" target="_blank"><span><i class="fa fa-address-card"></i></a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <div class="l-card">
            <div class="circular-portrait">
                <!-- <img src="https://spaces.w3schools.com/images/sgZX15Da8YE.jpg" alt="Photo by Shipman Northcutt | Unsplash"/> -->
            </div>
            <h4><strong>Sayfoullah</strong></h4>
            <p style="margin-top: 0 !important;">Founder</p>
            <div class="icons">
                <a href="" target="_blank"><span><i class="fa fa-facebook-square"></i></a>
                <a href="" target="_blank"><span><i class="fa fa-linkedin-square"></i></a>
                <a href="" target="_blank"><span><i class="fa fa-address-card"></i></a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div class="circular-portrait">
              <!-- <img src="https://spaces.w3schools.com/images/sgZX15Da8YE.jpg" alt="Photo by Shipman Northcutt | Unsplash"/> -->
            </div>
            <h4><strong>Noah Tai Apin</strong></h4>
            <p style="margin-top: 0 !important;">Founder</p>
            <div class="icons">
              <a href="" target="_blank"><span><i class="fa fa-facebook-square"></i></a>
              <a href="" target="_blank"><span><i class="fa fa-linkedin-square"></i></a>
              <a href="" target="_blank"><span><i class="fa fa-address-card"></i></a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials w3-container w3-panel" style="padding: 50px;">
      <h2 style="text-align: center;">- Some of our customer stories -</h2>
      <div class="slideshow-container">

      <div class="mySlides">
        <p><q><em>The team at CONSULTCORP boosted my business by 500% in only 6 months! Their expertise helped me and my business to grow beyond what I thought it is possible.</em></q></p>
        <p class="author"><strong>- John Keats, Founder of COMPANY-X</strong></p>
      </div>

      <div class="mySlides">
        <p><q><em>CONSULTCORP helped me launch my idea in only 3 months! If there was not for CONSULTCORP team, I would probably not succeed.</em></q></p>
        <p class="author"><strong>- Anne Johnson, Founder of COMPANY-Y</strong></p>
      </div>

      <div class="mySlides">
        <p><q><em>The team at CONSULTCORP will help you steer your idea in the right direction, reducing all the risks you might encounter on your own! They surely did mine.</em></q></p>
        <p class="author"><strong>- Dean Doe, Founder of COMPANY-Z</strong></p>
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

      </div>

      <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>      
    </section>

    <section id="consulting" class="w3-container container consulting content">
      <h2 style="text-align: center;">- What we do -</h2>
      <div class="c-card w3-margin-top">
        <p>We offer advices on how to successfully develop and adapt your business ideas</p>
      </div>
      <div class="c-card c-card-right w3-margin-top">
        <p>We implement strategies to identify business risks</p>
      </div>
      <div class="c-card w3-margin-top">        
        <p>We recommend necessary steps to lower, or even completely remove business risks</p>
      </div>
      <div class="c-card  c-card-right w3-margin-top">
        <p>We bring out-of-the-box ideas to refresh a business</p>
      </div>
      <div class="c-card w3-margin-top">
        <p>We conduct analysis to reduce your financial costs</p>
      </div>
      <div class="c-card  c-card-right w3-margin-top">
        <p>We provide you with a roadmap after we conduct business </p>
      </div>
    </section>

    <section class="w3-panel w3-container content why-us" style="padding: 50px;">
      <h2 style="text-align: center;">- Why choose us? -</h2>
      <div class="container boxes">
        <div class="box w3-round-large">
          More than 15 years of experience
        </div>
        <div class="box w3-round-large">
          Over 20000 of consultations
        </div>
        <div class="box w3-round-large">
          Over 3500 happy clients
        </div>
        <div class="box w3-round-large">
          100% secure
        </div>
        <div class="box w3-round-large" style="background-color: rgb(153, 255, 187);">
          Won 75 business awards
        </div>
      </div>
    </section>

    <section class="contact w3-container contact" id="contact">
      <div class="short-contact">
        <h2>- Locations - </h2>
        <div class="column">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.4559042669016!2d5.655534076400286!3d51.4865007718086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c723ddcb3b90eb%3A0x85de8b39b419ed6e!2sKeizerin%20Marialaan%202%2C%205702%20NR%20Helmond!5e0!3m2!1snl!2snl!4v1684134593734!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>

    <section class="w3-container footer">
      <p class="w3-center logo">© 2023  BikeSharing</p>
    </section>


  <script async>
    const backToTop = document.getElementById("back-to-top");

    function toggleMobileNavigation() {
    const mobileNavigation = document.getElementById("mobile-sidenav");
    mobileNavigation.classList.toggle('mobile-links-active');
    }

    function goToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }

    function scroll() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) backToTop.style.display = "block";
    else backToTop.style.display = "none";
    }

    window.onscroll = function() {scroll()};  
  </script>
  <script async>
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
      }
  </script>
  </body>
</html>