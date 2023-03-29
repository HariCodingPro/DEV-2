<!DOCTYPE html>
<html>
    <?php include_once("head.php"); 
    
    if($_SESSION["connexion"]==0){
        header('Location: connexion.php');
       }
    
    ?>
    <body>
        <?php include_once("header.php"); ?>
        <p>vérifier mec co</p>
        <div style="text-align:center;">
                <h1>Mes favoris</h1>
        </div>
        <div>
            <div class="container_fav">
                <div class="liste_favoris_item">
                        <div class="texte_favoris"> <a href="" id="deux">
                            <a href=""><img class="image_favoris" src="images/chiens_fav.jpg"></a>
                            <p>Favoris 1:</p>
                            <p>Nom, Prénom </p></a>
                        </div>
                  

                        <div class="bouton-container">
                            <a href=""><input type="submit" class="bouton_supprimer" name="csubmit" value="Aller sur l'annonce"></a><br><br>
                            <a href=""><input type="submit" class="bouton_supprimer" name="csubmit" value="Supprimer de mes favoris"></a>
                        </div>
                </div>

                <div class="liste_favoris_item">
                        <div class="texte_favoris"> <a href="" id="deux">

                            <a href=""><img class="image_favoris" src="images/chiens_fav.jpg"></a>
                            <p>Favoris 1:</p>
                            <p>Nom, Prénom </p></a>
                        </div>
                  

                        <div class="bouton-container">
                            <a href=""><input type="submit" class="bouton_supprimer" name="csubmit" value="Aller sur l'annonce"></a><br><br>
                            <a href=""><input type="submit" class="bouton_supprimer" name="csubmit" value="Supprimer de mes favoris"></a>
                        </div>
                </div>
                   
                    
                   
          
            </div>
        </div>


        <?php include_once("footer.php"); ?> 
    </body>
</html>