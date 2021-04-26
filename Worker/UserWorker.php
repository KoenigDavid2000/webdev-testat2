<?php

class UserWorker {

    public function createUser($geschlecht, $beruf, $alter) {

        $sql="insert into user (geschlecht, beruf, alter)
                values (:geschlecht, :beruf, :antwort)"

        $params=array("geschelcht" => $geschelcht
                       "beruf" => $beruf
                       "alter" => $alter);
        $result= DB::exe($sql, $params);
    }


}

?>