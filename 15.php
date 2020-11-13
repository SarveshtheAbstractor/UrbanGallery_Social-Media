
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <title>Hello, world!</title>
    	<script src="https://cleviboy0718.000webhostapp.com/croppie.js"></script>

		<link rel="stylesheet" href="https://cleviboy0718.000webhostapp.com/croppie.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" />


  
  </head>
 
  <style> 



		.preview {
  			overflow: hidden;
  			width: 160px; 
  			height: 160px;
  			margin: 10px;
  			border: 1px solid red;
		}

		.modal-lg{
  			max-width: 1000px !important;
		}
		.modal-lg img{
		    
		    	display: block;
		    
		  	max-width: 100%;
		}
  body {
  margin: 0;
  "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.header {
  min-height: 60vh;
  background: #009FFF;
background: url("iceland.jpg");

background-size: cover;
  color: white;
  clip-path: ellipse(100vw 60vh at 50% 50%);
  display: flex;
  align-items: center;
  justify-content: center;
}

.details {
  text-align: center;
}

.profile-pic {
  height: 8rem;
  width: 8rem;
  object-fit: center;
  border-radius: 50%;
  border: 2px solid #fff;
}


.stats {
  display: flex;
}

.stats .col-4 {
  width: 7rem;
  text-align: center;
}

.heading {
  font-weight: bold;
  font-size: 1.3rem;
  margin: 1rem 0;
}
.textmsg{
    font-weight: 200;
  font-size: 1.3rem;
  margin: 1rem 0;
}
    .masonry { /* Masonry container */
    -webkit-column-count: 4;
  -moz-column-count:4;
  column-count: 4;
  -webkit-column-gap: 1em;
  -moz-column-gap: 1em;
  column-gap: 1em;
   margin: 1.5em;
    padding: 0;
    -moz-column-gap: 1.5em;
    -webkit-column-gap: 1.5em;
    column-gap: 1.5em;
    font-size: .85em;
}
.image_area {
            position: relative;
        }

    
.item {
    display: inline-block;
    background: #fff;
    padding: 0.5em;
    margin: 0 0 1em;
    width: 100%;
    -webkit-transition:1s ease all;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-shadow: 2px 2px 4px 0 #ccc;
}
.item img{width:100%;}


@media only screen and (max-width: 320px) {
    .masonry {
        -moz-column-count: 1;
        -webkit-column-count: 1;
        column-count: 1;
    }
}

@media only screen and (min-width: 321px) and (max-width: 768px){
    .masonry {
        -moz-column-count: 2;
        -webkit-column-count: 2;
        column-count: 2;
    }
}
@media only screen and (min-width: 769px) and (max-width: 1200px){
    .masonry {
        -moz-column-count: 3;
        -webkit-column-count: 3;
        column-count: 3;
    }
}
@media only screen and (min-width: 1201px) {
    .masonry {
        -moz-column-count: 4;
        -webkit-column-count: 4;
        column-count: 4;
    }
}



  </style>
  <body>
    
    <section class="profile">
  <header class="header">
    <div class="details">
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="ninja" style="display:none">
  <strong>Profile Pic!</strong> Uploaded
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
   <div class="image_area">
                    <form method="post">
                        <label for="upload_image">
                               <?php
              $query = "SELECT * FROM Profile WHERE userid=".$_SESSION['id']." ORDER BY id DESC LIMIT 1";
              $result = mysqli_query($link,$query);
              $data = $result->fetch_assoc();
              if($data['image_path']!=""){
              echo  '<img src="upload/'.$data['image_path'].'" id="uploaded_image" style ="height: 120px; width: 120px;"class="profile-pic" />';}
              else{
                  echo  '<img src="download.jpg" id="uploaded_image" style ="height: 120px; width: 120px;"class="profile-pic" />';}
              
              ?>
                           
            
                            <input type="file" name="image" class="image" id="upload_image" style="display:none" />
                        </label>
                    </form>
                </div>
      
      <h1 class="heading">
          <?php
              
           $query = "SELECT username FROM users WHERE id=".$_SESSION['id']."";
              $result = mysqli_query($link,$query);
              $data= $result->fetch_assoc();
              echo $data['username'];
  
          ?>
          
          
          
          </h1>
          <h1 class="textmsg">
                <?php
         $query = "SELECT email FROM users WHERE id=".$_SESSION['id']."";
              $result = mysqli_query($link,$query);
             $data= $result->fetch_assoc();
              echo $data['email'];
          ?>
          </h1>
       <h1 class="textmsg">Always Protecting from Shadows.</h1>
    
      <div class="stats">
        <div class="col-4">
          <h4 id="posts">
                  <?php
              $query = "SELECT id FROM images WHERE userid=".$_SESSION['id']."";
              $result = mysqli_query($link,$query);
              $data = mysqli_num_rows($result);
              echo $data;
              ?>
              
          </h4>
          <a href="?paged=posts" style="text-decoration: none; color:white">
               
               Posts
               
               </a>
        </div>
        <div class="col-4">
          <h4 id="followers">
                 <?php
              $query = "SELECT follower FROM isFollowing WHERE isFollowing=".$_SESSION['id']."";
              $result = mysqli_query($link,$query);
              $data = mysqli_num_rows($result);
              echo $data;
              ?>
              
          </h4>
          <a href="?paged=followers" style="text-decoration: none; color:white"> Followers</a>
        </div>
        <div class="col-4">
          <h4 id="followings">
              
                <?php
              $query = "SELECT isFollowing FROM isFollowing WHERE follower=".$_SESSION['id']."";
              $result = mysqli_query($link,$query);
              $data = mysqli_num_rows($result);
              echo $data;
              ?>
              
          </h4>
          <a href="?paged=followings" style="text-decoration: none; color:white">  Followings
          </a>
        </div>
      </div>
    </div>
  </header>
</section>

   <div id="uploadimageModal" class="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Upload & Crop Image</h4>
      		</div>
      		<div class="modal-body">
        		<div class="row">
  					<div class="col-md-8 text-center">
						  <div id="image_demo" style="width:350px; margin-top:30px"></div>
  					</div>
  					<div class="col-md-4" style="padding-top:30px;">
  						<br />
  						<br />
  						<br/>
						  <button class="btn btn-success crop_image">Crop & Upload Image</button>
					</div>
				</div>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    	</div>
    </div>
</div>

