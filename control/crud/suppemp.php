<?php  
    include "../../modele/connexion.php";
      $idmembre=$_GET['idmembre'];
        $sql="DELETE FROM membrebibliotheque WHERE idmembre='$idmembre'";
        if($conn->query($sql)==TRUE){
            header('location:../../vue/specifique/afficheemprunt.php');
        }
        else{
            echo "<script>alert(\"Donnees non supprimer\");</script>";
        }
?>