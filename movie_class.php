<?php

    // Creo una classe Movie, che servirà a generare delle istanze (oggetti), in questo caso film specifici
    class Movie {
        // Scrivo le variabili (attributi) della classe Movie
        public $titolo;
        public $regista;
        public $descrizione;
        public $lingua_originale;
        public $data_pubblicazione;
        public $voto;
        public $genere;
        public $oscar = false;
        // Scrivo le funzioni (metodi) della classe Movie
        public function  winOscar($num_oscar){
            if($num_oscar > 0){
                this->oscar = true;
            }
        }
        public function printMovie(){
            if(this->oscar){
                return this->titolo .'<br>Regia di: ' .this->regista .'<br>Vincitore Oscar!>';
            }else{
                return this->titolo .'<br>Regia di: ' .this->regista;
            }
        }
        // Scrivo un costruttore della classe Movie 
        function __construct($titolo, $regista, $lingua_originale, $data_pubblicazione, $voto, $genere){
            this->titolo = $titolo;
            this->regista = $regista;
            this->lingua_originale = $lingua_originale;
            this->data_pubblicazione = $data_pubblicazione;
            this->voto = $voto;
            this->gnere = $genere;
        }
    }

?>