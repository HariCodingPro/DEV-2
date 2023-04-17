function pour_race(x){
    var val=document.getElementById("fesp").value;
    if(val != "Vide"){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("frace").innerHTML = this.responseText;
            }
        };
        
        xmlhttp.open("GET", "PHP/appelrace.php?e=" + val, true);
        xmlhttp.send();
    }
  
}



function verif_texte(x){
    const specialChars = /[`1234567890!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
  

    if(x==""){
        return false;
    }

    else if(x.length > 69){
        return false;
    }

    else if (specialChars.test(x)){
        
        return false;
    }

    else{
        return true;
    }
}

/*FAIRE LES VERIF + vert quand tout est bon*/
function valider_annonce(){

    var fnom_a = document.getElementById("fnom_a");
    var fage_a = document.getElementById("fage_a");
    var fesp = document.getElementById("fesp");
    var frace = document.getElementById("frace");
    var fphoto = document.getElementById("fphoto");
    var fetat = document.getElementById("fetat");
    var fadj = document.getElementById("fadj");
    var imageSize = document.getElementById('fphoto').files[0].size;
    var texte = document.getElementById('grand');
    var valide=0;

   
    if (!verif_texte(fnom_a.value)){ 
        fnom_a.style.borderBottom= "1px solid red";
        value=1;
    }else{
        fnom_a.style.borderBottom = "1px solid black"; 
    }

    if (fage_a.value==""||isNaN(fage_a.value)){
        valide=1;
        fage_a.style.borderBottom = "1px solid red";
    }else{
        fage_a.style.borderBottom = "1px solid black";
    }

    if(fesp.value=="Vide" || frace.value==""){
        valide=1;
        fesp.style.border = "1px solid red";
    }else{
    
        fesp.style.border = "1px solid black";
    }

    if(frace.value=="Vide" || frace.value==""){
        valide=1;
        frace.style.border = "1px solid red";
    }else{
  
        frace.style.border = "1px solid black";
    }
       



    if (imageSize > 100000000 || fphoto.value=="") {
        fphoto.style.borderBottom = "1px solid red";
        valide=1;
        if(texte.style.display=="none"){
            texte.style.display="flex";
        }

    }else{ 
        texte.style.display="none";
        fphoto.style.borderBottom = "1px solid black";
    }

    if(fetat.value==""){
        valide=1;
        fetat.style.borderBottom = "1px solid red";
    }else{
    
        fetat.style.borderBottom = "1px solid black";
    }

    if(fadj.value==""){
        valide=1;
        fadj.style.borderBottom = "1px solid red";
    }else{
        
        fadj.style.borderBottom = "1px solid black"; 
    }           
                
   

    if(valide == 1){
        return false;
    }

}