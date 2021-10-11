function verification(){
    // nom
    var nom=new RegExp("[a-z]");
    var nomeleve=document.getElementById('elevenom').value;
    if(nom.test(nomeleve)){
        alert("tous le nom doit etre ecrire en lettre capitale");
        return false;
    }
    // prenom
    var prenom=new RegExp("^[a-z]");
    var prenomeleve=document.getElementById('eleveprenom').value;
    if(prenom.test(prenomeleve)){
        alert("le prenom doit commencer en majuscule");
        return false;
    }
}