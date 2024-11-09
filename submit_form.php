<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    echo "İsim: $name<br>Email: $email<br>Mesaj: $message";
} else {
    echo "Form gönderilemedi.";
}
?>
