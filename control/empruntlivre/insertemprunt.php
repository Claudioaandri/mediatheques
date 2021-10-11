<?php
include "../../modele/connexion.php";
if(isset($_POST['IM']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['resp']) and isset($_POST['tell'])){
    $im=$_POST['IM'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $responsabilite=$_POST['resp'];
    $telephone=$_POST['tell'];
}
$requete=$conn->prepare('INSERT INTO emprunt(im,nom,prenom,responsabilite,phone) VALUES (:imemp,:nomemp,:prenomemp,:respemp,:telemp)');
$requete->execute(array(
    'imemp'=>$im,
    'nomemp'=>$nom,
    'prenomemp'=>$prenom,
    'respemp'=>$responsabilite,
    'telemp'=>$telephone
));
header('location:../../vue/specifique/listborrowers.php');
?>