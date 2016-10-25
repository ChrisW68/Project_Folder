<?php include('includes/header.php');

//Include functions  
include('admin/includes/functions.php');

//Require database class files
require('admin/includes/pdocon.php');

//instatiating  the database object
$db = new Pdocon;

//Collect and process Data on login submission

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
}


     

   

?>
  
  <div class="row">
      <div class="col-md-4 col-md-offset-4">
          <p class=""><a class="pull-right" href="admin/register_admin.php"> Register</a></p><br>
      </div>
      <div class="col-md-4 col-md-offset-4">
        <form class="form-horizontal" role="form" method="post" action="index.php">
          <div class="form-group">
            <label class="control-label col-sm-2" for="email"></label>
            <div class="col-sm-10">
              <input type="text" name="username" class="form-control" id="username" placeholder="Your name" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd"></label>
            <div class="col-sm-10"> 
              <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
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