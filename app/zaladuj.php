<?php
    // Wczytaj plik konfiguracyjny
    require_once 'konfiguracja/konfiguracja.php';

    // Wczytaj pliki biblioteczne (automatyzacja :O)
    spl_autoload_register(function($nazwaKlasy) {
        require_once 'biblioteki/' . $nazwaKlasy . '.php';
    });