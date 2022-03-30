<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Style/css/style.css">
</head>
<body>
<?php include 'menu.php'; ?>
<h4 class="mt-3">Informations tuteur</h4>
<div class="container-fluid shadow p-2 bg-body rounded">
        <form action="insertion_tuteur.php" method="post" style="margin:5px">
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Nom" name="nom" autocomplete="off">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Prenom" name="prenom" autocomplete="off">
          </div>
          <div class="mb-3">
            <select class="form-select mb-3" aria-label="Default select example" name="genre">
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
              </select>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="profession" placeholder="Profession" autocomplete="off">
          </div>
          <div class="mb-3">
            <input type="number" class="form-control" name="telephone" placeholder="Telephone" autocomplete="off">
          </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="adresse" placeholder="Adresse" autocomplete="off">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-outline-danger"  name="valider">Ajouter</button>
            <button type="reset" class="btn btn-outline-danger"  name="valider">Annuler</button>
    </form> 
    </div>   
<div class="container-fluid shadow p-2 bg-body rounded bt-3">
   <h4>Liste des tuteurs</h4>
      <table class="table table bordered " border="1" >
  <thead class="table bg-danger text-light">
    <tr>
        <td>No</td>
        <td>NOM </td>
        <td>PRENOM</td>
        <td>GENRE</td>
        <td>PROFESSION</td>
        <td>TELEPHONE</td>
        <td>ADRESSE</td>
        <td>EMAIL</td>
    </tr>
  </thead>
  
  <?php

try {
    // se connecter à mysql
    $pdo = new PDO("mysql:host=localhost;dbname=Gestion_des_apprenants", "root", "");
} catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
}

// mysql select query
//$stmt = $con->prepare('SELECT name, model, os, type, ip, idrac FROM P_SERVERS');
$q = $pdo->prepare('SELECT * FROM Tuteur');

$q->execute();
$data = $q->fetchAll();

?>
  <tbody >
  <?php
foreach ($data as $donnee) {
?>
  <tr>
        <td>  <?php echo $donnee['idTuteur']; ?></td>
        <td>  <?php echo $donnee['nom']; ?></td>
        <td>  <?php echo $donnee['prenom']; ?></td>
        <td>  <?php echo $donnee['genre']; ?></td>
        <td> <?php echo $donnee['profession']; ?></td>
        <td> <?php echo $donnee['telephone']; ?></td>
        <td> <?php echo $donnee['adresse']; ?></td>
        <td> <?php echo $donnee['email']; ?></td>
    </tr>
    <?php
            }
            ?>
  </tbody>
</table> <br>
<button onclick="print();" class="btn btn-outline-danger mb-3"  name="valider">Imprimer</button>
</div>
<?php include 'foot.php'; ?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>