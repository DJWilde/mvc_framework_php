<?php
    class Strony extends Kontroler {
        public function __construct() {
            // Tu możesz umieścić różne rzeczy :)
        }

        public function index() {
            $dane = array(
                'tytul' => 'Witaj'
            );

            $this->wczytajWidok('strony/index', $dane);
        }

        public function oNas() {
            $dane = array(
                'tytul' => 'O nas'
            );

            $this->wczytajWidok('strony/o_nas', $dane);
        }

        public function kontakt() {
            $dane = array(
                'tytul' => 'Kontakt'
            );

            $this->wczytajWidok('strony/kontakt', $dane);
        }
    }