<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Parakkum Thalika</title>
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="English" />
    <meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
<script>
    window.onload = function() {
        if (screen.width < 500) {
            var metaViewport = document.getElementById('viewport');
            metaViewport.setAttribute('content', 'user-scalable=no,width=500');
        }
    }
</script>
    <script src="assets/js/materialize.min.js" ></script>
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  />
    <link rel="icon" href="assets/images/logo.png" sizes="16x16">
    <link rel="stylesheet" type = "text/css" href="assets/css/custom.css">
    <link rel="stylesheet" type = "text/css" href="assets/css/all.css">
    <link rel="stylesheet" type = "text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
</head>
<?php
if(!((isset($_POST['originselected']))&(isset($_POST['destselected']))&(isset($_POST['timeselected']))&(isset($_POST['startlagmax']))&(isset($_POST['minlayover']))&(isset($_POST['maxlayover'])))){
    header('Location: '.'index.php');
}
$origin=$_POST['originselected'];
$dest=$_POST['destselected'];
$time=$_POST['timeselected'];
$startlagmax=$_POST['startlagmax'];
$minlayover=$_POST['minlayover'];
$maxlayover=$_POST['maxlayover'];
$rawres= (exec("../scripts/searchindex.py ".$origin." ".$dest." ".$time." ".$startlagmax." ".$minlayover." ".$maxlayover." 2>&1"));
$startplace=(exec("../scripts/index.py getnamefromid ".$_POST['originselected']." 2>&1"));
$stopplace=exec("../scripts/index.py getnamefromid ".$_POST['destselected']." 2>&1");
$jsonres=json_decode($rawres,TRUE);
$starttimea=(date("g:i A",(strtotime(substr($time,0,2).":".substr($time,2,2).":".substr($time,4,2)))));
?>
<body style  ="min-width:500px;">
<?php
include 'includes/addnavbar.php';
?>
<div class="container">



    
        <div class="row" style = "margin-top:30px;">
 <div class="col s12" style="color:#555; text-align:center; text-decoration: underline; text-decoration-color:#999; text-underline-position: under;">
            Buses from 
            <?php echo $startplace?> 
            to 
            <?php echo($stopplace);?>
            after 
            <?php echo $starttimea;?> 
            <br/>
             </div>
</div>


<div class ="row">
    <ul class ="collapsible popout">

    <?php 
    $k=0;
foreach($jsonres as $item){

$numberofsteps=$item['numberofsteps'];
if($numberofsteps==1){
$specialtags=($item['tags']);
$typeofbus=array($item['typeofbus']);
$nameofbus=array($item['nameofbus']);
$originofbus=array($item['originofbus']);
$destofbus=array($item['destofbus']);
$getintobusatp=array($item['getinp']);
$getintobusatt=array($item['getint']);
$jumpfrombusatp=array($item['getoutp']);
$jumpfrombusatt=array($item['getoutt']);
$routeid=array($item['routeid']);
include('addcontent2.php');

}
else{
    $specialtags=($item['tags']);
    $typeofbus=($item['typeofbus']);
$nameofbus=($item['nameofbus']);
$originofbus=($item['originofbus']);
$destofbus=($item['destofbus']);
$getintobusatp=($item['getinp']);
$getintobusatt=($item['getint']);
$jumpfrombusatp=($item['getoutp']);
$jumpfrombusatt=($item['getoutt']);
$routeid=($item['routeid']);
    include('addcontent2.php');
}
$k+=1;
}
?>










        





        <!---ALL RESULTS END--->
    </ul>
</div>





</div>

    
<script>
    //SCRIPT FOR NAVIGATION COLLAPSE
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, {});
    });
    //FOR COLLAPSIBLE
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, {});
  });
  //SET THEME COLOUr

</script>
</body>

<?php
$servername="parakkumthalika.in";
        $user="parakcyy_admin";
        $password="Nirmal#21";
        $dbname="parakcyy_admin";
        $conn = new mysqli($servername, $user, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$ip=$_SERVER['REMOTE_ADDR'];
$dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
$country=$dataArray->geoplugin_countryCode;
$place=$dataArray->geoplugin_city;
$datee=date('Y-m-d H:i:s');
$userdevice=$_SERVER["HTTP_USER_AGENT"];
$sql='insert into searches values ("'.$datee.'","'.$startplace.'","'.$stopplace.'","'.$starttimea.'","'.$ip.'","'.$place.'","'.$country.'","'.$startlagmax.'","'.$minlayover.'","'.$maxlayover.'","'.$userdevice.'");';

$conn->query($sql)
 
 
 
 
 
 
 
 
 
 
 
 
 
 



?>
</html>