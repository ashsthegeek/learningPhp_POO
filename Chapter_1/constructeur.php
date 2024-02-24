<?php

// Création de la classe voiture
class Voiture 
{
    // Ici on définit les attributs de la classe Voiture sans initialisation
    public $marque;
    public $model;
    public $couleur;

    // Création d"un constructeur pour notre classe Voiture

    public function __construct($marque, $model, $couleur) 
    {
        // Affection des valeurs
        $this->marque = $marque;
        $this->model = $model;
        $this->couleur = $couleur;
        // $this permet de dire prend l'objet courant et affecte les valeurs
    }
}

// Création d'une Objet à partir de la classe Voiture

$toyota = new Voiture('Toyota', 'RAV4', 'Rouge');
echo $toyota->marque . ' ' .$toyota->model . ' ' . $toyota->couleur;
// Retourne : Toyota RAV4 Rouge
$mercedes = new Voiture('Mercedes', 'Maybak 2023', 'Gris claire');
echo $mercedes->marque . ' ' .$mercedes->model . ' ' . $mercedes->couleur ;
// Retourne : Mercedes Maybak 2023 Gris claire

/*
    A retenir, le constructeur d'une classe est appelé 
    à chaque fois qu'on crée un objet de cette classe !!!
*/