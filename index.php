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
      <h1 style="display: inline;">Go to your destination with the best bike!</h1>
      <p>Reliable bikes with the best prices</p>
      <a href="#contact" class="w3-padding-large w3-round">Reserve</a>
    </section>

    <section class="about w3-padding-large w3-container" id="about">
      <div class="content container w3-round-large">
        <h2 style="text-align: center;">- Our Goal -</h2>
        <p style="text-align: center;">To satisfy customers with bicycles for purchase and or rent.</p>
        <h3 style="text-align: center;">- About Us -</h3>
        <p>We are a starting company trying to re-create the plan to buy and or rent bikes for a more affordable price. Not only more affordable but also more user friendly.
          After we have seen how other companies have tried to make this project work we thought we would be able to do it better! We want to go for the best experience for every
          customer that comes to us.</p>
        <p>We started the idea thanks to a project from our school. They told us that we should dive into a subject we want to change something in. We came out that we found the most
          simple subject but there is many more things to improve. According to these thoughts we started working on our project in order to get a grade, but this continued to a project
          we want to continue working on and where our passion lays.
        </p>
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
              <a href="" target="_blank"><span><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.linkedin.com/in/melih-ceylan-69827727a/" target="_blank"><span><i class="fa-brands fa-linkedin"></i></a>
              <a href="" target="_blank"><span><i class="fa fa-address-card"></i></a>
            </div>
            <p>I am 20 years old, still a student. In this project I have been busy with the designing the website, helped Noah with backend and was the leader of the group.</p>
          </div>
          <div class="l-card">
            <div class="circular-portrait">
                <!-- <img src="https://spaces.w3schools.com/images/sgZX15Da8YE.jpg" alt="Photo by Shipman Northcutt | Unsplash"/> -->
            </div>
            <h4><strong>Sayfoullah</strong></h4>
            <p style="margin-top: 0 !important;">Founder</p>
            <div class="icons">
                <a href="" target="_blank"><span><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/sayfoullahnejjar/" target="_blank"><span><i class="fa-brands fa-linkedin"></i></a>
                <a href="" target="_blank"><span><i class="fa fa-address-card"></i></a>
            </div>
            <p>I am 22 years old, still a student. In this project I have been busy with designing of the website togehter with Melih and iv worked on the shop.</p>
            </div>
          </div>
          <div class="circular-portrait">
              <!-- <img src="https://spaces.w3schools.com/images/sgZX15Da8YE.jpg" alt="Photo by Shipman Northcutt | Unsplash"/> -->
            </div>
            <h4><strong>Noah Tai Apin</strong></h4>
            <p style="margin-top: 0 !important;">Founder</p>
            <div class="icons">
              <a href="" target="_blank"><span><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.linkedin.com/in/noah-tai-apin/" target="_blank"><span><i class="fa-brands fa-linkedin"></i></a>
              <a href="" target="_blank"><span><i class="fa fa-address-card"></i></a>
            </div>
            <p>I am 23 years old, still a student. In this project I have been busy with the back end part of the project, fixed some texts and a small bit of designing.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials w3-container w3-panel" style="padding: 50px;">
      <h2 style="text-align: center;">- Some of our ideas for improvement -</h2>
      <div class="slideshow-container">

      <div class="mySlides">
        <p><q><em>The setup towards renting and or buying a bike can be tough since the costs are too much, we should offer people a ensurance for a small fee monthly so they can go everywhere they want without risking anything.</em></q></p>
        <p class="author"><strong>- Noah, Back-end engineer</strong></p>
      </div>

      <div class="mySlides">
        <p><q><em>The bikes that people are renting are usually always broken and kicked into pieces, we should prevent this by making a docing station for the bikes and hang camera's there.</em></q></p>
        <p class="author"><strong>- Sayfoullah, Team leader </strong></p>
      </div>

      <div class="mySlides">
        <p><q><em>In order to make this work we will have to be different then others, we will make sure that our gps location is more accurate so the cost to KM will be more precise.</em></q></p>
        <p class="author"><strong>- Melih, Designer</strong></p>
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
        <p>We offer bikes for rental and sale</p>
      </div>
      <div class="c-card c-card-right w3-margin-top">
        <p>We make sure that you pay as little as you need to pay</p>
      </div>
      <div class="c-card w3-margin-top">        
        <p>We make recommendations according to the routes you have been thru</p>
      </div>
      <div class="c-card  c-card-right w3-margin-top">
        <p>We are always open to ideas and suggestions</p>
      </div>
      <div class="c-card w3-margin-top">
        <p>We have weekly meeting in order to impove our product</p>
      </div>
      <div class="c-card  c-card-right w3-margin-top">
        <p>We listen to our customers in order to improve</p>
      </div>
    </section>

    <section class="w3-panel w3-container content why-us" style="padding: 50px;">
      <h2 style="text-align: center;">- Why choose us? -</h2>
      <div class="container boxes">
        <div class="box w3-round-large">
          We are listing careful to the community
        </div>
        <div class="box w3-round-large">
          Sold over 10 bikes
        </div>
        <div class="box w3-round-large">
          Over 5 happy customers
        </div>
        <div class="box w3-round-large">
          100% secure
        </div>
        <div class="box w3-round-large" style="background-color: rgb(153, 255, 187);">
          Have passed our school project requirements
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