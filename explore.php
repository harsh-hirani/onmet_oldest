<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<?php
session_start(); 

$_SESSION['user'] = "harsh";
if(isset($_GET['mood'])){
?><script>
var LA = confirm("so, your mood is <?php echo $_GET['mood']; ?>");
</script><?php
}
if(isset($_GET['what'])){
?><script>
var LA = confirm("you searched for <?php echo $_GET['what']; ?>");
//document.getElementById("ok").innerHTML = LA;
//document.getElementById("sidebarToggle")
</script><?php
$useOfPost = $_GET['what'];
}else
{$useOfPost = "Harsh Hirani"; 
 }
 
 
 $FURL = $_SERVER['REQUEST_URI'];
$URL = str_replace("/onmet","",$FURL);

$keysofGET = array_keys($_GET);
$URL = str_replace("?",'',$URL);
for($ii=0;$ii<sizeof($_GET);$ii++){
$key=$keysofGET[$ii];
$URL = str_replace($key,"",$URL);
$URL = str_replace('=',"",$URL);
$URL = str_replace($_GET[$key],"",$URL);
if($ii<(sizeof($_GET) - 1)){
continue;
}$URL = str_replace('&',"",$URL);
}$URL = str_replace("index.php","",$URL);

function checkUrlForPagination($arg=""){
echo "hp fa-2x text-";
if($arg==$URL){echo "primary";}else{echo "secondary";}
}
?>
  <title>onmet : <?php echo $_SESSION['user'];?></title>

  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  
  
  <link href="../fs/css/all.css" rel="stylesheet"> <!--load all styles --
  <i class="fas fa-user"></i> <!-- uses solid style --
  <i class="far fa-user"></i> <!-- uses regular style --
  <i class="fal fa-user"></i> <!-- uses light style -->
  <!--brand icon--
  <i class="fab fa-github-square"></i> <!-- uses brands style -->

  
  
  
  <link href="css/sb-admin-2.css" rel="stylesheet">
<style type="text/css">
.b-b input {
height: auto;
width:100%;
border:2px solid rgba(0,0,0,.8);
padding: 20px;
border-radius:9px;
outline:none;
margin-bottom:10px;
max-height:56px;

}hr{height: 10px;}
.b-b input:focus,
.b-b input:hover{
border-color:#4e73df;
}
.bx{
margin-bottom:10px;/*
border-bottom:4px solid green;*/
border-left :2px dashed black;
border-right :2px dashed black;
}
#content{

display: fixed;
right:0;margin-left:auto;
top:0;
}
<?php
include "my/my.css";
?>
</style>
</head>

<body id="page-top">

  <!-- Page Wrapper 
  
  
  
  <aside class="aside"  id="laphide" >
  	<div class="container-fluid m-0 p-0" >
  	  <div class="row">
  	    <div class="col-12">
  	      <h2> story </h2>
  	      <span></span>
  	    </div>
  	  </div>
  	</div>
  </aside>

