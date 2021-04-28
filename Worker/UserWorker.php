<?php

class UserWorker {

    public function saveUser($geschlecht, $beruf, $alter) {

       echo $geschlecht . ", " . $beruf . ", " . $alter; 

        /*$sql="insert into user (geschlecht, beruf, alter)
                values (:geschlecht, :beruf, :antwort)"

        $params=array("geschelcht" => $geschlecht
                       "beruf" => $beruf
                       "alter" => $alter);
        $result= DB::exe($sql, $params);*/
    }


}

?>