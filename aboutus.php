<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<html>
<head>
    <title>Parakkum Thalika</title>
    <meta charset="UTF-8">
    <meta name="description" content="Find the best bus routes from anywhere to anywhere in Kerala.">
    <meta name="keywords" content="Kerala, bus, ksrtc, private, route, trip">
    <meta name="author" content="Nirmal Scaria">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1">
<script>
    window.onload = function() {
        if (screen.width < 500) {
            var metaViewport = document.getElementById('viewport');
            metaViewport.setAttribute('content', 'user-scalable=no,width=500');
        }
    }
</script>
    <link rel="icon" href="assets/images/logo.png" sizes="16x16">
    <link type = "text/css" rel="stylesheet" href="assets/css/materialicon.css" >
    <link type = "text/css" rel="stylesheet" href="assets/css/fontawesomeall.css" >
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  />

    <link rel="stylesheet" type = "text/css" href="assets/css/custom.css?t=dsdff">
    <script
  src="assets/js/jquery-3.3.1.js"
></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script src="assets/js/script.js?t=dlkffjk"></script> 

</head>
<body>


<!---FLOATING ACTION--->
<div class="fixed-action-btn" style = "z-index:1;">
  <a class="btn-floating btn-large">
    <i class="large material-icons">share</i>
  </a>
  <ul>
    <li><a class="btn-floating blue darken-1" onclick="window.open('https://www.facebook.com/parakkumthalika.in', '_blank');"><i class="fab fa-facebook-f"></i></a></li>
    <li><a class="btn-floating red" onclick="window.open('mailto:admin@parakkumthalika.in', '_blank');"><i class="fas fa-envelope"></i>
</a></li>
    <li><a class="btn-floating green" onclick="window.open('https://chat.whatsapp.com/Dxe0W2ry41O2ImMIzjYu8F', '_blank');"><i class="fab fa-whatsapp"></i></a></li>

  </ul>
</div>
    


    <!---NAVBAR-->
    <nav>
        <div class = "nav-wrapper">
            <a href="#" class="brand-logo left hide-on-med-and-down" style = "left:20px;">Parakkum Thalika</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-light btn" href="getapp.php"><i class="material-icons left">android</i>Get the app</a></li>
               <li><a href="index.php" >Home</a></li>
                <li><a href="login.php" >Login</a></li>
                <li><a href="support.php" >Support</a></li>
                <li><a href="aboutus.php" >About Us</a></li>
            </ul>
        </div>
    </nav>
    <!--REVEAL FOR COLLAPSED NAVBAR-->
    <ul class="sidenav" id="mobile-demo">
        <li><a class="waves-effect waves-light btn" href="getapp.php"><i class="material-icons left">android</i>Get the app</a></li>
        <li><a href="index.php" >Home</a></li>
        <li><a href="login.php" >Login</a></li>
        <li><a href="support.php" >Support</a></li>
        <li><a href="aboutus.php" >About Us</a></li>
    </ul>
    <!--MAIN CONTENT START-->
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3 offset-s0 l6 offset-l3" style = "margin-top:20px;">

      <div class="card">
        <div class="card-image">
          <img src="assets/images/nirmal.jpg">
          <span class="card-title"><b style = "font-weight:bold;">Nirmal Scaria,</b> Founder</span>
          <a class="btn-floating halfway-fab waves-effect waves-light blue" onclick="window.open('https://www.facebook.com/nirmal.scaria.0', '_blank');"><i class="fab fa-facebook-f" ></i></a>
        </div>
        <div class="card-content">
          <p>Formed the idea of Parakkumthalika and worked on its execution on all phases. Designed, developed and executed the frontend, server architecture and backend data formulation and management.</p>
        </div>
    </div>
    </div>

    <div class="col s12 m10 offset-m1 offset-s0 l8 offset-l2">
    <blockquote style = "font-size:1.5rem;">
      Contributors
    </blockquote>
</div>
    <div class="col s12 m10 offset-m1 offset-s0 l10 offset-l1 container" style = "margin-top:20px;">
        <div class = "row">
            
            <div class="col m6 s12">
      <div class="card">
        <div class="card-image">
          <img src="assets/images/harrison.jpg">
          <span class="card-title"><b style = "font-weight:bold;">Harrison Santhosh</b></span>
          <a class="btn-floating halfway-fab waves-effect waves-light blue" onclick="window.open('https://www.facebook.com/harrison.santhosh', '_blank');"><i class="fab fa-facebook-f" ></i></a>
        </div>
        <div class="card-content">
          <p>Made Parakkumthalika reach the people. Did the PR works for parakkumthalika and provided ideas for the ui design.</p>
        </div>
    </div>
    </div>
            
            <div class="col m6 s12">
      <div class="card">
        <div class="card-image">
          <img src="assets/images/amaldev.jpg">
          <span class="card-title"><b style = "font-weight:bold;">Amaldev P Thankachan</b></span>
          <a class="btn-floating halfway-fab waves-effect waves-light blue" onclick="window.open('https://www.facebook.com/devv.amal', '_blank');"><i class="fab fa-facebook-f" ></i></a>
        </div>
        <div class="card-content">
          <p>Supported in providing valuable suggestions regarding the whole workflow and execution. Motivated Parakkumthalika to reach the goal.</p>
        </div>
    </div>
    </div>
    
    
    
    
    
    </div>
    
<div class = "row">
            
            
            
            <div class="col m6 s12">
      <div class="card">
        <div class="card-image">
          <img src="assets/images/abin.jpg">
          <span class="card-title"><b style = "font-weight:bold;">Abin Antony</b></span>
          <a class="btn-floating halfway-fab waves-effect waves-light blue" onclick="window.open('https://www.facebook.com/abin.antony.5872', '_blank');"><i class="fab fa-facebook-f" ></i></a>
        </div>
        <div class="card-content">
          <p>Supported the whole incubation of Parakkumthalika. Provided ideas for used experience, practical debugging and testing.</p>
        </div>
    </div>
    </div>
    
    <div class="col m6 s12">
      <div class="card">
        <div class="card-image">
          <img src="assets/images/sarath.jpg">
          <span class="card-title"><b style = "font-weight:bold;">Sarath Mohan</b></span>
    
        </div>
        <div class="card-content">
          <p>Designed the logo for Parakkumthalika from scratch.</p>
        </div>
    </div>
    </div>
   
    
    
    </div>


  </div>



    </div>
    <!---ADVANCED SEARCH-->
    
          
    <!--FORM END-->
    <!--FAKE FORM-->


    

    <script>
        //SCRIPT FOR NAVIGATION COLLAPSE
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, {});
        });
        //SCRIPT FOR TIME PICKER
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.timepicker');
            var instances = M.Timepicker.init(elems,{});
        });
        //SCRIPT FOR ADVANCED SEARCH
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, {});
        
        
        });
        
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      hoverEnabled: false
    });
  });
      //SET THEME COLOUr
var themeColor="#0482ED";
elements = document.getElementsByClassName('nav-wrapper');
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.backgroundColor=themeColor;
        console.log("changed");
    }
    var themeColor2="#9DC202";
elements = document.getElementsByClassName('btn');
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.backgroundColor=themeColor2;
        console.log("changed");
    }
    var themeColor3="#CB0C08";
elements = document.getElementsByClassName('btn-floating');
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.backgroundColor=themeColor3;
        console.log("changed float");
    }
    </script>
    

</body>
<head>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
</head>
</html>


