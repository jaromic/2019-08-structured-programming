<?php
const MONATE_PRO_JAHR=12;

class Beschaeftigung {
    const ASVG=1;
    const GSVG=2;
}

/**
 * Class Mitglied
 */
class Mitglied {

    public $beschaeftigungsverhaeltnis;

    public function __construct() {
        $this->beschaeftigungsverhaeltnis=1;
    }

    /**
     * @return int
     */
    public function berechneSteuer() {
        return 0;
    }
    public function berechneVersicherung() {
        return 0;
    }
}

 function main() {

     $bezugBasis = 0;

     $mitglied = new Mitglied();

     if ($mitglied->beschaeftigungsverhaeltnis == Beschaeftigung::ASVG) { /* Angestellter */
         $bezugsMonate = MONATE_PRO_JAHR + 2;
         $bezugNetto = $bezugBasis * $bezugsMonate;
         $bezugBrutto = $bezugNetto + $mitglied->berechneSteuer();
     } elseif ($mitglied->beschaeftigungsverhaeltnis == Beschaeftigung::GSVG) { /* Freiberufler */
         $bezugsMonate = MONATE_PRO_JAHR;
         $bezugNetto = $bezugBasis * $bezugsMonate;
         $bezugBrutto = $bezugNetto + $mitglied->berechneSteuer() + $mitglied->berechneVersicherung();
     }

     echo $bezugBrutto;

 }

 main();