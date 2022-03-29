<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperation des données</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php //Connection avec la BDD.
        mysql_connect("localhost", "root", "");
        mysql_select_db("gestion_des_apprenants");
         
        $reponce = mysql_query("SELECT * FROM tuteur");
        ?>
         
        <table>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Telephone</th>
                    <th>Adresse</th>
                    <th>Genre</th>
                    <th>Profession</th>  
                </tr>
            <?php//On affiche les lignes du tableau une à une à l'aide d'une boucle
            while($donnees = mysql_fetch_array($reponse))
            {
            ?>
                <tr>
                    <th><?php echo $donnees['id'];?></th>
                    <th><?php echo $donnees['Nom'];?></th>
                    <th><?php echo $donnees['Prenom'];?></th>
                    <th><?php echo $donnees['Telephone'];?></th>
                    <th><?php echo $donnees['Adresse'];?></th>
                    <th><?php echo $donnees['Genre'];?></th>
                    <th><?php echo $donnees['Profession'];?></th>  
                </tr>
            <?php
            } //fin de la boucle, le tableau contient toute la BDD
            mysql_close(); //deconnection de mysql
            

        ?> 
</body>
</html>