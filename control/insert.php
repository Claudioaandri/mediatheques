<?php
include "../modele/connexion.php";
if(isset($_POST['titre']) and isset($_POST['editionlivre']) and isset($_POST['auteur']) and isset($_POST['nombre']) and isset($_POST['rangelivre']) and isset($_POST['caselivre']) and isset($_POST['numerolivre']) and isset($_POST['categorie'])) {
    $titre = $_POST['titre'];
    $edition = $_POST['editionlivre'];
    $auteur = $_POST['auteur'];
    $nombre = $_POST['nombre'];
    $rangelivre=$_POST['rangelivre'];
    $caselivre=$_POST['caselivre'];
    $numerolivre=$_POST['numerolivre'];
    $categorie = $_POST['categorie'];

    $requete = $conn->prepare('INSERT INTO feuil1(titre,editionlivre,auteur,nombre,rangelivre,caselivre,numerolivre,categorie) VALUES(:titrelivre,:editionliv,:auteurlivre,:nombrelivre,:rangliv,:caseliv,:numliv,:categorielivre)');
    $requete->execute(array(
        'titrelivre' => $titre,
        'editionliv' => $edition,
        'auteurlivre' => $auteur,
        'nombrelivre' => $nombre,
        'rangliv'=> $rangelivre,
        'caseliv'=> $caselivre,
        'numliv'=> $numerolivre,
        'categorielivre' => $categorie
    ));
    
}
header('location:../vue/assets/category.php');
?>