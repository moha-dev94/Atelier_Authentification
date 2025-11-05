<?php
// Supprime le cookie d'authentification
session_start()
  $randomNumber = $_SESSION['randomNumber'];
setcookie('authToken', '', time() - 60, '/', '', false, true); // Cookie expiré par la valeur -3600. Il n'est donc plus valable

// Redirection vers la page de connexion
header('Location: index.php');
exit();
?>
