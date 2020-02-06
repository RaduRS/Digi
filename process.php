<?php ob_start();

    if(isset($_POST['submit'])){
        
        $to = "rsrusu90@gmail.com";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $textarea = $_POST["textarea"];;
        $headers = "From: {$email}" . "\r\n" .
        "CC: rusu.radu.sorin@gmail.com";
        
        mail($to,$name,$textarea,$headers);
        
        header("Location: index.html");
        
    }

?>