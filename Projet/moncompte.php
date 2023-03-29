<!DOCTYPE html>
<html>
    <head>
        <title>A poils !</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./CSS/header.css">
        <link rel="stylesheet" href="./CSS/accueil.css">
        <link rel="stylesheet" href="./CSS/adoptions.css">
        <link rel="stylesheet" href="./CSS/creerannonce.css">
        <link rel="stylesheet" href="./CSS/compte.css">
        <link rel="stylesheet" href="./CSS/moncompte.css">
        <link rel="stylesheet" href="./CSS/apropos.css">
        <link rel="stylesheet" href="./CSS/description.css">
        <link rel="stylesheet" href="./CSS/footer.css">
        <link rel="stylesheet" href="./CSS/liste_description.css">
        <link rel="stylesheet" href="./CSS/contacteznous.css">
        <link rel="stylesheet" href="./CSS/favoris.css">
        <link rel="stylesheet" href="./CSS/pageanimal.css">
        <link rel="stylesheet" href="./CSS/adopter.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"/>
        <link rel="stylesheet" href="https://kit.fontawesome.com/3973c994c7.css" crossorigin="anonymous">
        <script src="JS/header.js"></script>
        <script src="JS/creerannonce.js"></script>
        <script src="JS/connexion.js"></script>

    </head>
    <body>
        <header>
            <div id="menu" name="menu">
                <input id="fermer_menu" type="button" value="fermer" onclick="derouler()">
                <ul>
                    <li><a href="index.php"><input class="sidemenu_button" type="button" value="Accueil"></a></li>
                    <li><a href="adoptions.php"><input class="sidemenu_button" type="button" value="Adopter"></a></li>
                    <li><a href="creerannonce.php"><input class="sidemenu_button" type="button" value="Creer mon annonce"></a></li>
                    <li><a href="liste_description.php"><input class="sidemenu_button" type="button" value="Decouvrir nos animaux"></a></li>
                    <li><a href="apropos.php"><input class="sidemenu_button" type="button" value="Qui sommes nous ?"></a></li>
                </ul>
            </div>

            <div id="gray_bg" name="gray_bg" onclick="derouler()">
                
            </div>

            <div id="div_bouton_menu" name="div_bouton_menu" onclick="derouler()">
                <div id="sous_div_menu" name="sous_div_menu">
                    <div id="details" name="details">
                        <div class="explore_but1"></div>
                        <div class="explore_but2"></div>
                        <div class="explore_but3"></div>
                    </div>    
                    <p>Menu</p> 
                </div>
            </div>
        
            <div id="logo" name="logo">
                <a href="index.php" title="Aller à l'accueil">
                <img src="images/logo.jpg" width="100px" height="100%">
                </a>
            </div>

            <nav id="nav_bar" name="nav_bar">
                <ul>
                    <li><a href="index.php"><input type="button" value="Accueil" class="nav_explore"></a></li>
                    <li><a href="liste_description.php"><input type="button" value="Nos animaux" class="nav_explore"></a></li>
                    <li><a href="apropos.php"><input type="button" value="A propos" class="nav_explore"></a></li>
                </ul>
            </nav>

            <div id="fav_cpt" name="fav_cpt">
                <ul>
                    <li><a style='font-size:24px' class='fa' href="favoris.php" title="Favoris">&#xf004;</a></li> <!--COEUR-->
                    <li><a style='font-size:24px' class='fas' href="compte.php" title="Compte" >&#xf406;</a></li> <!--Bonhomme-->
                </ul>
            </div>

        </header>

        
        <main>
          
            <h1 style="text-align:center;">Mon profil</h1>
           
            <div class="alignement">
                <div class="formsannonce">
                            <div class="profile_content">

                                <label class="titre_compte">Nom  </label><br>
                                <p>Le Guellec</p><br><br>

                                <label class="titre_compte">Prénom  </label><br>
                                <p>Benjamin</p><br><br>

                                <label class="titre_compte">Date de naissance  </label><br>
                                <p>14 mars 2001</p><br><br>

                                <label class="titre_compte">Mail  </label><br>
                                <p>benjaminleguellec@gmail.com</p><br><br>

                                <label class="titre_compte">Téléphone  </label>
                                <i class="fas fa-phone"></i><br>
                                <p>06 95 08 35 07</p><br><br>
                            </div>
                </div>
                <div class="formsannonce">
                            <div class="profile_content">
                               
                            
                                <label class="titre_compte">Identifiant</label><br>
                                <p>benjamin</p><br><br>

                                <label class="titre_compte">Mot de passe</label><br>
                                <p>motdepasse</p><br><br>
                            </div>
                </div>
                <div class="formsannonce">
                    <div class="alignements" >
                        <img class="moncompte_image" src="images/default.jpg"><br><br>
                        <input type="file" name="image">
                        <input type="submit" id="bouton_compte" value="Changer de photo de profil">
                                
                    </div>
                                


                </div>
            </div>
            

            <h2>Annnonces possédées</h2>
            <div class="liste_annonces_compte">

                <div class="annonces_compte">
                    <div class="an_compte_img">
                        <img src="images/dog.jpg">
                    </div>
                    <div class="an_infos">
                        <p>Albert</p>
                        <p>15 ans</p>
                    </div>
                </div>

                <div class="annonces_compte">
                    <div class="an_compte_img">
                        <img src="images/dog.jpg">
                    </div>
                    <div class="an_infos">
                        <p>Didiou</p>
                        <p>15 ans</p>
                    </div>
                </div>



            </div>

            
            <div class="formannonce">
                <form class="forms" method="post" style="text-align:center;">
                    <a href="index.php" class="un">Accueil</a><br><br><br>
                    <a href="adoption.php" class="un">Découvrir nos animaux</a><br><br><br>
                    <input type="submit" id="logout_but" name="logout_but" value="Déconnexion">
                    <br><br>
                </form>
            
            </div>
            
        
        </main>



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