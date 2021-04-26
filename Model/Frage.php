<?php

class Frage {
    private $ID;
    private $antwort;

    public function __construct() {

    }

    public function getID() {
        return $this->ID;
    }

    public function setID($ID)  {
        $this->ID  = $ID;
    }

    public function getAntwort() {
        return $this->antwort;
    }

    public function setAntwort($antwort)  {
        $this->antwort  = $antwort;
    }

}

?>