<?php
include 'connection.php';
if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['telephone']) 
&& isset($_POST['adresse'])&& isset($_POST['mail']) && isset($_POST['password']))

{
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $telephone=$_POST['telephone'];
    $adresse=$_POST['adresse'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];
    $sql="INSERT INTO makeup (prenom,nom,telephone,adresse,mail,password) values 
    ('$prenom','$nom','$telephone','$adresse','$mail','$password')";
     $stm=$con->prepare($sql);
     $stm->execute($sql);
   
   if($con){
            echo"$prenom";
            echo"<br>";
            echo "$nom";
            echo"<br>";                                                    
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ma page</title>
	<link rel="stylesheet" type="text/css" href="makeup.css">
</head>
<body>

	<div class="main">
    <div class="navbar">
      <div class="icon">
        <h2 class="logo">MakeupForStar</h2>
      </div>  
      <div class="menu">
        <ul>
          <li><a href="makeupp.php">MAKEUP</a></li>
          <li><a href="coiffure.php">COIFFURES</a></li>
          <li><a href="ongle.php">POSE ONGLES</a></li>
          <li><a href="cils.php">POSE CILS</a></li>
          <li><a href="contact.php">CONTACTS</a></li>
        </ul>
      </div>
    
      <div class="search">
          <input class="srch" type="text" name="recherche" placeholder="Entrer le texte"/>
          <a href="recherche.php"><button class="btn">Recherche</button></a>
      </div>
      </div>
      <form method="post" action="connection.php">
      <div class="form2">
        <h2>Inscrivez-vous</h2>
              <input type="text" name="prenom" placeholder="Votre Prenom"/>
              <input type="text" name="nom" placeholder="Votre Nom"/>
              <input type="text" name="email" placeholder="Votre Telephone"/>              
              <input type="password" name="adresse" placeholder="Votre Adresse"/>
              <input type="email" name="email" placeholder="Votre mail"/>
              <input type="password" name="password" placeholder="Votre Mot de passe"/>

              <button class="btnn2" type="submit" name="submit">S'Inscrire</button>
      </div>
      </form> 
      </div>
      </body>
      </html>   