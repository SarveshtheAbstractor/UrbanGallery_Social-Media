<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
		<script src="https://cleviboy0718.000webhostapp.com/croppie.js"></script>

		<link rel="stylesheet" href="https://cleviboy0718.000webhostapp.com/croppie.css" />
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/color/48/000000/naruto-sign.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cleviboy0718.000webhostapp.com/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
    
    <title>ShiNobi</title>

  </head>
 <style>
     .warning1 {
  border-color: #ff9800;
  color: orange;
}

.warning1:hover {
  background: #ff9800;
  color: white;
}
 </style>
  <body>
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light" >
   <a class="navbar-brand " href="https://cleviboy0718.000webhostapp.com/">
    <img src="https://img.icons8.com/color/48/000000/naruto-sign.png" width="30" height="30" class="d-inline-block align-top" alt="">
    SHINOBI
  </a>
 
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-angle-down" aria-hidden="true"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="#" >Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Explore</a>
      </li>
     
        
      
      
    </ul>
     
            
            
            <?php 
            if($_SESSION['id']){
                
            
            ?>
             <ul class="navbar-nav">
        <li class="nav-item dropdown">
          
       <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <?php
              $query = "SELECT * FROM Profile WHERE userid=".$_SESSION['id']." ORDER BY id DESC LIMIT 1";
              $result = mysqli_query($link,$query);
              $data = $result->fetch_assoc();
              if($data['image_path']!=""){
              echo  '<img src="upload/'.$data['image_path'].'" width="40" height="40" class="rounded-circle">';}
              else{
                  echo  '<img src="download.jpg" width="40" height="40" class="rounded-circle">';}
              
              ?>
          
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="?page=homer"><i class="fa fa-user mr-2" aria-hidden="true"></i>My Profile</a>
             <div role="separator" class="dropdown-divider"></div>
         
  
          <a class="dropdown-item" href="?function=logout"><i class="fa fa-sign-out mr-2" aria-hidden="true"></i></i>Log Out</a>
        </div>
        </li> 
        <li class="nav-item">
              
        <a class="nav-link " href="#"> <img src="https://img.icons8.com/nolan/50/appointment-reminders.png" width="40" height="40" class="rounded-circle" id="notif"/></a>
      </li>
        <li class="nav-item">
              <a class="nav-link " href="?paged=settings"> <img src="https://img.icons8.com/bubbles/50/000000/edit.png" width="40" height="40" class="rounded-circle" id="notif"/></a>
        </li>
 
    </ul>
          <form class="form-inline my-2 my-lg-0" action="https://cleviboy0718.000webhostapp.com/" method="get" >
     <div class="input-group">
                <input class="form-control border-secondary py-2 search" type="text"  name="user" id="search" placeholder="Search Anything">
     
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
       
            </div>
       
   </form>
            <?php } else { ?>
      <button class="btn btn-outline-info my-2 my-sm-0 mr-2" data-toggle="modal" data-target="#exampleModal">LogIn/SignUp</button>
      
      <?php } ?>
  

         
  </div>
</nav>

         <div class="container-fluid text-center d-flex mt-2"  id="show-list">
           
          <!-- Here autocomplete list will be display -->
        </div>