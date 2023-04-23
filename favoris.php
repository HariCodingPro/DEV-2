<!DOCTYPE html>
<html>
    <?php include_once("head.php"); 
    
    if($_SESSION["connexion"]==0){
        header('Location: connexion.php');
       }
    
    ?>
    <body>
        <?php include_once("header.php"); ?>
        <div style="text-align:center;">
                <h1>Mes favoris</h1>
        </div>
            <?php    
                $tab=array(); 
                $new_favoris=array();               
                $sql = "SELECT favoris FROM Utilisateur WHERE id='".$_SESSION["idUser"]."'";
                $result = $conn->query($sql);

                $i=0;
                if ($result->num_rows> 0) {

                    while($row = $result->fetch_assoc()) {
                        $favoris=$row["favoris"];
                        
                    }
                
                } 
    
                else {
                    echo "0 résultat";
                }

                $tab=explode(",",$favoris);
                $taille = sizeof($tab);

                for($i=0; $i<$taille; $i++) {
                $sql = "SELECT * FROM Animal WHERE id='".$tab[$i]."'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    

                // output data of each row
                    while($row = $result->fetch_assoc()) {

                        if(is_dir($row["photo"])){
                            $tab_img=scandir($row["photo"]);

                            
                            echo "

                            <div class='container_fav'>
                                <div class='liste_favoris_item'>
                                    <div class='texte_favoris'> <a href='pageanimal.php?esp=".$row["idEspece"]."&race=".$row["idRace"]."&id=".$row["id"]."' id='deux'>
                                        <a href='pageanimal.php?esp=".$row["idEspece"]."&race=".$row["idRace"]."&id=".$row["id"]."'><img class='image_favoris' src=".$row["photo"]."/".$tab_img[2]."></a>
                                        <h4 style='text-decoration:underline'>Favoris $i:</h4>
                                        <p style='color:black;'>".$row["nom"]."</p>
                                    </div>

                                    <div class='bouton-container'>
                                        <a href='pageanimal.php?esp=".$row["idEspece"]."&race=".$row["idRace"]."&id=".$row["id"]."'><input type='submit' class='bouton_supprimer' name='csubmit' value='Consulter la publication'></a><br><br>
                            
                                    </div>
                                </div>
                            </div>
                                   
                        ";

                        }
                        else{
                            echo "erreur dossier image!";
                        }

                    }
                }    

                else{
                    echo "vide";
                }
                }
                
            ?>

            


        <?php include_once("footer.php"); ?> 
    </body>
</html>