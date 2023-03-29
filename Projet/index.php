<!DOCTYPE html>
<html>
    <?php include_once("head.php"); ?>
    <body>
        <?php include_once("header.php"); ?>

        <main>
            <div id="accueil_div">
                <div id="texte_accueil">
                    <p style="color:white">Bienvenue sur notre site !</p>
                </div>

                <div id="first_bouton" name="first_bouton">
                    <ul>
                        <li><a href="adoptions.php"><input type="button" value="J'adopte"></a></li>
                        <li><a href="creerannonce.php"><input type="button" value="Créer mon annonce"></a></li>
                    </ul>
                </div>
            </div>
        </main>

        <?php include_once("footer.php"); ?> 
    </body>
</html>