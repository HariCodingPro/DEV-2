<!--
    LE CSS de ce fichier est dans compte.css et creerannonce.css
 -->

 <!DOCTYPE html>
<html>
    <?php include_once("head.php"); ?>
    <body>
        <?php include_once("header.php"); ?>

            <div id="images_connexion">
                <h1 style="text-align:center; color:white;">Création de compte</h1>
                <div id="formannonce">
                    <form id="forms"> 
                        <h3>Informations personnelles</h3>

                        <label for="anom">Nom  </label><br>
                        <input type="text" id="anom" name="anom"><br><br>

                        <label for="aprenom">Prénom  </label><br>
                        <input type="text" id="aprenom" name="aprenom"><br><br>

                        <label for="addn">Date de naissance  </label><br>
                        <input type="date" id="addn" name="addn"><br><br>

                        <label for="amail">Mail  </label><br>
                        <input type="text" id="amail" name="amail"><br><br>

                        <label for="atel">Téléphone  </label>
                        <i class="fas fa-phone"></i><br>
                        <input type="text" id="ftel" name="atel"><br><br>

                        <label for="apdi">Pièce d'identité  </label>
                        <i class="fas fa-id-card"></i><br><br>
                        <input type="file" id="fpdi" name="apdi"><br><br>

                        <h3>Informations de connexion</h3>

                        <label for="alogin">Identifiant</label><br>
                        <input type="text"><br><br>

                        <label for="alogin">Mot de passe</label><br>
                        <input type="password"><br><br>

                        <a href="connexion.php" id="un">J'ai déjà un compte</a><br><br><br>

                        <input type="submit" class="submit_co">
                    
                    </form>
                </div>    

            </div>
        
        <?php include_once("footer.php"); ?> 
    </body>
</html>
        