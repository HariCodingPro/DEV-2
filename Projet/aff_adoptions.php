<?php
    $num_animal=$_GET["esp"];

?>

<!DOCTYPE html>
<html>
    <?php include_once("head.php"); ?>
    <body>
        <?php include_once("header.php"); ?>

        <main>
            <div >
                <h1 style="text-align:center;">Regardez comme ils sont beaux</h1>

                <div id="contenu_adoption">
                    <div id="filtres_rec">
                        <!--Faire le php pour actualiser la partie droite -->
                        <h2 style="text-align:center;">Filtres</h2>
                        <div class="filtre_section">
                            <p>Race</p>
                            <select>
                                <option value="Toutes">Toutes</option>
                                <option value="Berger">Berger</option>
                                <option value="Auberge">Auberge</option>
                            </select>
                        </div>

                        <div class="filtre_section">
                            <p>Prix</p>
                            <select>
                                <option value="Tous">Tous</option>
                                <option value="0-50€">0-50€</option>
                                <option value="50-100€">50-100€</option>
                                <option value=">100€">>100€</option>
                            </select>
                        </div>

                        <div class="filtre_section">
                            <p>Age</p>
                            <select>
                                <option value="Tous">Tous</option>
                                <option value="0-5ans">0-5ans</option>
                                <option value="5-10ans">5-10ans</option>
                                <option value="+10ans">+10ans</option>
                            </select>
                        </div>

                        <div class="filtre_section">
                            <p>Espérance de vie</p>
                            <select>
                                <option value="Toutes">Toutes</option>
                                <option value="0-5ans">0-5ans</option>
                                <option value="5-15ans">5-15ans</option>
                                <option value="+15ans">+15ans</option>
                            </select>
                        </div>
                        <br>
                        <input type="button" value="Réinitialiser filtres" class="app_filtres">
                        <br><br>
                        <input type="button" value="Appliquer filtres" class="app_filtres">

                    </div>
                    <div id="liste_animaux_adoption" name="liste_animaux_adoption">
                        <?php

                            /*APPLIQUER les filtres */
                            $sql = "SELECT * FROM Animal WHERE idEspece=$num_animal";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<div class='cell_ani'>
                                        <a href='pageanimal.php?esp=".$num_animal."&race=".$row["idRace"]."&id=".$row["id"]."'>
                                        <img class='cell_ani_img' src='".$row["photo"]."'>
                                        <p>".$row["nom"]."</p>
                                        <p>".$row["age"]." ans<p>
                                        <p>".$row["prix"]." €</p>
                                        </a>
                                    </div>";
                                }
                            } 

                            else {
                                echo "0 results";
                            }
                        ?>

                        
                    </div>
                </div>
            </div> 

        </main>

        <?php include_once("footer.php"); ?> 
        <!--LE FOOTER !!!!!!-->
    </body>
</html>