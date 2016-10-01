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
		$result="Uh Oh, there is a problem. You have a problem here: $error";
	}else{
		
		
		mail("chris.wiseman74@gmail.com", "Contact Message", 
		"Name: ".$_POST['name']." 
		Email: ".$_POST['email']."
		Mesage: ".$_POST['message']);
		{
			$result="Thank you, I will contact you shortly";
		}
	}
}
?>
<div class="col-md-6 wow animated fadeInLeft" align="left">
  <h1>Contact form</h1>
  <?php echo $result; ?>
  <p>Send a message via the form below</p>
  
  <form method="post" role="form">
    <div class="form-group">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Your name">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Your email">
        </div>
        <div class="form-group">
            <textarea name="message" rows="4" class="form-control" placeholder="message .. "></textarea>
        </div>
        <div class="checkbox" align="left">
            <label>
                <input type="checkbox" name="check">I am real!
            </label>
        </div>
        <div align="center">
            <input type="submit" name="submit" class="btn btn-secondary" value="send message"/>
        </div>
      </div>
    </form>
</div>

