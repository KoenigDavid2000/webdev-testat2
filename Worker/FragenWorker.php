<?php

class FragenWorker {

    public function insertAntwort($frageid) {
        $sql="insert into answer (frage, antwort, user_id)
                values (:frage, :antwort, :user_id)";

        $user = $_SESSION['user'];
        $userid = $user->getID();

        $params = array("frage" => substr($frageid, 0, 1),
                       "user_id" => $userid,
                       "antwort" => substr($frageid, 1, 2));
        $result = DB::exe($sql, $params);
    }

    public function getAnzahlByGeschlecht($geschlecht) {
        $sql="select count(id) as Anzahl
               from user
               where gender = :geschlecht";

        $params = array("geschlecht" => $geschlecht);

        $result = DB::exe($sql, $params);

        foreach ($result as $row) {
            $anzahl = $row['Anzahl'];
        }

        return $anzahl;
    }

    public function getAnzahlAntwortenByGeschlecht($frage, $geschlecht) {
        $sql="select count(user.id) as Anzahl
               from answer, user
               where answer.user_id = user.id
               and antwort = 1
               and frage = :frage
               and gender = :geschlecht";

        $params = array("frage" => $frage,
                        "geschlecht" => $geschlecht);

        $result = DB::exe($sql, $params);

        foreach ($result as $row) {
            $anzahl = $row['Anzahl'];
        }

        return $anzahl;
            
    }

    public function getAnzahlByAlter($alter) {
        $sql="select count(id) as Anzahl
               from user
               where age = :alter";

        $params = array("alter" => $alter);

        $result = DB::exe($sql, $params);

        foreach ($result as $row) {
            $anzahl = $row['Anzahl'];
        }

        return $anzahl;
    }

    public function getAnzahlAntwortenByAlter($frage, $alter) {
        $sql="select count(user.id) as Anzahl
               from answer, user
               where answer.user_id = user.id
               and antwort = 1
               and frage = :frage
               and age = :alter";

        $params = array("frage" => $frage,
                        "alter" => $alter);

        $result = DB::exe($sql, $params);

        foreach ($result as $row) {
            $anzahl = $row['Anzahl'];
        }

        return $anzahl;
            
    }

    public function getAnzahlByBeruf($job) {
        $sql="select count(id) as Anzahl
               from user
               where job = :job";

        $params = array("job" => $job);

        $result = DB::exe($sql, $params);

        foreach ($result as $row) {
            $anzahl = $row['Anzahl'];
        }

        return $anzahl;
    }

    public function getAnzahlAntwortenByBeruf($frage, $job) {
        $sql="select count(user.id) as Anzahl
               from answer, user
               where answer.user_id = user.id
               and antwort = 1
               and frage = :frage
               and job = :job";

        $params = array("frage" => $frage,
                        "job" => $job);

        $result = DB::exe($sql, $params);

        foreach ($result as $row) {
            $anzahl = $row['Anzahl'];
        }

        return $anzahl;
            
    }
}

?>