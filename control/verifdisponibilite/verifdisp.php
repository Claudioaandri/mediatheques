<?php
include "../../modele/connexion.php";
if(isset($_POST['titrelivre']) and isset($_POST['nombrelivre'])){
    $titrelivre=$_POST['titrelivre'];
    $nombrelivre=$_POST['nombrelivre'];

    $insertion='INSERT INTO dispolivre(titre,demande) VALUES(:titreliv,:nombreliv)';
    $insertion=$conn->prepare($insertion);
    $insertion->execute(array(
      'titreliv'=>$titrelivre,
      'nombreliv'=>$nombrelivre
    ));
}
header('location:../../vue/disponibilite/dispoaffiche.php');
?>