
<?php

if(isset($_POST['submit']) && isset($_POST['message'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg = nl2br($_POST['message']);
    $sub=$_POST['subject'];
    $to='krnkumar663@gmail.com';
    $subject='[Consulting form submission] - from portfolio';
    $message = '<b>Name:</b> '.$name.' <br><b>Email:</b> '.$email.' <br><b>Subject:</b> '.$sub.' <br> <p>'.$msg.'</p>';
    $headers="from:".$email;
    if(mail($to,$subject,$message,$headers)){
      $status="Success";
      $message="Contact form successfully submitted. Thank you, We will get back to you soon!";
        $serialized_data = '{"type":"success", "message":"Contact form successfully submitted. Thank you, I will get back to you soon!"}';


    }
    else {
      $status="Falied";
        $serialized_data = '{"type":"danger", "message":"Contact form failed. Please send again later!"}';
        $message="Contact form failed. Please send again later!";


    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>404 Page Not Found</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet">

	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="csserror/font-awesome.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="csserror/style.css" />



</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-bg">
				<div></div>
				<div></div>
				<div></div>
			</div>
			<h1> <?php
         echo $status;
         ?></h1>
			<h2> <?php
         echo $message;
         ?></h2>
		       <h4>please  wait till we redirect to website</h4>
           <div class="spinner-border text-danger"></div>



		</div>
	</div>
 <script>
         setTimeout(function(){
            window.location.href = 'contact.html';
         }, 5000);
      </script>

</body>

</html>
