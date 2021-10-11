<?php  
    include "../../modele/connexion.php";
    if(isset($_POST['id']) and isset($_POST['titre']) and isset($_POST['editionlivre']) and isset($_POST['auteur']) and isset($_POST['nombre']) and isset($_POST['rangelivre']) and isset($_POST['caselivre']) and isset($_POST['numerolivre']) and isset($_POST['categorie'])) {
        $id=$_POST['id'];
        $titre = $_POST['titre'];
        $edition = $_POST['editionlivre'];
        $auteur = $_POST['auteur'];
        $nombre = $_POST['nombre'];
        $rangelivre=$_POST['rangelivre'];
        $caselivre=$_POST['caselivre'];
        $numerolivre=$_POST['numerolivre'];
        $categorie = $_POST['categorie'];

        $sql="UPDATE feuil1 SET titre='$titre',editionlivre='$edition',auteur='$auteur',nombre='$nombre',rangelivre='$rangelivre',caselivre='$caselivre',numerolivre='$numerolivre',categorie='$categorie' WHERE id= '$id' ";
        if($conn->query($sql)==TRUE){
            header('location:../../vue/assets/category.php');
        }
        else{
            echo "<script>alert(\"Donnees non modifier \");</script>";
        }
    }
?>