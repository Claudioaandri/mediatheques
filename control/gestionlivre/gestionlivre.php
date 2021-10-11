<?php
session_start();
include "../../modele/connexion.php";
if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['TitreLivre']) and isset($_POST['Numero']) and isset($_POST['universite']) and isset($_POST['niveau'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $titre = $_POST['TitreLivre'];
    $numero = $_POST['Numero'];
    $universite = $_POST['universite'];
    $niveau=$_POST['niveau'];

    $requete = $conn->prepare('INSERT INTO avoirlivre(nom,prenom,titrelivre,Numero,universite,niveau,datelecture) VALUES(:nomA,:prenomA,:titreL,:numL,:univA,:nivA,now())');
    $requete->execute(array(
        'nomA' => $nom,
        'prenomA' => $prenom,
        'titreL' => $titre,
        'numL' => $numero,
        'univA' => $universite,
        'nivA' =>$niveau
    ));
}
header('location:../../vue/utilisateurlivre/utilisateur.php');
?>