<?php

class AuswertungView {

    public static function openAuswertung() {

        //$rechnung= $worker->getAnzahlAntwortenByGeschlecht(1, "weiblich")/$worker->getAnzahlByGeschlecht("weiblich") * 100 . "%";
        
        $print="
        <!DOCTYPE html>
        <html lang='en'>
        <head>
          <meta charset='UTF-8'>
          <title>Umfrage</title>
          <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
          </style>
        </head>
        <body>
            <table>
                <tr>
                    <th></th>
                    <th>Weiblich: Ja</th>
                    <th>Männlich: Ja</th>
                    <th>Schimpanse: Ja</th>
                </tr>
                <tr>
                    <td>Frage 1</td>
                    <td>".self::printGender(1, "weiblich")."</td>
                    <td>".self::printGender(1, "männlich")."</td>
                    <td>".self::printGender(1, "schimpanse")."</td>
                 </tr>
                 <tr>
                    <td>Frage 2</td>
                    <td>".self::printGender(2, "weiblich")."</td>
                    <td>".self::printGender(2, "männlich")."</td>
                    <td>".self::printGender(2, "schimpanse")."</td>
                 </tr>
                 <tr>
                    <td>Frage 3</td>
                    <td>".self::printGender(3, "weiblich")."</td>
                    <td>".self::printGender(3, "männlich")."</td>
                    <td>".self::printGender(3, "schimpanse")."</td>
                 </tr>
                 <tr>
                    <td>Frage 4</td>
                    <td>".self::printGender(4, "weiblich")."</td>
                    <td>".self::printGender(4, "männlich")."</td>
                    <td>".self::printGender(4, "schimpanse")."</td>
                 </tr>
            </table>
            <br/>
            <table>
                <tr>
                    <th></th>
                    <th>18-25: Ja</th>
                    <th>26-35: Ja</th>
                    <th>26-50: Ja</th>
                    <th>50+: Ja</th>
                </tr>
                <tr>
                    <td>Frage 1</td>
                    <td>".self::printAge(1, 25)."</td>
                    <td>".self::printAge(1, 35)."</td>
                    <td>".self::printAge(1, 50)."</td>
                    <td>".self::printAge(1, 75)."</td>
                 </tr>
                 <tr>
                    <td>Frage 2</td>
                    <td>".self::printAge(2, 25)."</td>
                    <td>".self::printAge(2, 35)."</td>
                    <td>".self::printAge(2, 50)."</td>
                    <td>".self::printAge(2, 75)."</td>
                 </tr>
                 <tr>
                    <td>Frage 3</td>
                    <td>".self::printAge(3, 25)."</td>
                    <td>".self::printAge(3, 35)."</td>
                    <td>".self::printAge(3, 50)."</td>
                    <td>".self::printAge(3, 75)."</td>
                 </tr>
                 <tr>
                    <td>Frage 4</td>
                    <td>".self::printAge(4, 25)."</td>
                    <td>".self::printAge(4, 35)."</td>
                    <td>".self::printAge(4, 50)."</td>
                    <td>".self::printAge(4, 75)."</td>
                 </tr>
            </table>
        </body>
        </html>  
        ";

        echo $print;
    }

    public static function printGender($frage, $gender) {
        $worker = new FragenWorker();
        $anzahlGeschlecht=$worker->getAnzahlByGeschlecht($gender);
        $anzahlAntworten=$worker->getAnzahlAntwortenByGeschlecht($frage, $gender);

        if ($anzahlAntworten != 0 && $anzahlGeschlecht != 0) {
            return $anzahlAntworten/$anzahlGeschlecht * 100 ."%";
        } else {
            return "-";
        }
        
    }

    public static function printAge($frage, $age) {
        $worker = new FragenWorker();
        $anzahlAlter=$worker->getAnzahlByAlter($age);
        $anzahlAntworten=$worker->getAnzahlAntwortenByAlter($frage, $age);

        if ($anzahlAntworten != 0 && $anzahlAlter != 0) {
            return $anzahlAntworten/$anzahlAlter * 100 ."%";
        } else {
            return "-";
        }
        
    }

    public static function printJob($frage, $job) {
        $worker = new FragenWorker();
        $anzahlBeruf=$worker->getAnzahlByBeruf($job);
        $anzahlAntworten=$worker->getAnzahlAntwortenByBeruf($frage, $job);

        if ($anzahlAntworten != 0 && $anzahlBeruf != 0) {
            return $anzahlAntworten/$anzahlBeruf * 100 ."%";
        } else {
            return "-";
        }
        
    }
}

?>