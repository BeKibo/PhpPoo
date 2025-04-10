<?php

require_once 'Utilisateur.php';

$tom = new Utilisateur();
$tom 
    ->setNom('tom')
    ->setEmail('tom@gmail.com')
    ->setIndentifiant(uniqid('USR-'))
    ->setDateInscription(new DateTime('now'))
    ;

var_dump($tom);

