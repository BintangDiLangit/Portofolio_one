<?php 
require 'function.php';

//cek tombol submit
if(isset($_POST["submit"])){
  if(input($_POST)>0){
    echo "
      <script>
      alert('Data has been sent !!!');
      document.location.href = 'index.php';
      </script>
    ";
  }else{
    echo "
      <script>
      alert('data failed to send !!!');
      document.location.href = 'index.php';
      </script>
    ";
  }

}
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Web BintangDiLangit</title>
    <link rel="shortcut icon" href="icon.png">
  </head>

  <body id="home" class="scrollspy">

<!-- Navbar -->
<div class="navbar-fixed">
    <nav class="black darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo green-text text-darken-3">STR5</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#about">About Us</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#clients">Tools</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- sidenav -->
  <ul class="sidenav" id="mobile-nav">
              <li><a href="#about">About Us</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#clients">Tools</a></li>
  </ul>      


<!-- Slider -->
<div class="slider">
  <ul class="slides">
    <li>
      <img src="img/5.jpg"> <!-- random image -->
      <div class="caption left-align">
        <h3>Hello World!</h3>
        <h5 class="light grey-text text-red-3">Nice to meet you...</h5>
      </div>
    </li>
    <li>
      <img src="img/9.png"> <!-- random image -->
      <div class="caption right-align">
      </div>
    </li>
    <li>
      <img src="img/6.jpg"> <!-- random image -->
      <div class="caption center-align">
        <h3>Welcome</h3>
        <h5 class="light grey-text text-lighten-3">in my world</h5>
      </div>
    </li>
  </ul>
</div>

<!-- About Us -->
<section id="about" class="about scrollspy">
  <div class="container">
    <div class="row">
      <h3 class="center light red-text text-darken-3">About Us</h3>
      <div class="col m6 light">
        <h5>I am a professional person</h5>
        <p>My hobby is in the field of web development, playing "capture the flag" in cybersecurity, and i am a java programmer, php, python, and others. I am an expert in java programming and become a "backend development", and now continue to learn the ins and outs of the web and cybersecurity. please support me, and thank you</p>
      </div>
      <div class="col m6 light">
        <p>WEB DEVELOPMENT</p>
          <div class="progress">
            <div class="determinate green" style="width: 70%"></div>
          </div>
        <p>ANDROID APP DEVELOPMENT</p>
          <div class="progress">
            <div class="determinate green" style="width: 10%"></div>
          </div>
        <p>CAPTURE THE FLAG</p>
          <div class="progress">
            <div class="determinate green" style="width: 50%"></div>
          </div>
      </div>
    </div>
  </div>
</section>


<!-- Clients -->

<div id="clients" class="parallax-container scrollspy">
  <div class="parallax"><img src="img/11.jpg"></div>

  <div  class="container clients ">
    <h3 class="center light white-text">Our Tools</h3>
    <div class="row">
      <div class="col m4 s12 center">
        <img src="img/clients/Octocat.png" >
      </div>
      <div class="col m4 s12 center">
        <img src="img/clients/giticon.png" >
      </div>
      <div class="col m4 s12 center">
        <img src="img/clients/vsc.png" >
      </div>
    </div>
    <div class="row">
      <div class="col m4 s12 center">
        <img src="img/clients/256px-Apache_NetBeans_Logo.svg.png" >
      </div>
      <div class="col m4 s12 center">
        <img src="img/clients/cof_orange_hex.png" >
      </div>
      <div class="col m4 s12 center">
        <img src="img/clients/ps.png" >
      </div>
    </div>
  </div>
</div>


