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
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $genre = $_POST['genre'];
  $profession = $_POST['profession'];
  $telephone = $_POST['telephone'];
  $adresse = $_POST['adresse'];
  $email = $_POST['email'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `Tuteur`(`nom`, `prenom`, `genre`, `profession`, `telephone`, `adresse`, `email`) VALUES (:nom,:prenom,:genre,:profession,:telephone,:adresse,:email)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":nom"=>$nom,":prenom"=>$prenom,":genre"=>$genre,":profession"=>$profession,":telephone"=>$telephone,":adresse"=>$adresse,":email"=>$email));

  // vérifier si la requête d'insertion a réussi
  if($exec){
    echo 'Donnees inserees avec succes';
  }else{
    echo "Echec de l'operation d'insertion";
  }
}
?>