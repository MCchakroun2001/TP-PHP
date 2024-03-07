<?php
    
    if (isset($_GET['login']) && isset($_GET['password'])) {
        
        if($_GET['login']=='admin'&&$_GET['password']=='admin'){
            echo "Vous êtes connecté";
        }
        else{
            header( 'Location: authentification.html');
        } 
}































































