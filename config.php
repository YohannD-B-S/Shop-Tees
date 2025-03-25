<?php

// j'active l'affichage des erreurs sur le navigateur pour le debug
// 1 = on affiche les erreurs
// 0 = on ne les affiche pas
ini_set('display_errors', 1);

// j'active l'affichage des erreurs de démarrage
// 1 = on affiche les erreurs de démarrage
// 0 = on ne les affiche pas
ini_set('display_startup_errors',1);

//cette ligne définit le niveau des erreurs à afficher
// E_ALL = on affiche toutes les erreurs (syntaxe, logique, etc...)
error_reporting(E_ALL);