<?php

class AuswertungView {

    public static function openAuswertung() {

        //$rechnung= $worker->getAnzahlAntwortenByGeschlecht(1, "weiblich")/$worker->getAnzahlByGeschlecht("weiblich") * 100 . "%";
        $genderArray = ["weiblich", "maennlich", "schimpanse"];
        $jobArray = ["student", "selbststaendig", "angestellt"];
        $ageArray = [25, 35, 50, 75];
        
        $print="
        <!DOCTYPE html>
        <html lang='en'>
        <head>
          <meta charset='UTF-8'>
          <title>Auswertung</title>
          <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                border: 3px solid white;
                background-color: beige;
                border-radius: 15px;
            }

            body{
                border: 3px solid beige;
                border-radius: 15px;
                padding: 20px;
            }

            table {
                width: 50%;
            }

            .td1 {
                width: 100px;
            }
            .left {
                text-align: center;
            }
    </style>
        </head>
        <body>
            <h1>Auswertung</h1>
            <p><h2>Fragen:</h2>
                Frage 1: Ist das ihre erste Homeoffice-Erfahrung?<br>
                Frage 2: Wird Ihre Leistungserfüllung im Homeoffice besonders kontrolliert?<br>
                Frage 3: Können Sie zu Hause ungestört arbeiten?<br>
                Frage 4: Würden Sie weiterhin im Homeoffice arbeiten, wenn Ihnen die Möglichkeit zur Verfügung steht?
            </p><br>
           
            <table>
                <tr>
                    <th></th>
                    <th>Weiblich: Ja</th>
                    <th>Männlich: Ja</th>
                    <th>Schimpanse: Ja</th>
                </tr>
                <tr>";
            $count = 0;
            $count2 = 1;
            for ( $i = 0;  $i < 12; $i++ ) {
               
                if ($i == 0 || $i == 3 || $i == 6 || $i == 9) {
                    $print.= "<td class='td1'>Frage ".$count2."</td>";
                    $count2++;
                }
                if ($i < 3) {
                    $print.= "<td class='left'>".self::printGender(1, $genderArray[$count])."</td>";    
                } elseif ($i < 6) {
                    $print.= "<td class='left'>".self::printGender(2, $genderArray[$count])."</td>";    
                } elseif ($i < 9) {
                    $print.= "<td class='left'>".self::printGender(3, $genderArray[$count])."</td>";    
                } elseif ($i < 12) {
                    $print.= "<td class='left'>".self::printGender(4, $genderArray[$count])."</td>";    
                }

                $count++;

                if ($i == 2  || $i == 5 ||  $i == 8 || $i == 11 ) {
                    $print.= "</tr><tr>";
                     $count = 0;
                }
            }

            $count = 0;
            $count2 = 1;

            $print.="

            </tr>
            </table>

            <br/>
            <br/>

            <table>
                <tr>
                    <th></th>
                    <th>18-25: Ja</th>
                    <th>26-35: Ja</th>
                    <th>36-50: Ja</th>
                    <th>50+: Ja</th>
                </tr>
                <tr>";
                for ( $i = 0;  $i < 16; $i++ ) {
               
                    if ($i == 0 || $i == 4 || $i == 8 || $i == 12 ) {
                        $print.= "<td class='td1'>Frage ".$count2."</td>";
                        $count2++;
                    }
                    if ($i < 4) {
                        $print.= "<td class='left'>".self::printAge(1, $ageArray[$count])."</td>";    
                    } elseif ($i < 8) {
                        $print.= "<td class='left'>".self::printAge(2, $ageArray[$count])."</td>";    
                    } elseif ($i < 12) {
                        $print.= "<td class='left'>".self::printAge(3, $ageArray[$count])."</td>";    
                    } elseif ($i < 16) {
                        $print.= "<td class='left'>".self::printAge(4, $ageArray[$count])."</td>";    
                    }
    
                    $count++;
    
                    if ($i == 3  || $i == 7 ||  $i == 11 || $i == 15) {
                        $print.= "</tr><tr>";
                         $count = 0;
                    }
                }
    
                $count = 0;
                $count2 = 1;
    
                $print.="
                
                 </tr>
            </table>

            <br/>
            <br/>

            <table>
                <tr>
                    <th></th>
                    <th>student: Ja</th>
                    <th>selbstständig: Ja</th>
                    <th>angestellt: Ja</th>
                </tr>
                <tr>";
                for ( $i = 0;  $i < 12; $i++ ) {
                   
                    if ($i == 0 || $i == 3 || $i == 6 || $i == 9) {
                        $print.= "<td class='td1'>Frage ".$count2."</td>";
                        $count2++;
                    }
                    if ($i < 3) {
                        $print.= "<td class='left'>".self::printJob(1, $jobArray[$count])."</td>";    
                    } elseif ($i < 6) {
                        $print.= "<td class='left'>".self::printJob(2, $jobArray[$count])."</td>";    
                    } elseif ($i < 9) {
                        $print.= "<td class='left'>".self::printJob(3, $jobArray[$count])."</td>";    
                    } elseif ($i < 12) {
                        $print.= "<td class='left'>".self::printJob(4, $jobArray[$count])."</td>";    
                    }
    
                    $count++;
    
                    if ($i == 2  || $i == 5 ||  $i == 8 || $i == 11 ) {
                        $print.= "</tr><tr>";
                         $count = 0;
                    }
                }
    
                $print.="
    
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
            return number_format((float) $anzahlAntworten/$anzahlGeschlecht, 3, '.', '') * 100 ."%";
        } else {
            return "-";
        }
        
    }

    public static function printAge($frage, $age) {
        $worker = new FragenWorker();
        $anzahlAlter=$worker->getAnzahlByAlter($age);
        $anzahlAntworten=$worker->getAnzahlAntwortenByAlter($frage, $age);

        if ($anzahlAntworten != 0 && $anzahlAlter != 0) {
            return number_format((float) $anzahlAntworten/$anzahlAlter, 3, '.', '') * 100 ."%";
        } else {
            return "-";
        }
        
    }

    public static function printJob($frage, $job) {
        $worker = new FragenWorker();
        $anzahlBeruf=$worker->getAnzahlByBeruf($job);
        $anzahlAntworten=$worker->getAnzahlAntwortenByBeruf($frage, $job);

        if ($anzahlAntworten != 0 && $anzahlBeruf != 0) {
            return number_format((float) $anzahlAntworten/$anzahlBeruf, 3, '.', '') * 100 ."%";
        } else {
            return "-";
        }
        
    }
}

?>