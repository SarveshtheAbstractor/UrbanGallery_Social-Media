<?php 

include("functions.php");


include("header.php");
if($_GET['page'] == "homer" && $_SESSION['id']){
    include("15.php");
     include("posts.php");
  
} else if($_GET['paged'] == "posts"){
      include("15.php");
     include("posts.php");
  
}else if($_GET['paged'] == "followers"){
    include("15.php");
      include("followers.php");
  
} else if($_GET['paged'] == "followings"){
    include("15.php");
      include("followings.php");
  
} else if($_GET['paged'] == "settings"){
      
      include("settings.php");
} else if($_GET['user']){
      
      include("profile.php");
       include("userpost.php");
} else if($_GET['usernamefs']){
    include("profile.php");
      include("followers.php");
} else if($_GET['usernamefg']){
    include("profile.php");
      include("followings.php");
} else if($_GET['usernameup']){
    include("profile.php");
      include("userpost.php");
}  else {

include("home.php");


}

include("footer.php");


?>