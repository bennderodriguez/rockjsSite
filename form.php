<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name= test_input($_POST["name"]);
 $mail= test_input($_POST["email"]);
 $subject= test_input($_POST["subject"]);
 $sms= test_input($_POST["message"]);
}

 if (isset($name,$mail, $sms)) {
		$to = "bernita.gutierrez@gmail.com, framework.rock.js@gmail.com, rockjs@focusonservices.com, development@focusonservices.com, rosendo.navarro@focusonservices.com";
		$subject = $_POST["subject"];

		$message = "
		<html>
		<head>
		<title>Este mensaje proviene de la pagina www.focusonservices.com</title>
		</head>
		<body>
		<p>Este mensaje proviene de la pagina focusonservices.com</p>
		<p>Un cliente se ha puesto en contacto</p>
		<table>
		<tr>
		<th>".$name."</th>
		</tr>
		<tr>
		<td>".$mail."</td>
		</tr>
		</table>
		<p>".$sms."</p>
		</body>
		</html>
		";
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <focusonservices.com>' . "\r\n";
		$headers .= 'Cc: myboss@example.com' . "\r\n";

		mail($to,$subject,$message,$headers);

		
		
 }else{
	 echo "Variables NO definidas!!!";
	 header('Location: http://www.focusonservices.com/rockjs/');
 }
 
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
<title>Gracias!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="img/favicon.ico" rel="icon">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('img/forestbridge.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">

  <div class="w3-display-middle">
  <a class="hero-brand" href="http://www.focusonservices.com/rockjs/"><img alt="RockJS Framework" src="img/rock/sniglet-w.svg" width="300" alt="Transformación digital" title="Back" style="display:block;margin:0 auto 0 auto;"></a>
    <h1 class="w3-jumbo w3-animate-top">Gracias, hemos recibido su mensaje.</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">En breve nos pondremos en contacto.</p>
  </div>
</div>

</body>
</html>