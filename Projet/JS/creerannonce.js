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

/*FAIRE LES VERIF + vert quand tout est bon*/
function valider_annonce(){
    var nom=document.getElementById("fnom_a").value;
    var age=document.getElementById("fage_a").value;
    var Esp=document.getElementById("fesp").value;
    var Race=document.getElementById("frace").value;
    var Img=document.getElementById("fphoto").value;
    var prix=document.getElementById("fprix").value;
    var etat=document.getElementById("fetat").value;
    var adj=document.getElementById("fadj").value;

    var valide=0;
    

   /*Faire les vérifications*/
   




   /*
   if(valide == 0){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("frace").innerHTML = this.responseText;
        }
    };
    
    xmlhttp.open("GET", "PHP/ajout_bdd_animal.php?nom="+nom+"&age="+age+"&esp="+Esp+"&race="+Race+"&prix="+prix+"&etat="+etat+"&adj="+adj+"&img="+"./images/db_images/Chien/didiou.jpg", true);
    xmlhttp.send();

}

*/


}