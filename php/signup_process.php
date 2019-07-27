<?php session_start(); ?>
    <!DOCTYPE html>

    <html lang='en'>

    <head>
        <meta charset="utf-8">
        <title>Sign Up Process</title>
    </head>


<body>

<main>


<?php

$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];

if(!isset($_POST['mailing'])){
    $mailing= "off";
}
else{
    $mailing= $_POST['mailing'];
}

if (!preg_match("/^[A-Za-z\s.'-]*$/", $name) || !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    !preg_match("/^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$/", $phone) ||
    !($mailing=="off" || $mailing=="on") {
    echo 'Illegal inputs, directing you back to the contact page';
    header("Refresh: 5; URL=signup.php");
    exit();
}

$rem_list= [$name, $email, $phone, $mailing];
$rem_input= "";

foreach($rem_list as $rem){
    $rem_input.="'".$rem."'".',';
}
$rem_input.="'".$rememberme."'";

echo '<script type="text/javascript">rem('.$rem_input.');</script>';

if($mailing=="on"){
    $file = fopen("mailing.txt","a+") or die("Unable to open file!");
    fwrite($file, "\r\n".$_POST['name']."\t".$_POST['email']."\t".$_POST['phone']);
    fclose($file);
    echo "You have successfully subscribed to our mailing list.\r\nRedirecting you to the home page.";
}
else{
    echo "You have successfully registered.\nRedirecting you to the home page.";
}
header("Refresh: 2; URL=index.php");

?>
</main>
</body>
</html>
