<!DOCTYPE html>
<html>
    <?php include_once("head.php"); ?>
    <body>
        <?php include_once("header.php"); ?>

        <main>
            <div class="race_content e1">
                <img id="round_img" src="images/dog.jpg">
                <h1>Le Golden Retriever<h1>
            </div>

            <div class="race_content e2">
                <div class="left_race">
                    <h2 style="text-align: center;">Résumé</h2>
                    <p style="padding: 1em;">Le Golden Retriever est un chien aux origines controversées. L’une des théories qui s’y rapportent en fait un descendant de bergers du Caucase acquis en 1858 par Lord Tweedmouth. Une autre histoire voudrait qu’on ait croisé un Spaniel d’eau à un Wavy Coated, ne conservant de chaque portée que les chiots à la robe dorée. Une autre légende raconte que le Golden Retriever est né d’un croisement entre un Spaniel d’eau et un Bloodhound.</p>
                </div>

                <div class="right_race" style="text-align: center;">
                    <img src="images/db_images/Chien/golden.jpg" >
                </div>

                
                <h2 style="text-align: center; width:100%;">Caractéristiques à noter</h2>

                <div class="carac_race">
                    
                    <div class="features_race">
                        <h4>Particularité</h4>
                        <p>Cool</p>
                    </div>  

                    <div class="features_race">
                        <h4>Espérance de vie</h4>
                        <p>12 ans</p>
                    </div>  

                    <div class="features_race">
                        <h4>Education</h4>
                        <p>hard</p>
                    </div>  

                    <div class="features_race">
                        <h4>Activité physique</h4>
                        <p>lourd</p>
                    </div>  

                    <div class="features_race">
                        <h4>Entretien Hygiène</h4>
                        <p>40x/sem</p>
                    </div>  
                </div>

                <!--Afficher les animaux dans la db-->
                <h2>Nos Golden Retriever</h2>
                <div class="ex_race">
                    <div class="ex_race_item">
                        <a>
                            <img src="images/dog.jpg">
                            <p>Medor</p>
                        </a>
                    </div>

                    <div class="ex_race_item">
                        <a>
                            <img src="images/dog.jpg">
                            <p>Medor</p>
                        </a>
                    </div>

                    <div class="ex_race_item">
                        <a>
                            <img src="images/dog.jpg">
                            <p>Medor</p>
                        </a>
                    </div>

                    <div class="ex_race_item last_p">
                        <p>Voir le reste</p>
                    </div>
                </div>
            </div>

        </main>
        <?php include_once("footer.php"); ?> 
    </body>
</html>