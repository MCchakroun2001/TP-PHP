
<?php
require_once 'User.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $user = new User($login, $password);


    if ($user->connect()) {
  
        echo $user;
    } else {
     
        echo "Échec de la connexion. Vérifiez vos informations d'identification.";
    }
}
 ?>    

