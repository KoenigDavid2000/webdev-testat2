<?php 

class User{
    private $ID;
    private $geschlecht;
    private $beruf;
    private $alter;

    public function __construct() {

    }

    public function getID() {
        return $this->ID;
    }

    public function setID($ID)  {
        $this->ID  = $ID;
    }

    public function getGeschlecht() {
        return $this->geschlecht;
    }

    public function setGeschlecht($geschlecht)  {
        $this->geschlecht = $geschlecht;
    }

    public function getBeruf() {
        return $this->beruf;
    }

    public function setBeruf($beruf)  {
        $this->beruf = $beruf;
    }

    public function getAlter() {
        return $this->alter;
    }

    public function setAlter($alter)  {
        $this->alter  = $alter;
    }

}
?>