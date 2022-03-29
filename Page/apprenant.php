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
<h4 class="mt-3">Informations apprenant</h4>
<div class="container-fluid shadow p-2 bg-body rounded" bg-primary>
        <form action="apprenant.php" method="post" style="margin:5px">
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Nom" name="nom" autocomplete="off">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Prenom" name="prenom" autocomplete="off">
          </div>
          <div class="mb-3">
            <input type="number" class="form-control" name="telephone" placeholder="Telephone" autocomplete="off">
          </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="adresse" placeholder="Adresse" autocomplete="off">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="sexe" placeholder="Sexe" autocomplete="off">
            </div>
            <div class="mb-3">
              <select class="form-select mb-3" aria-label="Default select example" placeholder="Selectionner le tuteur" name="Selectionner_le_tuteur">
                    <option selected>Selectionner le tuteur</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
              </select>
            <button type="submit" class="btn btn-outline-danger"  name="valider">Ajouter</button>
            <button type="submit" class="btn btn-outline-danger"  name="valider">Annuler</button>
            </div>
    </form> 
    </div>  
    <h4 class="mt-3">Liste des tuteurs</h4>
 <table class="container-fluid shadow p-2 bg-body rounded mb-5">
 <tr class="bg-danger text-light">
  <th>id</th>
  <th>Nom</th>
  <th>Prenom</th>
  <th>Telephone</th>
  <th>Adresse</th>
  <th>Sexe</th>
  <th>Tuteur</th>
 </tr>
 <tr>
  <td>1</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr>
  <td>2</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr>
  <td>3</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr>
  <td>4</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr>
  <td>5</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr>
  <td>6</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr>
  <td>7</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
</table>
<button type="submit" class="btn btn-outline-danger"  name="valider">Imprimer</button>
<button type="submit" class="btn btn-outline-danger"  name="valider">Nouveau</button>
<?php include 'foot.php'; ?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  

