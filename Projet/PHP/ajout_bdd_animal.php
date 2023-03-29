<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "cytech0001";
    $dbname = "apoils";  
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $tab_info = array();


    $tab_info["nom"]="'".$_GET["nom"]."'";
    $tab_info["idEspece"]=0;
    $tab_info["idRace"]=1;
    $tab_info["age"]=intval($_GET["age"],10);
    $tab_info["adjectif"]="'".$_GET["adj"]."'";
    $tab_info["prix"]=intval($_GET["prix"],10);
    $tab_info["etat"]="'".$_GET["etat"]."'";

    /*Gérer les images*/
    $tab_info["photo"]="'./images/db_images/Chien/mon_chien.jpg'";
    
    /*Récupérer l'id uti */
    $tab_info["idUti"]=$_SESSION["idUser"];

  
    
    /*Requête pour trouver le nom de l'espèce*/
    $sql = "SELECT id FROM Espece WHERE nom='".$_GET["esp"]."'";

    $result = $conn->query($sql);
    $i=0;
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            $tab_info["idEspece"]=intval($row["id"], 10);
        }
    } 

    else {
        echo "0 résultat";
    }


    /*Requête pour trouver le nom de la race*/
    $sql = "SELECT id FROM Espece WHERE nom='".$_GET["race"]."'";

    $result = $conn->query($sql);
    $i=0;
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            $tab_info["idRace"]=intval($row["id"], 10);
        }
    } 

    else {
        echo "0 résultat";
    }

    var_dump($tab_info);

    $for_sql=implode(',', $tab_info);

    echo $for_sql;
  
    $sql = "INSERT INTO Animal(nom,idEspece,idRace,age,adjectif,prix,etat_sante,photo,idUti) VALUE(".$for_sql.")";

    $result = $conn->query($sql);
    

    if ($result == TRUE) {
        echo "New data added perfectly !";;
    } 

    else {
        echo "Error: <br>" . $conn->error;
    }


?>