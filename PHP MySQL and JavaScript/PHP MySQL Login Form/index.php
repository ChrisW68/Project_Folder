<?php include('includes/header.php');

//Include functions  
include('admin/includes/functions.php');

//Require database class files
require('admin/includes/pdocon.php');

//instatiating  the database object
$db = new Pdocon;

//Collect and process Data on login submission
//If the submit_login is set then get the username and password values
if(isset($_POST['submit_login'])){

    $raw_email= cleandata($_POST['email']);
    $raw_password = cleandata($_POST['password']); 

    $clean_email = valemail($raw_email);
    $hashed_password = hashpassword($raw_password);
    
    $db->query('SELECT * FROM admin WHERE email=:email AND password=:password');
    
    $db->bindValue(':email', $clean_email, PDO::PARAM_STR);
    $db->bindValue(':password', $hashed_password, PDO::PARAM_STR);
    
    $row = $db->fetchSingle();
    
    echo $row['email'];
    
    if($row){
 /*       $_SESSION['user_data']= array (
                                'email' = $row['email'];
                                'id' = $row['id'];
        
        
        )   */
        
    }else{
            
            echo '<div class = "alert alert-danger text-center">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Bummer!</strong>Password could not be found! Try Again.</div>';
        }

}


?>
  
  <div class="row">
      <div class="col-md-4 col-md-offset-4">
          <p class=""><a class="pull-left" href="admin/register_admin.php"> <bold>New User</bold></a></p><br>
      </div>
      <div class="col-md-4 col-md-offset-4">
        <form class="form-horizontal" role="form" method="post" action="index.php">
          <div class="form-group">
            <label class="control-label col-sm-2" for="email"></label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
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