<?php 


if ($_POST['submit']) {
	if (!$_POST['name']) {
		$error.="</br>- Please enter your name";
	}
	if (!$_POST['email']) {
		$error.="</br>- Please enter your email";
	}
	if (!$_POST['message']) {
		$error.="</br>- Please enter your message";
	}
	if (!$_POST['check']) {
		$error.="</br>- Verify that your real";
	}
	if($error) {
		$result='<div class="alert alert-danger" role="alert"><strong>Uh Oh, there is a problem.</strong> You are missing the following information: '.$error.'</div>';
	}else{
		
		
		mail("chris.wiseman74@gmail.com, cwiseman.eng@gmail.com", "Contact Message", 
		"Name: ".$_POST['name']." 
		Email: ".$_POST['email']."
		Mesage: ".$_POST['message']);
		{
			$_POST = array();  //Replaces code to empty form contents
			$result='<div class="alert alert-success" role="alert"> Thank you, I will contact you shortly</div>';
		}
	}
}
?>

<link href="../css/main.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">

<div class="col-md-6 wow animated fadeInLeft" align="left" id="contactme">
  <h1>Feel free to contact me!</h1>
  <?php echo $result; ?>
  <p>Send a message via the form below</p>
  
  <form method="post" role="form">
    <div class="form-group">
        <div class="col-lg-6 form-group" align="left">
            <input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name']; ?>">
        </div>
        <div class="col-lg-6 form-group" align="left">
            <input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email']; ?>">
        </div>
        <div class="form-group">
          <textarea name="message" rows="4" class="form-control" placeholder="message .. "><?php echo $_POST['message']; ?></textarea>
        </div>
        <div class="checkbox" align="left">
            <label>
                  <input type="checkbox" name="check">I'ms real!
          </label>
        </div>
        <div align="center">
            <input type="submit" name="submit" class="btn btn-secondary" value="send message"/>
        </div>
    </div>
  </form>
</div>

