<?php
function section($name='name',$desc='whayahshsjsn',$src='img/photoload.JPG',$urltogo='#',$prsr='img/photoload.JPG'){
echo "<section>";
echo "\n		 <div class=\"container-fluid m-0 bg-dak py-3 p-0 w-100 mx-auto\" >";
echo "\n		   <div class=\"row my-2\" >";
echo "\n		     <div class=\"col-lg-7 col-md-7  my-r-2 col-12 px-lg-0 px-md-0 px-sm-3\" >";
echo "\n               <div class=\"card w-95 mx-auto\" >";
echo "\n		         <img src=\"{$src}\" alt=\"photo\" class=\"w-90 mx-auto \" >";
echo "\n		         <div class=\"card-body\" >";
echo "\n		           <div class=\"card-heading \" >";
echo "\n		             <div class=\"container-fluid m-0 p-0\" >";
echo "\n		               <div class=\"row my-8228118818872\" >";
echo "\n		                 <div class=\"col-3  offset-1\" >";
echo "\n		                   <input name=\"like\" type=\"checkbox\" id=\"like\" />";
echo "\n		                   <label for=\"like\" onclick=\"likeok()\">";
echo "\n		                	 <i class=\"faa fa-thumbs-up thumb fa-2x\"></i> like";
echo "\n		                   </label>";
echo "\n		                 </div>";	
echo "\n		                 <div class=\"col-4 \">";
echo "\n		                 <input name=\"comments\" type=\"checkbox\" id=\"comments\" />";
echo "\n		                 <label for=\"comments\">";
echo "\n		                   <i class=\"faa fa-comment-dots fa-2x ok\"></i> comments";
echo "\n		                   </label>";
include "comments.php";
echo "\n		                 </div>";	
echo "\n		                 <div class=\"col-3 offset- ml-2\" >";
echo "\n		                   <i class=\"faa fa-share-square fa-2x\"></i> share";
echo "\n		                 </div>";	
echo "\n		               </div>";
echo "\n		             </div>";
echo "\n		           </div>";
echo "\n		         </div>";
echo "\n            </div>";
echo "\n		     </div>";
echo "\n		     <div class=\"col-lg-4 col-md-4 col-12 BO-mob\" >";
echo "\n		       <div class=\"card w-100 mx-auto h-100\">";
echo "\n		         <div class=\"card-body\" >";
echo "\n		           <h2 class=\"card-heading my\" >";
echo "\n		             <img class=\"img-profile img-thumbnail wh-15 img-responsive rounded-circle mr-4\"";
echo "\n		              src=\"{$prsr}\" />";
echo "\n		           	  ".$name;
echo "\n		           </h2>";
echo "\n		           <p>";
echo "\n		             ".$desc;
echo "\n		           </p>";
echo "\n		         </div>";
echo "\n		       </div>";
echo "\n		     </div>";
echo "\n		   </div>";
echo "\n		 </div>";
echo "\n     </section>";
     }
   ?>