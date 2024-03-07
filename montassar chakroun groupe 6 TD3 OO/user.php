<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user </title>
</head>
<body>
    
<?php
class User {
    private $login;
    private $password;

    public function __construct($login, $password) {
        $this->login = $login;
        $this->password = $password;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function __isset($property) {
        return isset($this->$property);
    }

    public function __toString() { //Appelée lorsque l'on essaie d'afficher directement l'objet : 
        return "Connexion réussie avec le login de l'utilisateur : {$this->login}";
    }

    public function connect() {
        if ($this->login === 'admin' && $this->password === 'admin')
            return true;
            else
            return false;
        }

    }




?>
</body>
</html>