<?php ob_start();        // cmd za funkcionisanje headera 

 if (isset($_POST['submit'])) {
            
    $to = "bicokd@hotmail.com";
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $txt = $_POST['message'];
    $headers = "From: " .$email . "\r\n" .
    "CC: tidbicok@protonmail.com";

        mail ($to, $subject, $txt, $headers);

        header ("Location: contact.html");
}

 if ($txt == true) {
        echo "Your message is sent successfully!";
} else { 
        echo "Try again.";
}

?>