<?php  
    include "../../modele/connexion.php";
    if(isset($_POST['idlivre']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['titrelivre']) and isset($_POST['Numero']) and isset($_POST['universite']) and isset($_POST['niveau']) and isset($_POST['datelecture'])){
        $idlivre=$_POST['idlivre'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $titrelivre = $_POST['titrelivre'];
        $Numero = $_POST['Numero'];
        $universite=$_POST['universite'];
        $niveau=$_POST['niveau'];
        $datelecture=$_POST['datelecture'];
        $sql="UPDATE avoirlivre SET nom='$nom',nom='$nom',prenom='$prenom',titrelivre='$titrelivre',Numero='$Numero',universite='$universite',niveau='$niveau',datelecture='$datelecture' WHERE idlivre= '$idlivre'";
        if($conn->query($sql)==TRUE){
            header('location:../../vue/utilisateurlivre/utilisateur.php');
        }
        else{
            echo "<script>alert(\"Donnees non modifier \");</script>";
        }
    }
?>