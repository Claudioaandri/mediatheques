function verification(){
    // nom
    var nom=new RegExp("[a-z]");
    var nomeleve=document.getElementById('nom').value;
    if(nom.test(nomeleve)){
        alert("tous le nom doit etre ecrire en lettre capitale");
        return false;
    }
    // prenom
    var prenom=new RegExp("^[a-z]");
    var prenomeleve=document.getElementById('prenom').value;
    if(prenom.test(prenomeleve)){
        alert("le prenom doit commencer en majuscule");
        return false;
    }
}