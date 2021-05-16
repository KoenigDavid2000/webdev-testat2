<?php

class FrageView {
    public static function openFragen($param=true) {

      if ($param == false) {
        echo "<h4 style='color:red'>Bitte wählen sie für alle Fragen eine Antwort aus!</h4>";
      }

        $print="
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <title>Umfrage</title>
            <style>
              body {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                text-align: center;
                align-items: center;
                align-content: center;
                font-family: Arial, Helvetica, sans-serif;
              }
              form {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                text-align: center;
                align-items: center;
                align-content: center;
                font-family: Arial, Helvetica, sans-serif;
              }
              .question-container {
                background-color: #ffffff;
        
                border:  1px solid beige;
        
                box-shadow: 0 1px 2px rgba(0,0,0,.2);
              }
              div {
                padding: 10px;
              }
              .div1 {
                float: right;
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
        <form action='index.php?action=seite3' method=post>
        <div class='question-container' style='width: 80%'>
        <h3>1.Frage:</h3>
          <div class='question-container'>
           <p>Ist das ihre erste Homeoffice-Erfahrung?</p>
           <input name='frage1' type='radio' value='11'>Ja
           <input name='frage1' type='radio' value='10'>Nein
         </div>
        </div>
        
        <div class='question-container' style='width: 80%'>
          <h3>2.Frage:</h3>
          <div class='question-container'>
            <p>Wird Ihre Leistungserfüllung im Homeoffice besonders kontrolliert?</p>
            <input name='frage2' type='radio' value='21'>Ja
            <input name='frage2' type='radio' value='20'>Nein
          </div>
        </div>
        
        <div class='question-container' style='width: 80%'>
          <h3>3.Frage:</h3>
          <div class='question-container'>
            <p>Können Sie zu Hause ungestört arbeiten??</p>
            <input name='frage3' type='radio' value='31'>Ja
            <input name='frage3' type='radio' value='30'>Nein
          </div>
        </div>
        
        <div class='question-container' style='width: 80%'>
          <h3>4.Frage:</h3>
          <div class='question-container'>
            <p>Würden Sie weiterhin im Homeoffice arbeiten, wenn Ihnen die Möglichkeit zur Verfügung steht?</p>
            <input name='frage4' type='radio' value='41'>Ja
            <input name='frage4' type='radio' value='40'>Nein
          </div>
        </div>
        <div class='question-container div1' style='width: 80%'>
          <input class='button button1' type=submit  style='float: right' value='absenden'>
        </div>
        </form>
        </body>
        </html>";

        //echo $_POST["frage1"];
        //echo $_POST["frage2"];

        echo $print;

    }
}

?>