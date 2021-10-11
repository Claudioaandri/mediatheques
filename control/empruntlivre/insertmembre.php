<?php
include "../../modele/connexion.php";
if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['resp']) and isset($_POST['titre']) and isset($_POST['categorie']) and isset($_POST['tell'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $responsabilite=$_POST['resp'];
    $titre=$_POST['titre'];
    $categorie=$_POST['categorie'];
    $telephone=$_POST['tell'];
}
$requete=$conn->prepare('INSERT INTO membrebibliotheque(nom,prenom,responsabilite,titrelivre,categorie,phone,dateemprunt) VALUES (:nomemp,:prenomemp,:respemp,:titrelivre,:categorieliv,:telemp,now())');
$requete->execute(array(
    'nomemp'=>$nom,
    'prenomemp'=>$prenom,
    'respemp'=>$responsabilite,
    'titrelivre'=>$titre,
    'categorieliv'=>$categorie,
    'telemp'=>$telephone
));
header('location:../../vue/specifique/afficheemprunt.php');
?>