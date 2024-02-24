<?php
/* 
    Création de notre premier classe en POO PHP
    Pour créer une classe, on utilise le mot clé "class" 
    suivie du nom de notre classe.
*/
// Création de la classe voiture
class Voiture 
{
    // Ici on définit les attributs de la classe Voiture
    public $marque = 'Toyota';
    public $model = 'RAV4';
    public $couleur = 'Rouge';
}

// Création d'une instance ou objet de la classe Voiture

// Création d'une objet Toyota

$toyota = new Voiture;

// Affichage de l'Objet Toyota

echo $toyota->marque . ' ' . $toyota->model . ' ' . $toyota->couleur;

/* 
    Comme vous pouvez le contater, ici nous avons initialisé tous les
    attributs avec chacun ses propres valeur, ce qui n'est pas conseillé
    en POO. Ce serait comme dire que toutes le voiture sont des Toyota
    RAV4 de couleur Rouge. Ce qui n'est pas correcte.

    Dans l'autre partie, nous allons voire la notion de constructeur.
*/