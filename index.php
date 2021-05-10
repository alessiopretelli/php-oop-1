<?php

ini_set("display_errors", 1);

class Movie {
    public $titolo;
    public $durata;
    public $genere;
    public $anno;
    public $cast;

    public function __construct($_titolo, $_durata, $_genere, $_anno, $_cast) {
        $this->titolo = $_titolo;
        $this->durata = $_durata;
        $this->genere = $_genere;
        $this->anno = $_anno;
        $this->cast = $_cast;
    }

    public function getDurata() {
        return $this->durata;
    }

}

$inception = new Movie("inception", 150, 'fantascienza', 2010, ["Leonardo di Caprio", "Joseph Gordon-Levitt"]);
var_dump($inception);
echo "Durata: " . $inception->getDurata() . " minuti.";

$si_alza_il_vento = new Movie("si alza il vento", 126, 'anime', 2013, 'Jiro Hirikoshi');
var_dump($si_alza_il_vento);
echo "Durata: " . $si_alza_il_vento->getDurata() . " minuti.";