<?php
include "db.php";
include "function.php";
 
$_method = $_SERVER["REQUEST_METHOD"]; // client tarafından bize gelen method
// aldığımız işlem değişkenine göre işlemler yapalım. 
if($_method  == "POST") {
    if($_SERVER['REQUEST_METHOD'] == "POST") {
 	      if(isset($_POST["name"]) && !empty(trim($_POST["name"])) && isset($_POST["email"]) && !empty(trim($_POST["email"])) && isset($_POST["point"]) && !empty(trim($_POST["point"])) && isset($_POST["message"]) && !empty(trim($_POST["message"]))) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $point = $_POST["point"];
        $message = $_POST["message"];
        $save = $db->query("INSERT INTO information (name, email, point, message) VALUES ('$name', '$email', '$point', '$message');");
        if($save) {
             echo "Votre message a été envoyé avec succès";

        
        }else {

       echo "Erreur d'enregistrement";
        }
        }else {

        echo "S'il vous plait entrez correctement vos informations";
        }
    }
}else {
    // hatalı bir parametre girilmesi durumunda burası çalışacak. 
    echo "POST HATASI!";
}

?>