<!DOCTYPE html>
<html>
    <?php include_once("head.php"); ?>

    <body>
        <?php include_once("header.php"); ?>
        <main>
            <div class="contenu-annonce">
                <div class="section-haute">
                    <div class="section-photos">
                        <script>
                            var images = ["images/chien1_1.jpg", "images/chien1_2.jpg", "images/dog.jpg", "images/cat.jpg"];
                            var index = 0;
                                
                            function Previous() {
                                // Décrémenter l'index pour passer à l'image précédente
                                index--;

                                // Si on arrive au début du tableau, aller à la fin
                                if (index < 0) {
                                    index = images.length - 1;
                            }

                                // Afficher la nouvelle image
                                document.getElementById("image-annonce").src = images[index];
                            }  

                            function Next() { 
                                // Incrémenter l'index pour passer à l'image suivante
                                index++;

                                // Si on arrive à la fin du tableau, aller au début
                                if (index >= images.length) {
                                    index = 0;
                                }                   
                                // Afficher la nouvelle image
                                document.getElementById("image-annonce").src = images[index];
                            }
                        </script>
                        <div class="img-annonce">
                            <img id="image-annonce" src="images/chien1_1.jpg">
                        </div>    
                        <i class="fas fa-arrow-left" onclick="Previous()"></i> 
                        <i class="fas fa-arrow-right" onclick="Next()"></i> 
                    </div>            

                    <div class="section-haute-droite">
                        <div class="section-description">
                            <h3> Description de l'animal </h3>
                            <ul>
                                <li> Nom: </li><br>
                                <li> Age: </li><br>
                                <li> Espèce: </li><br>
                                <li> Race: </li><br>
                                <li> Caractère: </li><br>
                                <li> Sociabilité: </li><br>
                                <li> Education: </li><br>
                                <li> Espérance de vie: </li><br>
                            </ul>    
                        </div> 

                        <div class="section-information">
                            <h3> Informations complémentaires</h3>
                            <ul>
                                <li> Particularités physique: </li><br>
                                <li> Histoire de la race: </li>
                            </ul>
                            <h3> Contacter le donneur </h3>
                            <ul>
                                <li> Portable: </li><br>
                                <li> Email: </li>
                            </ul>    
                        </div>
                    </div>    

                </div>
                
                <div class="section-basse">
                    <div class="section-note-animal">
                        <h3> Note sur l'animal </h3>
                            <p> blbla description en phrase de l'animal </p>
                    </div>
                    <div class="section-adopter">  
                        <a href="adopter.php"  class="btn"><i class="fa fa-heart">Adopter</i></a>                     
                    </div>   
                </div>

            </div>  
        </main>
        <?php include_once("footer.php"); ?>
    </body>
</html>
            