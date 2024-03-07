
<?php
$ref=$_GET['Reference'];
if(isset($ref)){

    if (isset($_GET['Fournisseur'])&& !empty($_GET['Fournisseur'])){
        
        foreach($_GET['Fournisseur'] as $fournissseur)
            echo "<li> $fournissseur</li>";
        
    }

        if(isset($_GET['PV']) && !empty($_GET['PV'])) {
            
            foreach($_GET['PV'] as $pointdevente)
                echo "<li>$pointdevente</li>";
        
    }
    else
    header('Location: article.html');
}
?>
                
        