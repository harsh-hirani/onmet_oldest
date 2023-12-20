<?php
// session_start();
//include "con.php";

//$sql = "SELECT id, f, l FROM my";
//$result = mysqli_query($con, $sql);
//print_r($result);
//while(
//$row = mysqli_fetch_assoc($result)){
// $row =$result->fetch_assoc();
//print_r($row);
//}
?>

<div class="comments-box-div shadow" >
<label class="my-8282727 mr-5"  for="comments">
<i class="far fa-window-close text-warning fa-2x ml-auto" ></i>
</label>
<div>
  <!--  make it by php  -->
  <div class="oth-comment">
    <span><!--  add others comments  -->dummy comment</span>
    </div>
    <div class="row mx-auto ">
      <div class="col-4"> <i class="far fa-heart ">like</i></div>
      <div class="col-4"> <i class="faa fa-share-square reply">reply</i></div>
      <div class="col-4"> <i class="fa fa-exclamation-triangle">report</i></div>
    </div>
</div>
<div class="container-fluid go-down" >

<form class="user" >
	<div class="row" >
		<div class="col-lg-10 col-md-10 col-9" >
			<div class="form-group">
				<input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Your Comment...">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-3">
			<div class="form-group">
				<input type="submit" class="btn btn-primary btn-outline-secondary btn-user text-white my-bu-size">
			</div>
		</div>
	</div>
</form>

</div>
</div>	