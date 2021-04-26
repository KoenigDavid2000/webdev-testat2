<?php

$print="
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>test</title>
</head>
<body>
<form action='Controller/Frage1.php' method=post>
    <h1>Umfrage</h1>
    <p>Geschlecht</p>
    <select name=year size=1>
        <option value='maennlich' name='maennlich'>männlich
        <option value='weiblich' name='weiblich'>weiblich
        <option value='schimpanse' name='schimpanse'>schimpanse
    </select>
    <p>Sind sie Student/Schüler?</p>
    <input type=radio name=credit value=ja> JA
    <input type=radio name=credit value=nein> NEIN
    <p>Wie alt sind sie?</p>
    <select name=time_period size=1>
        <option value='18'>18-25
        <option value='20'>26-35
        <option value='30'>36-50
        <option value='50'>50+
    </select>
    <br>
    <input type='hidden' value='asdfaf'>
    <input type=submit value='start'>
</form>";

//if ($request['start'] == "maennlich") {
    if (isset($request['year']))
    $print.= $request['year'] . "<br>";

    if (isset($request['credit']))
    $print.=$request['credit'];
    //}
$print.="
</body>
</html>";

echo $print;

?>