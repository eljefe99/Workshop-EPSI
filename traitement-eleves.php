<?php

$linkDB = mysqli_connect('localhost', 'root', 'rootroot', 'workshop');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$school = $_POST['school'];
$year= $_POST['year'];
$email = $_POST['mail'];
$password = md5($_POST['password']);

$req = 'INSERT INTO eleves (nom, prenom, ddn, ecole, annee, mail, mdp) VALUES ("'.$firstname.'", "'.$lastname.'", "'.$dob.'", "'.$school.'", "'.$year.'", "'.$email.'", "'.$password.'")';
var_dump($req);

$res = mysqli_query($linkDB, $req);

var_dump($linkDB);

mysqli_errno($linkDB);
 ?>
