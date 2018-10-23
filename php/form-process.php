<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = test_input($_POST["name"]);
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = test_input($_POST["email"]);
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = test_input($_POST["message"]);
}


$EmailTo = "bernita.gutierrez@gmail.com, framework.rock.js@gmail.com, rockjs@focusonservices.com, development@focusonservices.com, rosendo.navarro@focusonservices.com";

$Subject = "Ha recibido un nuevo mensaje";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Gracias, hemos recibido su mensaje. \n En breve nos pondremos en contacto.";
}else{
    if($errorMSG == ""){
        echo "Algo salió mal ¯\_(シ)_/¯ \n Intentelo nuevamente";
    } else {
        echo $errorMSG;
    }
}


  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>