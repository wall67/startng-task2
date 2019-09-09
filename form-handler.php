<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $emailform = $_POST['email'];
    $title = $_POST['title'];
    $message = $_POST['msg'];


    $emailTo = "aderojuadewale*@gmail.com";
    $headers = "from: ".$emailfrom;
    $text = "you have receive an email from ".$name.".\n\n.$message;

    mail($emailTo, $title, $txt,$headers);
   




}

echo " ".$name." ".$email." ".$title." ".$message;

?>