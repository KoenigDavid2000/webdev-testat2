<?php


class HomeView {

    public static function openHome() {

     $print="
        <!DOCTYPE html>
        <html lang='en'>
        <head>
          <meta charset='UTF-8'>
          <title>Umfrage</title>
          <style>
            body {
              display: flex;
              justify-content: center;
              text-align: center;
              align-items: center;
              align-content: center;
              margin-top: 10%;
              font-family: Arial, Helvetica, sans-serif;
            }
            .button1 {
              background-color: white;
            }
        
            .button1:hover {
              background-color: beige;
              color: black;
            }
        
            .button {
              border: 2px solid beige;
              color: black;
              padding: 16px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              transition-duration: 0.4s;
              cursor: pointer;
            }
        
          </style>
        </head>
        <body>
        <div align='center'>
        <form action='index.php?action=seite2' method=post>
          <h1>Umfrage zu der Arbeit im Homeoffice</h1>
          <p>Vielen Dank, dass Sie an der Umfrage zu Homeoffice teilnehmen möchten!</p>
          <p>Bevor Sie beginnen, möchten wir Sie bitten, folgende Daten auszufüllen:</p>
          <p>Geschlecht:
          <select name='geschlecht' size=1>
            <option value='maennlich'>männlich
            <option value='weiblich'>weiblich
            <option value='schimpanse'>schimpanse
          </select>
          </p>
          <p>
          Berufsverhältnis:
            <select name='beruf' size=1>
              <option value='student'>Student
              <option value='selbststaendig'>Selbstständig
              <option value='angestellt'>Angestellt
            </select>
          </p>
          <p>
          Altersbereich:
          <select name='alter' size=1>
            <option value='25'>18-25
            <option value='35'>26-35
            <option value='50'>36-50
            <option value='75'>50+
          </select>
          </p>
          <br>
          <input class='button button1' type=submit  value='Umfrage starten'>
        </form>
        </div>";

        //if ($request['start'] == "maennlich") {
            if (isset($_POST['geschlecht']))
            $print.= $_POST['geschlecht'] . "<br>";

            if (isset($_POST['alter']))
            $print.=$_POST['alter'];
            //}
        $print.="
        </body>
        </html>";

        echo $print;

    }
}


?>