<!-- services -->
<section id="services" class="services grey lighten-3 scrollspy">
  <div class="container">
    <div class="row">
      <h3 class="light center red-text text-darken-3">Our Services</h3>
      <div class="col m4 s12">
        <div class="card-panel center">
          <i class="material-icons medium">laptop_mac</i>
          <h5>Web Development</h5>
          <p>Web development is a technology developed by a web for cyberspace, and it's meant to have the scope of e-commerce with a broad scope of development</p>
        </div> 
      </div>
      <div class="col m4 s12">
        <div class="card-panel center">
          <i class="material-icons medium">android</i>
          <h5>Android App</h5>
          <p>Android development is someone who has the task to build a system, plan its architecture, implement and develop a system that has been made for the future.</p>
        </div> 
      </div>
      <div class="col m4 s12">
        <div class="card-panel center">
          <i class="material-icons medium">assistant_photo</i>
          <h5>Capture The Flag</h5>
          <p>Capture the Flag is a type of hacking competition which requires a team to retrieve a file or string that has been hidden by the system which is called "Flag".</p>
        </div> 
      </div>
    </div>
  </div>

</section>

<!-- portfolio -->
<section id="portfolio" class="portfolio scrollspy">
  <div class="container">
    <h3 class="light center grey-text text-darken-3">Portfolio</h3>
    <div class="row">
      <div class="col m3 s12">
        <img src="img/portfolio/11.png" class="responsive-img materialboxed">
        <i class="fas fa-eye"></i> Pendataan Iqob
      </div>
      <div class="col m3 s12">
        <img src="img/portfolio/12.png" class="responsive-img materialboxed">
        <i class="fas fa-eye"></i> Contoh Portfolio Sederhana
      </div>
      <div class="col m3 s12">
        <img src="img/portfolio/13.png" class="responsive-img materialboxed">
        <i class="fas fa-eye"></i> Pico CTF
      </div>
      <div class="col m3 s12">
        <img src="img/portfolio/14.jpg" class="responsive-img materialboxed">
        <i class="fas fa-eye"></i> SIAKAD dengan bootstrap
      </div>
    </div>

    <div class="row">
      <div class="col m3 s12" height = "650">
        <img src="img/portfolio/7.jpg" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12" height = "650">
        <img src="img/portfolio/8.jpg" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12"height = "650">
        <img src="img/portfolio/9.jpg" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12"height = "650">
        <img src="img/portfolio/10.jpg" class="responsive-img materialboxed">
      </div>
    </div>
  </div>
</section>


<!-- contact us -->
<section id="contact" class="contact grey lighten-3 scrollspy">
  <div class="container">
    <h3 class="light grey-text text-darken-3">Contact Us</h3>
    <div class="row">
      <div class="col m5 s12">
        <div class="card-panel black center white-text">
          <i class="material-icons">email</i>
          <h5>Contact</h5>
          <p>You can contact me if necessary, and give comments about my portfolio</p>
        </div>
        <ul class="collection with-header">
          <li class="collection-header"><h4>Our University</h4></li>
          <li class="collection-item">Programmer BintangDiLangit</li>
          <li class="collection-item">JL. Gajayana No.50, Malang</li>
          <li class="collection-item">East Java</li>
        </ul>
      </div>

      <div class="col m7 s12">
        <form action="" method="post">
          <div class="card-panel">
            <h5>Please fill out this form</h5>
            <div class="input-field">
              <input type="text" name="name" id="name" required class="validate"required autocomplete="off">
              <label for="name">Name</label>
            </div>
            <div class="input-field">
              <input type="email" name="email" id="email" class="validate"required autocomplete="off">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <input type="text" name="phone" id="phone"required autocomplete="off">
              <label for="phone">Phone Number</label>
            </div>
            <div class="input-field">
              <textarea name="message" id="message" class="materialize-textarea"required autocomplete="off"></textarea>
              <label for="message">Message</label>
            </div>
            <button type="submit" class="btn black green-text" name="submit">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- footer -->
<footer class="black green-text center">
  <p class="flow-text">Web BintangDiLangit. Copyright 2020.</p>
</footer>






    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
      const sideNav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sideNav);

      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider, {
        indicators: false,
        interval: 3000
      });


      const parallax = document.querySelectorAll('.parallax');
      M.Parallax.init(parallax);

      const materialbox = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialbox);

      const scroll = document.querySelectorAll('.scrollspy');
      M.ScrollSpy.init(scroll,{
        scrollOffset: 50
      });

    </script>
  </body>
</html>