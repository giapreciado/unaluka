<?php
if (isset($_POST['submit'])) {
      
    $name = $_POST['name'];
    $subject = 'Pregunta por formulario de la web';
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];      
    // Set your email address where you want to receive emails. 
    $mailto = 'pedidos@unalukaflash.com';
    $headers = "From: ".$name." <".$mailFrom."> \r\n";
    $txt = "Recibiste un email de".$name.".\n\n".$message; 
      
    mail($mailto,$subject,$message,$headers);
      
    header("Location: index.html?mailsend");
      
}
?>