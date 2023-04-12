function isValidEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
  }
  

function isValidPhoneNumber(tel) {
    const phonePattern = /^\d{10}$/;
    return phonePattern.test(tel);
}



/*FAIRE LES VERIF + vert quand tout est bon*/
function ajouter_compte(){

    var fnom_a = document.getElementById("anom");
    var fprenom = document.getElementById("aprenom");
    var fddn = document.getElementById("addn");
    var email = document.getElementById("amail");
    var tel = document.getElementById("atel");
    var login = document.getElementById("alogin");
    var mdp = document.getElementById("apassword");
 
    var valide=1;



    if (fnom_a.value == ""){ 
        fnom_a.style.borderBottom= "1px solid red";
        valide=0;
    }else{

        fnom_a.style.borderBottom = "1px solid black"; 
    }


    if (fprenom.value == ""){ 
        fprenom.style.borderBottom= "1px solid red";
        valide=0;
    }else{

        fprenom.style.borderBottom = "1px solid black"; 
    }


    if (fddn.value == ""){ 
        fddn.style.borderBottom= "1px solid red";
        valide=0;
    }else{

        fddn.style.borderBottom = "1px solid black"; 
    }


    if (isValidEmail(email.value)) {
        email.style.borderBottom = "1px solid black";
      } else {
        email.style.borderBottom = "1px solid red";
        valide=0;
      }
      
      if (isValidPhoneNumber(tel.value)) {
        tel.style.borderBottom = "1px solid black";
      } else {
        tel.style.borderBottom = "1px solid red";
        valide=0;
      }



    if (login.value == ""){ 
        login.style.borderBottom= "1px solid red";
        valide=0;
    }else{

        login.style.borderBottom = "1px solid black"; 
    }


    if (mdp.value == ""){ 
        mdp.style.borderBottom= "1px solid red";
        valide=0;
    }else{

        mdp.style.borderBottom = "1px solid black";
    }


    if (valide == 0){
        return false;
    }
 

}


