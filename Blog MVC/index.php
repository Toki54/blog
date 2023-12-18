<?php
require 'Model.php';
// accès aux données
$billets = getBillets();
// affichage
require 'vueAccueil.php';

require 'Model.php';
try {
 $billets = getBillets();
 require 'vueAccueil.php';
}
catch (Exception $e) {
 echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}

require 'Model.php';
try {
 $billets = getBillets();
 require 'vueAccueil.php';
}
catch (Exception $e) {
 $msgErreur = $e->getMessage();
 require 'vueErreur.php';
}