<?php

$errors = [];

if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
  $errors['name'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
  $errors['email'] = "Vous n'avez pas renseigné un email valide";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
  $errors['message'] = "Vous n'avez pas renseigné votre message";
}

//permet d'ouvrir une session pour récupérer les errors dans le HTML
session_start();

if(!empty($errors)){
  $_SESSION['errors'] = $errors; //on envoie dans la session le tableau des erreurs
  $_SESSION['inputs'] = $_POST;
  // je redirige
  header('Location: contact.php');
}else{
  $_SESSION['success'] = 1;

  $message = $_POST['message'];
  $headers = 'FROM: site@local.fr';
  
  mail('chrisblassiaux@yopmail.com', 'formulaire de contact', $message, $headers);

  // je redirige
  header('Location: contact.php');
}

// Voir les erreurs sur le navigateur
// var_dump($errors);
// die();


?>