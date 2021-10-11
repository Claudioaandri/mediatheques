<?php  
    include "../../modele/connexion.php";
      $id=$_GET['id'];
        $sql="DELETE FROM feuil1 WHERE id=$id";
        if($conn->query($sql)==TRUE){
            header('location:../../vue/assets/category.php');
        }
        else{
            echo "<script>alert(\"Donnees non supprimer\");</script>";
        }
?>