-->
  

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        
        <!-- ok -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-0 static-top shado">
          <div class="BO-lap" >
            <button class="btn" >
            <div class="container-fluid m-0 p-0" >
              <div class="p-0 m-0 row S-1" >
                <div class="p-0 col-12 pb-1 pl-2 rounded bg-primary" > <span class="B-line"> </span> </div>
                <div class="col-12 p-0 pb-1 pl-2 rounded bg-primary my-1" > <span class="B-line"> </span> </div>
                <div class="col-12 p-0 pb-1 pl-2 rounded bg-primary" > <span class="B-line"> </span> </div>
              </div>
            </div>
            </button>
          </div>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block ml-sm-4 ml-md-1 ml-lg-1 form-inline mr-auto ml-md-5 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" name="what"  class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary BO-mob" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
          
          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
            </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-out" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto  w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" name="what" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            

            <!-- Nav Item - Messages -->
         
            <div class="topbar-divider d-none d-sm-block ml-1"></div>
            <?php $faSize = "fa-2x";?>
            	<div class="container-fluid m-0 p-0 BO-mob " >
            		<div class="row" >
            		<div class="col-2 rounded offset-1" >
            		<a href="/" class="icon-pack"> 
            		<i class="fas fa-home fa-2x <?php echo $faSize;?><?php checkUrlForPagination();?>"></i>   
            		</a>      				
            		</div>
            		<div class="col-2 rounded" >
            		<a href="friends.php" class="icon-pack"> 
            		<i class="fas fa-users <?php echo $faSize;?><?php checkUrlForPagination('/friends.php');?>"></i>   
            		</a>      				
            		</div>
            		<div class="col-2 rounded" >
            		<a href="explore.php" class="icon-pack"> 
            		<i class="fas fa-compass <?php echo $faSize;?><?php checkUrlForPagination('/explore.php');?>"></i>   
            		</a>      				
            		</div>
            		<div class="col-2 rounded" >
            		<a href="notification.php" class="icon-pack"> 
            		<i class="fas fa-bell <?php echo $faSize;?><?php checkUrlForPagination('/notification.php');?>"></i>   
            		</a>      				
            		</div>
           			<div class="col-2 rounded" >
               		<a class="icon-pack" href="inbox.php" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   					<i class="fas fa-envelope fa-fw <?php echo $faSize;?><?php checkUrlForPagination('/inbox.php');?>"></i>
  					</a>
            		</div>
           			<div class="col-2"></div>
            		</div>
            	</div>
            
            <div class="topbar-divider BO-mob d-none d-md-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $useOfPost.$URL;?></span>
                <img class="img-profile rounded-circle" src="img/pro.jpg">
              </a>
              <!-- Dropdown - User Information --
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>-->

          </ul>
          </li>
        
                </nav>
        <!-- End of Topbar -->

        <div class="container-fluid BO-lap mb-3" >
        <div class="row" >
        <div class="col-2 offset-1 rounded px-aut" >
        <a href="index.php" class="icon-pack"> 
        <i class="fas fa-home <?php checkUrlForPagination();?>"></i>   
        </a>      				
        </div>
        <div class="col-2 rounded px-aut" >
        <a href="friends.php" class="icon-pack">   <!--<i class="far fa-user"></i> <!-- uses regular style -->
        <i class="fas fa-users <?php echo $faSize;checkUrlForPagination('/friends.php');?>"></i>   
        </a>      				
        </div>
        <div class="col-2 rounded px-aut" >
        <a href="explore.php" class="icon-pack"> 
        <i class="fas fa-compass <?php echo $faSize;checkUrlForPagination('/explore.php');?>"></i>   
        </a>      				
        </div>
        <div class="col-2 rounded px-aut" >
        <a href="notification.php" class="icon-pack"> 
        <i class="fas fa-bell <?php echo $faSize;checkUrlForPagination('/notification.php');?>"></i>   
        </a>      				
        </div>
        <div class="col-2 rounded  px-aut" >
        <a class="icon-pack" href="inbox.php" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw <?php echo $faSize;checkUrlForPagination('/inbox.php');?>"></i>
        
        </a>
        </div>
        </div>
        
        
        
        <!--  lining part  -->
        
        <div class="row">
        <hr class="icon-line" />
        
        
        </div>
        <!--  lining part  end  -->
        </div>
        
        <!-- Begin Page Content -->
        <div class="bg-light mt-0 pt-0 container-fluid">

        

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            
            
            <!--  for laptop -->
            <div class="col-12 mb-4 BO-mob">
              <div class="card border-left-primary border-r-primary shadow h-100 py-2">
                <div class="card-body mt-0 py-0">
                  <div class="row no-gutters align-items-center">
                    
                    
                    <div class="col-6" >
                    <div class="row" >
                    
                    
                    <div class="col-lg-12 col-md-12 m-0 block-top" >
                      <label for="mood" > what is your mood?...</label>
                    </div>
                    
                    
                    <div class="col-12 m-0 b-b block" >
                    <div class="container ">
                    <div class="row">
                    <div class="col-12">
                    <form>
                      <input id="mood" name="mood" type="text"  placeholder="tell us ..." >
                    </form>
                      </div>
                      <div class="col-4 align-items-center d-flex justify-content-center b-b w-100">
                      <img src="img/photo.svg" height="40" width="40" alt="photo" />
                      </div>
                      <div class="col-4 d-flex align-items-center justify-content-center w-100 bx">
                      <img src="img/photo.svg" height="40" width="40" alt="story" />
                      </div>
                      <div class="col-4 d-flex align-items-center justify-content-center b-b w-100">
                      <img src="img/photo.svg" height="40" width="40" alt="video" />
                      </div>
                      </div>
                      </div>
                    </div>
                    
                    </div></div>
                    
                    <div class="col-6 p-2 " >
                      <div>
                      <table>
                      
                      <thead>
                      <tr><th class="story-indicator" >stories <span></span></th></tr>
                      </thead>
                      </table><!--<table>
                      <tbody><tr class="story-tr" >
                      <?php
                      $count = 5;
                      $name = array("harsh","zeel","krish","deep","kunj","rudra");
                      for($i=0;$i<=$count;$i++){
                      echo " <td>";
                      echo $name[$i];echo "</td>\n";
                      }
                      ?></tr>
                      </tbody>
                      </table>-->
                      <div class="story-row" ><div class="story-bel" >
                	  	<?php
