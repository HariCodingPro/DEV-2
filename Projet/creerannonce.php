<!DOCTYPE html>
<html>
    <?php include_once("head.php"); 
       if($_SESSION["connexion"]==0){
        header('Location: connexion.php');
       }
    ?>
    <body>
        <?php include_once("header.php"); ?>

        <main>
            <h1 style="text-align:center;">Créer mon annonce</h1>
            <p>Vérifier que le mec est co/pas de p id</p>
            <div id="form_annonce">
                <form id="form"> 
                    <h2>Parlez-nous un peu de vous</h2>
                    <label for="fnom">Nom  </label><br>
                    <input type="text" id="fnom" name="fnom"><br><br>

                    <label for="fprenom">Prénom  </label><br>
                    <input type="text" id="fprenom" name="fprenom"><br><br>

                    <label for="fddn">Date de naissance  </label><br>
                    <input type="date" id="fddn" name="fddn"><br><br>

                    <label for="fmail">Mail  </label><br>
                    <input type="text" id="fmail" name="fmail"><br><br>

                    <label for="ftel">Téléphone  </label>
                    <i class="fas fa-phone"></i><br>
                    <input type="text" id="ftel" name="ftel"><br><br>

                   

                    <h2>Informations sur l'animal</h2>

                    <label for="fnom_a">Nom  </label><br>
                    <input type="text" id="fnom_a" name="fnom_a"><br><br>

                    <label for="fage_a">Age  </label><br>
                    <input type="text" id="fage_a" name="fage_a"><br><br>

                    <label for="fesp">Espèce</label><br>

                    <br>
                    <div onclick="pour_race(this)">
                    <select id="fesp" name="fesp">
                        <option>Vide</option>
                        <?php
                            $sql = "SELECT * FROM Espece";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "
                                    <option value='".$row["nom"]."'>
                                        ".$row["nom"]."
                                    </option>
                                    ";
                                }
                            } 

                            else {
                                echo "Aucune espece disponible";
                            }

                            /*PUIS AJAX POUR RACE*/
                        ?>
                    </select></div><br><br>

                            

                    <label for="frace">Race</label><br><br>
                    
                    <select type="text" id="frace" name="frace">
                           
                    </select>    
                    <br><br>

                
                    <label for="fphoto">Photo</label>
                    <i class="fas fa-image"></i><br><br>
                    <input type="file" id="fphoto" name="fphoto">
                    <br><br>

                    <label for="fprix">Prix</label><br>
                    <input type="text" id="fprix" name="fprix"> <span>€</span>
                    <br><br>

                    <!--mettre un select -->
                    <label for="fetat">Etat de santé</label><br>
                    <input type="text" id="fetat" name="fetat"><br><br>

                    <label for="fadj">Un petit mot pour décrire votre animal ?</label><br>
                    <input type="text" id="fadj" name="fadj"><br><br>

                    <!--CHANGER TYPE EN SUBMIT-->
                    <input type="button" id="fsubmit" name="fsubmit" value="Envoyer" onclick="valider_annonce()">
                </form>

                <div id="side_img_annonce">
                    <img src="images/annonce.png">
                </div>
            </div>
        </main>

        <?php include_once("footer.php"); ?>
    </body>
</html>