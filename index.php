<?php

    class Movie {
        public $title;
        public $regista;
        public $num_actors;
        public $genere;

        public function __constructor($_title, $_regista, $_num_actors, $_genere) {

            $this->title = $_title;
            $this->regista = $_regista;
            $this->num_actors = SetNum($_num_actors);
            $this->genere = $_genere;
        }

        public function SetNum($num_actors) {
            if(!is_numeric($num_actors)) return false;

            $this->num_actors = $num_actors;
        }
    }

    $Film = new Movie("titanic", "marco", 4, "azione");

    var_dump($Film);
?>