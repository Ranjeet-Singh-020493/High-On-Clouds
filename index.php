{\rtf1\ansi\ansicpg1252\cocoartf1404\cocoasubrtf460
{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <!DOCTYPE html>\
<html>\
<title>W3.CSS</title>\
<meta name="viewport" content="width=device-width, initial-scale=1">\
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">\
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">\
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">\
<style>\
html,body,h1,h2,h3,h4,h5 \{font-family: "Raleway", sans-serif\}\
.w3-sidenav a,.w3-sidenav h4 \{font-weight:bold\}\
</style>\
<body class="w3-light-grey w3-content" style="max-width:1600px">\
\
<!-- Sidenav/menu -->\
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>\
  <div class="w3-container">\
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">\
      <i class="fa fa-remove"></i>\
    </a>\
    <img src="img_avatar_g2.jpg" style="width:45%;" class="w3-round"><br><br>\
    <h4 class="w3-padding-0"><b>PORTFOLIO</b></h4>\
    <p class="w3-text-grey">Template by W3.CSS</p>\
  </div>\
  <a href="#" class="w3-padding w3-text-teal">HOME</a>\
  <a href="#" class="w3-padding">ABOUT</a>\
  <a href="#" class="w3-padding">PORTFOLIO</a>\
  <a href="#" class="w3-padding">SHOP</a>\
  <a href="#" class="w3-padding">CONTACT</a>\
   \
  <div class="w3-section w3-padding-top w3-large">\
    <a href="#" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-facebook-official"></i></a>\
    <a href="#" class="w3-hover-white w3-hover-text-red w3-show-inline-block"><i class="fa fa-pinterest-p"></i></a>\
    <a href="#" class="w3-hover-white w3-hover-text-light-blue w3-show-inline-block"><i class="fa fa-twitter"></i></a>\
    <a href="#" class="w3-hover-white w3-hover-text-grey w3-show-inline-block"><i class="fa fa-flickr"></i></a>\
    <a href="#" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-linkedin"></i></a>\
  </div>\
</nav>\
\
<!-- Overlay effect when opening sidenav on small screens -->\
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>\
\
<!-- !PAGE CONTENT! -->\
<div class="w3-main" style="margin-left:300px">\
\
  <!-- Header -->\
  <header class="w3-container">\
    <a href="#"><img src="img_avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>\
    <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>\
    <h1><b>My Portfolio</b></h1>\
    <div class="w3-section w3-bottombar w3-padding-16">\
      <span class="w3-margin-right">Filter:</span>\
      <button class="w3-btn">ALL</button>\
      <button class="w3-btn w3-white"><i class="fa fa-diamond w3-margin-right"></i>Design</button>\
      <button class="w3-btn w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos</button>\
      <button class="w3-btn w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>\
    </div>\
  </header>\
  \
  <!-- First Photo Grid-->\
  <div class="w3-row-padding">\
    <div class="w3-third w3-container w3-margin-bottom">\
      <img src="img_mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">\
      <div class="w3-container w3-white">\
        <p><b>Lorem Ipsum</b></p>\
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>\
      </div>\
    </div>\
    <div class="w3-third w3-container w3-margin-bottom">\
      <img src="img_lights.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">\
      <div class="w3-container w3-white">\
        <p><b>Lorem Ipsum</b></p>\
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>\
      </div>\
    </div>\
    <div class="w3-third w3-container">\
      <img src="img_nature.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">\
      <div class="w3-container w3-white">\
        <p><b>Lorem Ipsum</b></p>\
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>\
      </div>\
    </div>\
  </div>\
  \
  <!-- Second Photo Grid-->\
  <div class="w3-row-padding">\
    <div class="w3-third w3-container w3-margin-bottom">\
      <img src="img_fjords.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">\
      <div class="w3-container w3-white">\
        <p><b>Lorem Ipsum</b></p>\
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>\
      </div>\
    </div>\
    <div class="w3-third w3-container w3-margin-bottom">\
      <img src="img_lights.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">\
      <div class="w3-container w3-white">\
        <p><b>Lorem Ipsum</b></p>\
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>\
      </div>\
    </div>\
    <div class="w3-third w3-container">\
      <img src="img_mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">\
      <div class="w3-container w3-white">\
        <p><b>Lorem Ipsum</b></p>\
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>\
      </div>\
    </div>\
  </div>\
\
  <!-- Pagination -->\
  <div class="w3-center w3-padding-32">\
    <ul class="w3-pagination">\
      <li><a class="w3-black" href="#">1</a></li>\
      <li><a class="w3-hover-black" href="#">2</a></li>\
      <li><a class="w3-hover-black" href="#">3</a></li>\
      <li><a class="w3-hover-black" href="#">4</a></li>\
      <li><a class="w3-hover-black" href="#">\'bb</a></li>\
    </ul>\
  </div>\
\
  <!-- Footer -->\
  <footer class="w3-container w3-padding-32 w3-white">\
  <div class="w3-row-padding">\
    <div class="w3-third">\
      <h3>FOOTER</h3>\
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>\
      <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>\
    </div>\
  \
    <div class="w3-third">\
      <h3>BLOG POSTS</h3>\
      <ul class="w3-ul w3-hoverable">\
        <li class="w3-padding-16">\
          <img src="img_workshop.jpg" class="w3-left w3-margin-right" style="width:50px">\
          <span class="w3-large">Lorem</span><br>\
          <span>Sed mattis nunc</span>\
        </li>\
        <li class="w3-padding-16">\
          <img src="img_gondol.jpg" class="w3-left w3-margin-right" style="width:50px">\
          <span class="w3-large">Ipsum</span><br>\
          <span>Praes tinci sed</span>\
        </li>\
      </ul>\
    </div>\
\
    <div class="w3-third">\
      <h3>POPULAR TAGS</h3>\
      <p>\
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">London</span>\
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">DIY</span>\
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Family</span>\
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Shopping</span>\
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Games</span>\
      </p>\
    </div>\
\
  </div>\
  </footer>\
\
<!-- End page content -->\
</div>\
\
<script>\
// Script to open and close sidenav\
function w3_open() \{\
    document.getElementById("mySidenav").style.display = "block";\
    document.getElementById("myOverlay").style.display = "block";\
\}\
 \
function w3_close() \{\
    document.getElementById("mySidenav").style.display = "none";\
    document.getElementById("myOverlay").style.display = "none";\
\}\
</script>\
\
</body>\
</html>}