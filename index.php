<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.ico" sizes="16x16" type="image/ico">
  <link rel="stylesheet" href="css/style.css" media="all">
  <title>Tech13 Ltd</title>
  <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
  $(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 10) {
        $('#header').slideDown();
    } else {
        $('#header').slideUp();
    }
  });
  </script>

</head>
<body>
  <div id="awin" style="display:none;">Awin</div>
<div id="page-wrapper">
  <div id="header">
    <ul id="navbar">
      <a href="#index-page"><img src="img/logo.png" width="20" height="20" align="top"/>Tech13 Ltd</a>
      <a href="#services-page">Services</a>
      <a href="#contact-page">Contact</a>
    </ul>
  </div>

  <div id="index-page" class="parallax">

      <div class="flex-landing">
        <div id="index-page-content" onclick="goToAnchor('services-page')">
          <div class="logo">
            <img src="img/logo.png" width="200" height="200"/>
          </div>
          <div class="deets">
            <h1>Tech13 Ltd.</h1>
            <h3>IT Support & Implementation</h3>
            <p class="hide">Click to see what we offer!</p>
          </div>

        </div>
        <div class="mission">
          <div class="ms">
            <h2>Our Mission</h2>
            <h3>At Tech13 Ltd, we have one goal; to make your IT worries disappear.</h3><br><br>
            <a class="light-pretty-button" href="https://blog.tech13.co.uk" target="_blank">Read more...</a>
          </div>
        </div>
      </div>
    </div>

  <div class="horizontal-border"></div>
<div id="services-page" class="">
  <div id="webDevFull" class="fs-popup">
    <i onclick="CloseServicePage('webDevFull')" id="webDevClose" class="fa fa-times"></i>
  </div>
  <div id="itSupportFull" class="fs-popup">
    <i onclick="CloseServicePage('itSupportFull')" id="itSupportClose" class="fa fa-times"></i>
  </div>
  <div id="vaServiceFull" class="fs-popup">
    <i onclick="CloseServicePage('vaServiceFull')" id="vaServiceClose" class="fa fa-times"></i>
  </div>
  <div class="serv-flex">
    <div class="serv-item">
      <i class="fa fa-laptop" aria-hidden="true"></i>
      <p class="serv-title">Web Development</p>
      <p>We offer various services relating to web development. CMS editing up to full bespoke systems.</p>
      <button id="webDevBtn" onclick="window.location.href = '#contact-page';" class="serv-btn">Contact</button>
    </div>
    <div class="serv-item">
      <i class="fa fa-users" aria-hidden="true"></i>
      <p class="serv-title">IT Support</p>
      <p>Whether you need ad-hoc IT support or a full system support package. We got you.</p>
      <button id="itSupportBtn" onclick="window.location.href = '#contact-page';" class="serv-btn">Contact</button>
    </div>
    <div class="serv-item">
      <i class="fa fa-clipboard" aria-hidden="true"></i>
      <p class="serv-title">Virtual Assistant</p>
      <p>Ever needed someone to help hold things together? Tech13 can act as your virtual assistant.</p>
      <button id="vaServiceBtn" onclick="window.location.href = '#contact-page';" class="serv-btn">Contact</button>
    </div>
  </div>
</div>

<div class="horizontal-border"></div>
<div id="testimonials" class="">
  <div class="testimonials-inner w80">
    <p class="testimonial">Built me a custom gaming PC from start to finish. Very professional and knows what he is talking about.<br><br><small> - Jamie Cate</small></p>
    <p class="testimonial">Let me tell you, this guy is truly amazing. I went to Bestbuy, and another friend to fix my computer, that had a virus on it. It is no more. 30 minutes. And gone. You'd be best to use this bloke. 5/5 Stars.<br><br><small> - Alex Ward</small></p>
    <p class="testimonial">Very handsome chap gave my PC the spring clean it needed.<br><br><small> - Sean Cousins</small></p>
    <p class="testimonial">Knows what he's doing, you can trust them to get your PC sorted!!<br><br><small> - Joe Johnson</small></p>
    <p class="testimonial">5 Stars<br><br><small> - Nathan Osborne</small></p>
  </div>
</div>
<div class="horizontal-border"></div>
  <div id="contact-page">
    <div id="contact-page-content">
      <div id="social-content">
        <a href="https://www.facebook.com/TECH13LTD" target="_blank"><i class="fa fa-facebook"></i></i></a>
        <a href="https://www.instagram.com/tech13ltd/" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="https://twitter.com/Tech13_Ltd" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/company/tech13-ltd" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="mailto:info@tech13.co.uk"><i class="fa fa-envelope"></i></a>
        <a href="tel:+441480400593"><i class="fa fa-phone"></i></a>
      </div>
      <div id="contact-form">
        <form id="contact" action="contact.php" method="post">
          <input name="c-name" type="text" placeholder="Your name..."></input>
          <input name="c-email" type="email" placeholder="your@email.com"></input>
          <input name="c-subject" type="text" placeholder="Subject..."></input>
          <textarea name="c-message" type="text" placeholder="Message..."></textarea>
          <input name="c-submit" type="submit" value="Send"></input>
        </form>
      </div>
    </div>

  </div>
  <div id="footer" class="para">
    <div id="footer-inner">
      <div class="footer-links">
        <a href="https://blog.tech13.co.uk">Blog</a><a href="terms-conditions.php">Terms and Conditions</a>
      </div>
      <p>Tech13 Ltd. is a registered company in England and Wales with company number - 11244290 - Website created by Tech13 Ltd - All rights reserved. &copy;</p>
    </div>
  </div>
</div>
<script>
//GET ALL TESTIMONIALS BY CLASS
let testimonials = document.getElementsByClassName('testimonial');
//SET COUNTER
var index = 0;
//START FUNCTION
slider();

function slider() {
  //SET ALL DISPLAYS IN TESTIMONIALS TO NONE
  for (var i = 0; i < testimonials.length; i++) {
    testimonials[i].style.display = "none";
  }
  //COUNT UP ONE
  index++;
  //CHECK IF END OF ELEMS
  if (index > testimonials.length) {
    index = 1;
  }
  //SET CURRENT INDEX VALUE TO DISPLAY BLOCK
  testimonials[index-1].style.display = "block";
  //RUN TIMER THEN START FUNCTION AGAIN //5000 is in ms
  setTimeout(slider, 5000);
}
function OpenServicePage(page) {
  let check = document.getElementById(page);
  if(check.style.display == "none" || check.style.display == "") {
    check.style.display = "block";
  } else {
    check.style.display = "none";
  }
}

function CloseServicePage(page) {
  document.getElementById(page).style.display = "none";

}
function goToAnchor(anchor) {
  var loc = document.location.toString().split('#')[0];
  document.location = loc + '#' + anchor;
  return false;
}
</script>
</body>
</html>
