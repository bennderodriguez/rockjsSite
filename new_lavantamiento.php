<?php

$ln = "\n";
$errorMSG = "";
$date = strtotime(date("d-m-Y H:i:00", time()));


if (empty($_REQUEST)) {
    $errorMSG = "DLC is required ";
} else {
    $age = $_REQUEST;
}
// param
if (empty($_POST["company"])) {
    $errorMSG = "company is required ";
} else {
    $company = $_POST["company"];
}

if ($errorMSG == "") {

    $configuration = fopen("levantamiento/$date-$company.json", "w") or die("Unable to open file!");

    $myJSON = json_encode($age,JSON_PRETTY_PRINT);
    fwrite($configuration, $myJSON . $ln);
    fclose($configuration);
    echo "success";
    //header('Location: http://www.focusonservices.com/rockjs/rockjsinfo.php?r=1');
    header('Location: https://www.focusonservices.com/rockjs/rockjsinfo.php?r=1');
} else {
    if ($errorMSG == "") {
		//header('Location: http://www.focusonservices.com/rockjs/rockjsinfo.php?r=1&msg='+$errorMSG);
        echo "Something went wrong";
        echo $errorMSG;
    } else {
        echo $errorMSG;
    }
}
?>