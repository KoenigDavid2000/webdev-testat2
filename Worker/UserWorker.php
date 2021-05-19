<?php

include('class.db.php');

class UserWorker {

    public function saveUser($geschlecht, $beruf, $alter) {

       //echo $geschlecht . ", " . $beruf . ", " . $alter; 

        $sql="insert into user (gender, job, age)
              values (:geschlecht, :beruf, :alter)";

        $params=array("geschlecht" => $geschlecht,
                       "beruf" => $beruf,
                       "alter" => $alter);
        $result= DB::exe($sql, $params);

    }

    public function getUserByID($ID) {
        
        $sql="select Gender, Job, Age
              from user
              where id = :id";

        $params=array("id" => $ID);

        $result = DB::exe($sql, $params);

        foreach ($result as $row) {

            $user = new User();

            $user->setID($ID);
            $user->setGeschlecht($row['Gender']);
            $user->setBeruf($row['Job']);
            $user->setAlter($row['Age']);

        }

        return $user;
    }


}

?>