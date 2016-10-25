<?php 

include('includes/header.php');

//Include functions 
include('includes/functions.php');
 
//files and also write a statement to redirect user when logged in 
 
//require database class files
require('includes/pdocon.php');

//instatiating the database objects
$db = new Pdocon;

//Collect and clean values from the form
if(isset($_POST['submit_login'])){
    
    $raw_username = cleandata($_POST['username']);
    $raw_gender = cleandata($_POST['gender']);
    $raw_email = cleandata($_POST['email']);  
    $raw_password = cleandata($_POST['password']); 

    $clean_username = sanitize($raw_username);
    $clean_gender = sanitize($raw_gender);
    $clean_email = valemail($raw_email);
    $clean_password = sanitize($raw_password);
    
    $hash_password = hashpassword($clean_password);


//Collect image and mve image to upload_image folder
    $img_file = $_FILES['image']['name'];
    $img_tmp = $_FILES['image']['tmp_name'];
    
//Move image to final location
    move_uploaded_file($img_tmp, "uploaded_image/$img_file");
    
    echo $clean_username;
    echo $hash_password;
    
    $db->query("SELECT * FROM admin WHERE email = :email");
    //System check to see if user exist
    $db->bindvalue(':email', $clean_email, PDO::PARAM_STR);
    
    $row = $db->fetchSigle();
    
    if($row){
        echo '<div class = "alert alert-danger text-center">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Bummer!</strong> User already exists. Try again!</div>';
    }else{
        $db->query("INSERT INTO admin(id, username, email, password, gender, image) 
                               VALUE(NULL, :username, :email, :password, :gender, :image)");  
        
        $db->bindvalue(':username', $clean_username, PDO::PARAM_STR);
        $db->bindvalue(':email', $clean_email, PDO::PARAM_STR);
        $db->bindvalue(':gender', $clean_gender, PDO::PARAM_STR);
        $db->bindvalue(':password', $hash_password, PDO::PARAM_STR);
        $db->bindvalue(':image', $img_file, PDO::PARAM_STR);
        
        $run = $db->execute();
            
        if($run){
            echo '<div class = "alert alert-success text-center">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Yippie!</strong> It was successful! Please login.</div>';
            
        }else{
            
            echo '<div class = "alert alert-danger text-center">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Bummer!</strong>User could not be registered! Try Again.</div>';
            
        }
        
        
    }
}


//Call function to count row



//Display error if admin exist
   

?>
  
  <div class="row">
      <div class="col-md-4 col-md-offset-4">
          <p class=""><a class="pull-left" href="admin/register_admin.php"><bold>Login</bold></a></p><br>
      </div>
      <div class="col-md-4 col-md-offset-4">
        <form class="form-horizontal" role="form" method="post" action="register_admin.php" enctype="multipart/form-data">
          <div class="form-group">
            <label class="control-label col-sm-2" for="username"></label>
            <div class="col-sm-6">
              <input type="name" name="username" class="form-control" id="username" placeholder="Your name" required>
            </div>
          </div>
          <div class="col-sm-8">
              <label class="control-label col-sm-2" for="gender"></label>
              <div class="col-sm-10">
                  <select type="" name="gender" class="form-control" id="gender">
                      <option value=''>Select gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Transgender">transgender</option>
                      <option value="NotKnown">Keep it private</option>
                  </select>
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email"></label>
            <div class="col-sm-6">
              <input type="name" name="email" class="form-control" id="email" placeholder="Enter email address" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="password"></label>
            <div class="col-sm-6"> 
              <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
            </div>
          </div>
          <div class="form-group">
             <label class="control-label col-sm-2" for="image"></label>
             <div class="col-sm-2">
<!--Do not have the image input as required, if wanted place required after placeholder-->
                 <input type="file" name="image" id="image" placeholder="Choose Image">
             </div>  
          </div>
          <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                      <label><input type="checkbox" required>Not a Robot</label>
                  </div>
              </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10 text-center">
              <button type="submit" class="btn btn-primary text-center" name="submit_login">Login</button>
            </div>
          </div>
        </form>
          
  </div>
</div>
  
  
<?php include('includes/footer.php'); ?>