$count = 5;
$name = array("harsh","zeel","krish","deep","kunj","rudra");
for($i=0;$i<=$count;$i++){
echo "<div class=\" story-card\">";
echo "<h2 class=\"story-name\">"; echo $name[$i]; echo"</h2>";
echo "</div>";
}
                	  	?></div>
                      </div>
                      </div>
                    </div>
                   </div>
                </div>
              </div>
            </div>
            
            
            <!-- for mobile -->
            
            
            <div class="col-12 mb-4 BO-lap">
            <div class="card border-left-primary border-r-primary shadow h-100 py-2">
            <div class="card-body mt-0 py-0">
            <div class="row no-gutters align-items-center">
            <div class="col-lg-2 col-md-2 col-12 m-0" >
            <label for="mood" > what is your mood?...</label>
            </div>
            <div class="col-lg-8 col-md-8 col-12 m-0 b-b" >
            <div class="container ">
            <div class="row">
            <div class="col-12">
            <form>
            <input id="mood" name="mood" type="text"  placeholder="tell us ..." >
            </form>
            </div>
            <div class="col-4 align-items-center d-flex justify-content-center b-b w-100">
            <img src="img/photo.svg" height="40" width="40" alt="photo" />
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center w-100 bx">
            <img src="img/photo.svg" height="40" width="40" alt="story" />
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center b-b w-100">
            <img src="img/photo.svg" height="40" width="40" alt="video" />
            </div>
            </div>
            </div>
            </div>
            <div class="col-12" >
            <div >
            
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            
            
            
            
            
            </div>
       <!--     <main>
            <div class="container-fluid m-0 p-0" >
            <div class="row" >
   <?php /*
   if(isset($_GET['num'])){$_GOTTED=$_GET['num'];}else{$_GOTTED=20;}
for($i=1;$i<=$_GOTTED;$i++){
if ($i%3==0){
$start = "<div class=\" col-6\">";
$ad ="advertising ";
$in = "<h1 class=\" text-center text-light\"> {$ad} </h1>";
$end = "</div>";
echo "{$start} {$in} {$end}";
}else{
$btns = "col-4 d-flex justify-content-center align-items-center btn ";
$col = "12";
$lable1 = "<label for=\"a{$i}\"> like</label>";
$lable2 = "<label for=\"b{$i}\"> comment</label>";
$lable3 = "<label for=\"c{$i}\">share</label>";
$tag = "<input type=\"checkbox\" value=\"";
$tag1="{$tag}like\" id=\"a{$i}\">";
$tag2="{$tag}comment\" id=\"b{$i}\">";
$tag3="{$tag}share\" id=\"c{$i}\">";
$likeBtn="";$in = ">";
$pos = "d-flx justifyontent-center alig";
echo "<div class=\"col-lg-{$col} col-md-{$col} col-12 p-2 w-100 {$pos}\" >\n<!--<div style=\"width:100%;height: 200px;background: #1121fe;margin-bottom: 10px;\">";
echo "--{$in}<div class=\"container-fluid p-0 m-0\"><div class=\" row\"><div class=\"col-8\"><div class=\" card w-100\">\n";
echo "<img class=\"image-fluid rounded card-image\" SRC=\"img/photoload.JPG\" alt=\"image\">";
echo "\n<div class=\" card-body\">";
echo "\n<div class=\"p-0 container-fluid\" ><div class=\"row\" >";
echo "\n<div class=\" {$btns}\">";
include "vendor/fontawesome-free/svgs/regular/heart.svg";
echo " {$likeBtn}";
echo " \n<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"blue\" viewBox=\"0 0 512 512\"><path d=\"M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z\"/></svg>";
echo " {$tag1} {$lable1} </div>";
echo "\n<div class=\" {$btns}\"> {$tag2} {$lable2} </div>";
echo "\n<div class=\" {$btns}\"> {$tag3} {$lable3} </div>";
echo "\n</div>\n</div>";//container ends
echo "\n</div>";//card body ends
echo "\n</div>";//card over
echo "\n</div>";//left col over
///////////########################@@@@@@@@@@@@@@@@@@@@@@@@@
// right side 
echo "\n<div class=\" col-4\">";
///////////########################@@@@@@@@@@@@@@@@@@@@@@@@@
//------_-------------_------------_------------------------
echo "\n<div class=\" w-50 container-fluid p-0 m-0\">";
echo "\n<div class=\" row\">";

echo "\n<div class=\" col-12\">";
echo "\n<div class=\" user w-100 rounded p-4 bg-secondary \">";
echo "\n<a href=\"/{$useOfPost}\">";
echo "\n<h2 class=\" text-center text-white\">";
echo $useOfPost;
echo "\n</h2>";
echo "\n</a>";
echo "\n</div>"; 
echo "\n</div>"; 
echo "\n</div>";
echo "\n</div>\n</div>\n</div>";
echo "\n</div>";//side div ends
//------_-------------_------------_------------------------
///////////########################@@@@@@@@@@@@@@@@@@@@@@@@@
//right side ends
///////////########################@@@@@@@@@@@@@@@@@@@@@@@@@
echo "\n</div>\n</div>\n\n\n";
}

}*/
   ?></div>
            </div>
            </main>-->
            
            
          
            </div>
       </div>
       
       
       
       
       
       
       
       
       
       
       
       <main>
       <?php include "section.php";
       for($i=1;$i<$_GET["NUM"];$i++){
       include "section.php";}
       ?>
       </main>
       
       
       
       
       
       
       
       
       
       
      <footer class="sticky-footer bg-white w-90 mx-auto">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Onmet <?php echo "20".date('y');?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer --
    <!-- End of Content Wrapper -->

  
  <!-- End of Page Wrapper -->

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
 <?php
  echo "$URL. <pre>";
  echo count($_GET);
  print_r($_GET);?>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages--
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins --
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts --
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>-->
  <script type="text/javascript" src="self/myreact.js"></script>
<script type="text/javascript">
let like = False;
document.getElementById("like").addEventListener("click", (like)=>{
if(like = True;){like = False;}
if(like = False;){like = True;}
});
if(like = True;){
document.getElementsByClassName("thumb").
}else if(like = False;){
}
</script>
</body>

</html>