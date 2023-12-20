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
//addition files
 include "section.php";
$_SESSION['user'] = "harsh";
 
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

function checkUrlForPagination($arg = ""){
echo "hp fa-2x text-";
if($arg==$URL){echo "primary";}else{echo "secondary";}
}
?>
  <title>onmet : <?php echo $_SESSION['user'];?></title>

  <!-- Custom fonts for this template-->
  <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

  <!-- Custom styles for this template-->
  
  
  <link href="./fs/css/all.css" rel="stylesheet">   
  
  
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

<?php
include "my/my.css";
?>
</style>
</head>

<body id="page-top">

  <!-- 
  pull on id-d-i_3
  -->
  

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        
        <!-- ok -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-0 static-top shado">
          <div class="BO-lap" ><!-- laptop -->
          <input class="" id="slid-nav-btn"  name="slid-nav-btn" type="checkbox" />
          <div>
          <div class="side-box" >
           <a href="#" >link</a>
           <a href="#" >link</a>
           <a href="#" >link</a>
           <hr width="100%" size="3" >
           <a href="#" >link</a>
           <a href="#" >link</a>
           
          </div>
          <label for="slid-nav-btn">
          <span class=" set-as-close_btn" >+</span>
          </label>
          </div>
          <label for="slid-nav-btn">
            <div class="container-fluid m-0 p-0" >
              <div class="p-0 m-0 row S-1" >
                <div class="p-0 col-12 pb-1 pl-2 rounded bg-primary" > <span class="B-line"> </span> </div>
                <div class="col-12 p-0 pb-1 pl-2 rounded bg-primary my-1" > <span class="B-line"> </span> </div>
                <div class="col-12 p-0 pb-1 pl-2 rounded bg-primary" > <span class="B-line"> </span> </div>
              </div>
            </div>
           
            </label>
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
         
            <div class="topbar-divider d-none d-sm-block ml-1 "></div>
            <?php $faSize = "fa-2x";?>
            <!-- for laptop -->
            	<div class="container-fluid m-0 p-0 BO-mob " >
            		<div class="row my-4 my-my ml-0" >
            		<div class="col-2 rounded " >
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
            		<div class="col-2 rounded" >
            		<a href="notification.php" class="icon-pack"> 
                  <?php include "my/mg.svg" 
                  ?>
            		</a>      				
            		</div>
            		</div>
            		
            	</div>
            
            <div class="topbar-divider BO-mob d-none d-md-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $URL;?></span>
                <img class="img-profile rounded-circle" src="img/pro.jpg">
              </a> <!--
              pull on id-d-i_2
              -->

          </ul>
          </li>
        
                </nav>
        <!-- End of Topbar -->
<!-- for mobile . -->
        <div class="container-fluid BO-lap my-auto mt-3" ><!-- laptop -->
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
            
            
            <!--  for all  -->
            <div class="col-12 mb-4">
              <div class="card border-left-primary border-r-primary shadow py-2">
                <div class="card-body mt-0 py-0">
                  <div class="row no-gutters align-items-center">
                    
                    
                    <div class="col-lg-6 col-md-6 col-12 my-bb-8181" >
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
                      <div class="my-288228" >
                      <i class="far text-primary fa-images fa-2x" id="photo-uploader" ></i>
                      <label for="photo-uploader" >photo</label>
                      </div>
                      </div>
                      <div class="col-4 d-flex align-items-center justify-content-center w-100 bx">
                      <div class="my-288228 mt-1" >
                      <i class="far fa-plus-square fa-2x text-danger" id="story"  ></i>
                      <label for="story">story</label>
                      </div>
                      </div>
                      <div class="col-4 d-flex align-items-center justify-content-center b-b w-100">
                      <div class="my-288228" >
                      <i class="far text-warning fa-play-circle fa-2x" id="video-uploader" ></i>
                      <label for="video-uploader">video</label>
                      </div>
                      </div>
                      </div>
                      </div>
                    </div>
                    
                    </div></div>
                    
                    <div class="col-lg-6 col-md-6 col-12 p-2 " >
                      <div>
                      <table>
                      
                      <thead>
                      <tr><th class="story-indicator" >stories <span></span></th></tr>
                      </thead>
                      </table>
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
           </div>
<!--
pull on id-d-i_1
-->
          
      </div>
      </div>
       
 
       <main>
       <?php 
              section('name','is and the other than that a lot more information contained herein is are the not sure you if we are can get a bit lot to see the other new year York city NY on Tue Wed Feb and I am going well as I can be a fee is a few days to be the other new year and the other than that the rest assured me know to be able in a few bit lot of a this email and then you can be get the it was a the other use it to the new York and a then I you have can get be a bit lot and');
      if (isset($_GET["NUM"])) {
        
        for($i=1;$i<$_GET["NUM"];$i++){
          
          section('name','is and the other than that a lot more information contained herein is are the not sure you if we are can get a bit lot to see the other new year York city NY on Tue Wed Feb and I am going well as I can be a fee is a few days to be the other new year and the other than that the rest assured me know to be able in a few bit lot of a this email and then you can be get the it was a the other use it to the new York and a then I you have can get be a bit lot and');
        }
   }    ?>
       </main>
       


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>