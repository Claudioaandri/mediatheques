<?php  
    include "../../modele/connexion.php";
    if(isset($_POST['idemp']) and isset($_POST['im']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['responsabilite']) and isset($_POST['phone'])){
        $idemp=$_POST['idemp'];
        $im = $_POST['im'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $responsabilite = $_POST['responsabilite'];
        $phone = $_POST['phone'];

        $sql="UPDATE emprunt SET im='$im',nom='$nom',prenom='$prenom',responsabilite='$responsabilite',phone='$phone' WHERE idemp= '$idemp'";
        if($conn->query($sql)==TRUE){
            header('location:../../vue/specifique/listborrowers.php');
        }
        else{
            echo "<script>alert(\"Donnees non modifier \");</script>";
        }
    }
?>