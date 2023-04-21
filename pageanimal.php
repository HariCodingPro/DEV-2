<!DOCTYPE html>
<html>
    <?php include_once("head.php"); ?>

    <body>
        <?php include_once("header.php");
         
            if(isset($_POST["favoris"])){
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
            $idAnimal=$_POST["id_animal"];
            if (in_array($idAnimal, $tab)){
                header("Location: favoris.php");
            }else {
                array_push($tab,$idAnimal);
                
                $favoris=implode(",",$tab);

                $sql = "UPDATE Utilisateur SET favoris='".$favoris."' WHERE id='".$_SESSION["idUser"]."'";
                $result = $conn->query($sql);
                $i=0;

                if ($result == TRUE) {
                    header("Location: favoris.php");
                } 
            
                else {
                    echo "Error: <br>" . $conn->error;
                }
            
            } 
        }


           
        
        ?>
        <main id="contenu_page_animal">
            <div class="gauche">
                <div class="section-photos">
                <?php
                    $sql = "SELECT * FROM Animal WHERE id='".$_GET["id"]."'";
                    $noms_photos=array();
                    $result = $conn->query($sql);
                    $i=0;
                    if ($result->num_rows> 0) {
                
                        while($row = $result->fetch_assoc()) {
                           $noms_photos=scandir($row["photo"]);
                           $photo1=$row["photo"]."/";
                            
                        }
                    } 
                
                    else {
                        echo "0 résultat pour l'animal";
                    }
                    array_shift($noms_photos);
                    array_shift($noms_photos);  

                    for($i=0;$i<count($noms_photos);$i++){
                        $noms_photos[$i]=$photo1.$noms_photos[$i];
                    }

                    
                    $noms=implode(",", $noms_photos);
                    
              
                    
                ?>
                    
                    <p id='liste_pics' style='display:none;' ><?php echo $noms;?></p>
                    <div id="page_img" style="width:100%; text-align:center;">
                        <div id="img_en_elle">
                            <img src=<?php echo "'".$noms_photos[0]."'" ?> id="image-annonce">
                        </div>
                        <button class="leftButton" onclick="Previous(1)"><</button>
                        <button class="rightButton" onclick="Previous(0)">></button>
                       
                    </div>
                </div>    
            </div>

            <div class="droite">
                <h2 id="nom_page">Albert le chien</h2>
                <p id="age_page" style="font-weight:bold;">18 ans</p><br><br>
                <p id="adj_page">Adjectif pour décrire l'animal : </p>
                <p>Joueur !</p>
                <form method="POST" action="pageanimal.php">
                <div style="width:100%; text-align:center;"> 
                    <?php echo "<input type='text' style='display:none;' name='id_animal'value='".$_GET["id"]."'>" ?>
                    <input type='submit' class="ajouter_but_page" id="favoris" name="favoris" value="Favoris"><br><br>
                    <a href="adopter.php"><input type="submit" class="ajouter_but_page" value="Adopter">
                </div>
                </form>
            </div>

        
        </main>
        <?php include_once("footer.php"); ?>
    </body>
</html>
            