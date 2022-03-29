<?php

$host = 'localhost';
$dbname = 'Gestion_des_apprenants';
$username = 'root';
$password = '';

if(isset($_POST['valider'])){

  try {
  // se connecter à mysql
  $pdo = new PDO("mysql:host=$host;dbname=$dbname","root","");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }

  // récupérer les valeurs 
  $idTuteur = $_POST['idTuteur'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $telephone = $_POST['telephone'];
  $adresse = $_POST['adresse'];
  $genre = $_POST['genre'];
  $email = $_POST['email'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `Apprenants`(`idTuteur`,`nom`, `prenom`, `telephone`, `adresse`, `genre`, `email`) VALUES (:idTuteur,:nom,:prenom,:telephone,:adresse,:genre,:email)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":idTuteur"=>$idTuteur,":nom"=>$nom,":prenom"=>$prenom,":telephone"=>$telephone,":adresse"=>$adresse,":genre"=>$genre,":email"=>$email));

  // vérifier si la requête d'insertion a réussi
  if($exec){
    echo 'Donnees inserees avec succes';
  }else{
    echo "Echec de l'operation d'insertion";
  }
}
?>