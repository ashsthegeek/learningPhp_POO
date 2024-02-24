<?php
    // Création de la classe Personne
    class Personne 
    {
        public $prenom;
        public $nom;
        public $age;

        // Création du constructeur

        public function __construct($prenom, $nom, $age)
        {
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->age = $age;
        }
    }

    $birama = new Personne('Birama', 'DIOP', 20);

    echo $birama->prenom . ' ' . $birama->nom . ' ' .$birama->age ;