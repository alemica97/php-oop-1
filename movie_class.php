<?php

    // Creo una classe Movie, che servirà a generare delle istanze (oggetti), in questo caso film specifici
    class Movie {
        // Scrivo le variabili (attributi) della classe Movie
        public $titolo;
        public $regista;
        public $descrizione;
        public $lingua_originale;
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
    }

?>