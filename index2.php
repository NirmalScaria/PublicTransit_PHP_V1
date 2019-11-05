<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<html>
<head>
    <title>Parakkum Thalika</title>
    <meta charset="UTF-8">
    <meta name="description" content="Parakkumthalika.in provides the best bus routes from any place to any destination in kerala through Private as well as KSRTC buses. The website gives direct as well as connect bus routes as searched by the user.">
    <meta name="keywords" content="Kerala, bus, ksrtc, private, route, trip">
    <meta name="author" content="Nirmal Scaria">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1">
<script>
    window.onload = function() {
        if (screen.width < 400) {
            var metaViewport = document.getElementById('viewport');
            metaViewport.setAttribute('content', 'user-scalable=no,width=400');
        }
    }
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7465762118175984",
    enable_page_level_ads: true
  });
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
    <script src="assets/js/script.js?t=d2k0ffjk"></script> 

</head>
<body>

<div class="preloader-background" id = "mypreloader">
<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
		<?php
		//include 'demo.html'
		?>

</div>
<?php
		include 'includes/addfloat.php';
		?>
    


    <?php include 'includes/addnavbar.php';?>
    <!--MAIN CONTENT START-->
    <div class="container">
        <!--LOGO IMAGE-->
        <div class="row">
            <div class="col l8 m8 s10 offset-l2 offset-m2 offset-s1  container">
                <div class ="row" style ="margin-bottom:0px;">
                <img class="col s6 offset-s3 responsive-img center" src="assets/images/logonopad.png"
                    style="margin-top:30px; min-height:70px; min-width:100px;"></div>
                    <div class = "row" style = "text-align:right;">
                        <div class = "col s6 offset-s3">
                <a  style = "position:relative; top:0.2rem; right:20px; background-color:#000; color:#fff; padding:2px; color:#fdffaf;">parakkumthalika.in</a></div></div>
            </div>
        </div>
        <!--FORM-->
        <div class ="row">
            <div class="col l8 m8 s12 offset-l2 offset-m2 offset-s0  ">
                <div class="container" style = "position:relative; top:0px;">
                    <div class="row">
                        <!--INPUT FOR ORIGIN-->
                        <div class ="col s12">
                            <div class="input-field" style = "margin:0px;">
                                <i class="material-icons prefix" style="font-size:1.7rem; top:12px;">home</i>
                                <input id="origins" class="validate" onkeyup="autofill('origins');" type="text"
                                    name="origin" autocapitalize="characters" autocomplete="off" >
                                <label for="origins">Origin</label>
                            </div>
                        </div>
                        <!--INPUT FOR DEST-->
                        <div class="col s12">
                            <div class="input-field" >
                                <i class="material-icons prefix" style="font-size:1.7rem; top:12px;">room</i>
                                <input type="text" id="dests" onkeyup="autofill('dests')" class="validate"
                                    name="dests" autocapitalize="characters" autocomplete="off">
                                <label for="dests">Destination</label>
                            </div>
                        </div>            
                        <!----INPUT FOR TIME-->
                        <div class="col s12">
                            <div class="input-field" style = "margin:0px;">
                                <i class="material-icons prefix" style="font-size:1.7rem; top:12px;">access_time</i>                                   
                                <input type="text" id="times" class="timepicker" name="times" autocomplete="off" readonly="true">
                                <label for="times">Time of departure</label>
                            </div>
                        </div>
                    </div>
                    <!--SEARCH BUTTONS-->
                    <div class="row">
                        <div class="col l10 m10 s10 offset-l1 offset-m1 offset-s1 container">
                            <div class="row valign-wrapper">
                                <i class="material-icons prefix">tune</i>
                                <!---ADVANCED SEARCH-->
                                <div class="col s7 m7 xl7 l7" style="top:10px;">
                                    
                                    <a class="modal-trigger" href="#modal1" style="color:#222;"> 
                                    
                                        Advanced search</a>
                                </div>
                                <!---SEARCH BUTTON-->
                                <a class="btn waves-effect waves-light col s6 m6 l6 xl6 round  red lighten-2" onclick="mainsearch();" href="#" style 
                                    > Search </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---ADVANCED SEARCH-->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Advanced Search</h4>
            Maximum initial waiting time (hours):
            <p class = "range-field">
                 <input type = "range" id = "startlagmaxrange" min = "0" max = "10" value = "8" />
            </p>
            Minimum time between connections (minutes):
            <p class = "range-field">
            <input type = "range" id = "minlayoverrange" min = "0" max = "30" value = "5"/>
            </p>
            Maximum time between connections (hours):
            <p class = "range-field">
            <input type = "range" id = "maxlayoverrange" min = "1" max = "5" value = "5" />
            </p>
   
        </div>
        <div class="modal-footer">
            <a href="#!" onclick="advancedvalues();" class="modal-close waves-effect waves-green btn-flat">Confim</a>
        </div>
    </div>
          
    <!--FORM END-->
    <!--FAKE FORM-->
    <form id="realform" method="POST" action="search.php">
        <input type="hidden" name="originselected" id="originselected" value="0">
        <input type="hidden" name="destselected" id="destselected" value="0">
        <input type = "hidden" name = "timeselected" id = "timeselected" value="0">
        <input type="hidden" name="startlagmax" id="startlagmax" value="18000">
        <input type="hidden" name="minlayover" id="minlayover" value="120">
        <input type="hidden" name="maxlayover" id="maxlayover" value="18000">
    </form>

    

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
      /*
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
    */
    </script>
    

</body>
<head>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
</head>
</html>


