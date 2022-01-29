<?php

class Movie {
    private $titolo;
    private $regista;
    private $sinossi;
    private $dataUscita;

    public function __construct($_titolo, $_regista, $_dataUscita) {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->dataUscita = $_dataUscita;
    }

    public function setSinossi($_sinossi) {
        $this->sinossi = $_sinossi;
    }

    public function getSinossi() {
        return $this->sinossi;
    }

    public function getTitolo() {
        return $this->titolo;
    }
    public function getRegista() {
        return $this->regista;
    }
    public function getDatauscita() {
        return $this->dataUscita;
    }

  


}