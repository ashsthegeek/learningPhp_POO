<?php
    /* 
        Créer une classe personne avec les attributs Prenom, Nom et Age.
        Créer un constructeur de cette classe qui permet d'afficher ces infos
    */

    // Création de la classe

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

    // Création d'une instance de cette classe personne

    $birama = new Personne('Birama', 'DIOP', 20);

    echo $birama->prenom . ' ' . $birama->nom . ' ' .$birama->age ;
    /* 
        Ici, nous avons créer une instance de l'objet personne
        ce qui retourne : Birama DIOP 20.
        On peut créer alors autant de d'instance que l'on souhaite 
        à partir de la classe Personne
    */