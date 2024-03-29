
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$to="yashamte72@gmail.com";
$subject="test mail";
$messege="just wanted to test whats going on";
$from="localhost:3000/r/n";
$headers="from : $from";

if(mail($to, $subject, $message, $header)==true){
    echo "mail sent";
}else{
    echo " mail not sent";
}
?>
</body>
</html>