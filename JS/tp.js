function verif(){
    var nom=document.getElementById("nom").value;
    var prenom=document.getElementById("prenom").value;
    var ddn=document.getElementById("ddn").value;
    var valide=0;

    if(nom != ""){
        if(nom.length > 2 ){
            if(!/[0-9]/.test(nom)){
                if(nom.length <= 15){

                }

                else {
                    valide=1;
                    alert("Nom trop long!");
                }
            }
            else{
                valide=1;
                alert("Les nb sont interdits dans le nom");
            }
        }

        else{
            valide=1;
            alert("Nom trop court !");
        }
    }
    else{
        valide=1;
        alert("Veuillez saisir un nom !");
    }


    if(prenom != ""){
        if(prenom == prenom.toUpperCase()){
            
        }

        else{
            valide=1;
            alert("Le prenom doit être en majuscule");
        }
    }

    else{
        valide=1;
        alert("Veuillez mettre un prenom");
    }

    if(ddn != ""){
        if(/^\d{2}\/\d{2}\/\d{4}$/.test(ddn)){

        }

        else {
            valide=1;
            alert("Date de naissance invalide");
        }
    }

    if(valide==0){
        alert("Données rentrées avec succès !");
    }
    

}