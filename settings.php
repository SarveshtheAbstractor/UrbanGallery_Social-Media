<style>
.container-fluid{
    color: white;
}
    .profile-pic {
  height: 8rem;
  width: 8rem;
  object-fit: center;
  border-radius: 50%;
  border: 2px solid #fff;
}
.image_area{
    position:relative;
}
    
</style>
<div class= "container-fluid" style="background: url('iceland.jpg') no-repeat center fixed;">
<div class="container" >
    <h1 class='text-center display-3'>Edit Profile</h1>
    <hr>
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
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
      
        </div>
        
        <div  class="text-center" >
            <h5 ><?php
           $query = "SELECT username FROM users WHERE id=".$_SESSION['id']."";
              $result = mysqli_query($link,$query);
              $data= $result->fetch_assoc();
              echo $data['username'];
  
          ?></h5>
            <h5 ><?php
           $query = "SELECT email FROM users WHERE id=".$_SESSION['id']."";
              $result = mysqli_query($link,$query);
              $data= $result->fetch_assoc();
              echo $data['email'];
  
          ?></h5>
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
           
<div class="alert alert-danger alert-dismissible fade show" role="alert" id="editloginAlert" style="display: none;">
     

</div>
          <div class="form-group">
              
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
                    <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text "><i class="fa fa-user" aria-hidden="true"></i></div>
    </div>
              <input class="form-control" type="email" placeholder="Email" id="email2">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
                    <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text "><i class="fa fa-user" aria-hidden="true"></i></div>
    </div>
              <input class="form-control" type="text" placeholder="Username" id="username2">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
                    <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text "><i class="fa fa-lock" aria-hidden="true"></i></div>
    </div>
              <input class="form-control" type="password" placeholder="Password" id="password2">
              </div>
            </div>
          </div>
    
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-success mr-2" value="Edit Profile" id="editProfile">
              <span></span>
              <input type="reset" class="btn btn-info" value="Reset">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
</div>


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
