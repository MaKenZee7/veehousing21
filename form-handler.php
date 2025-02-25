<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $clientName = htmlspecialchars($_POST['clientName']); 

    $checkInDate = htmlspecialchars($_POST['checkInDate']); 

    $checkOutDate = htmlspecialchars($_POST['checkOutDate']); 

     

    // Email details 

    $to = "leondaviseso@gmail.com"; // Replace with your email address 

    $subject = "New Client Check-In Request"; 

    $message = "Client Name: " . $clientName . "\n" . 

               "Check-In Date: " . $checkInDate . "\n" . 

               "Check-Out Date: " . $checkOutDate; 

    $headers = "From: clients@gmail.com"; // Replace with a valid sender email 

 

    // Send email 
    if (mail($to, $subject, $message, $headers)) { 
        echo "<h3>Request sent successfully!</h3>"; 
    } else { 
        echo "<h3>There was an error sending your request. Please try again.</h3>"; 
    } 
} 

?> 

 