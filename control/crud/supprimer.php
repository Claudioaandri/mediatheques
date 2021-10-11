<?php  
    include "../../modele/connexion.php";
      $iddisp=$_GET['iddisp'];
        $sql="DELETE FROM dispolivre WHERE iddisp=$iddisp";
        if($conn->query($sql)==TRUE){
            header('location:../../vue/disponibilite/dispoaffiche.php');
        }
        else{
            echo "<script>alert(\"Donnees non supprimer\");</script>";
        }
?>