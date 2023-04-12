


<!DOCTYPE html>
<html>
   
    <?php include_once("head.php")?>

    <?php

    function generate_id(){
        $aid='';
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($a = 0; $a < 5; $a++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        $aid="'USR-".time().$randomString."'";

        return $aid;

    }

    $tab_info=array();



    if(isset($_POST["compte_but"])){
        $tab_info["id"]=generate_id();
        $tab_info["nom"]="'".$_POST["anom"]."'";
        $tab_info["prenom"]="'".$_POST["aprenom"]."'";
        $tab_info["ddn"]="'".$_POST["addn"]."'";
        $tab_info["mail"]="'".$_POST["amail"]."'";
        $tab_info["telephone"]="'".$_POST["atel"]."'";
        $tab_info["identifiant"]="'".$_POST["alogin"]."'";
        $tab_info["mdp"]="'".$_POST["apassword"]."'";
        $tab_info["photo"]="'"."images/createur.jpg"."'";
        
       

        $compte=implode(",", $tab_info);

        echo $compte;

        $sql = "INSERT INTO Utilisateur VALUES ($compte)";
        $result = $conn->query($sql);

        if ($result === TRUE) {
            echo "New record created successfully";
          } 
          
          else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
       
    }
?>
    <body>
    <?php include_once("header.php")?>

            <div id="images_connexion">
                <h1 style="text-align:center; color:white;">Création de compte</h1>
                <div id="formannonce">
                    <form id="forms" method="POST" action="creationcompte.php" onsubmit="return ajouter_compte()"> 
                        <h3>Informations personnelles</h3>

                       <label for="anom">Nom  </label><br>
                        <input type="text" id="anom" name="anom"><br><br>

                        <label for="aprenom">Prénom  </label><br>
                        <input type="text" id="aprenom" name="aprenom" ><br><br>

                        <label for="addn">Date de naissance  </label><br>
                        <input type="date" id="addn" name="addn"><br><br>

                        <label for="amail">Mail  </label><br>
                        <input type="text" id="amail" name="amail"><br><br>

                        <label for="atel">Téléphone  </label>
                        <i class="fas fa-phone"></i><br>
                        <input type="text" id="atel" name="atel"><br><br>

                        <label for="apdi">Pièce d'identité  </label>
                        <h5>Veuillez rentrer le recto ici</h5>
                        <i class="fas fa-id-card"></i><br><br>
                        <input type="file"  id="apdi" name="apdi"  accept=".png, .jpg, .jpeg"><br><br>
                        <h5>Veuillez rentrer le verso ici</h5>
                        <i class="fas fa-id-card"></i><br><br>
                        <input type="file"  id="apdis" name="apdis"  accept=".png, .jpg, .jpeg"><br><br>

                        <h3>Informations de connexion</h3>

                        <label for="alogin">Identifiant</label><br>
                        <input type="text" id="alogin" name="alogin"><br><br>

                        <label for="apassword">Mot de passe</label><br>
                        <input type="password" id="apassword" name="apassword" ><br><br>

                        <a href="connexion.php" id="un">J'ai déjà un compte</a><br><br><br>

                        <input type="submit" id='compte_but' name="compte_but" class="submit_co" onclick="ajouter_compte()">
                    
                    </form>
                </div>    

            </div>
        
            <footer>

                <ul id="texte">
                    <li><a href="cookie.php">Cookies</a></li>
                    <li ><a href="mention.php">Mention légales</a></li>
                    <li ><a href="politique.php">Politique de confidentialité</a></li>
                    <li><a href="contacteznous.php">Contactez-nous</a></li>
                    <li><a href="plandusite.php">Plan du site</a></li>
                    <li>A Poils - @ Copyright 2023</a></li>
                </ul>


            </footer>
    </body>
</html>
        