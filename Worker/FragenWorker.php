<?php

class FragenWorker {

    public function insertAntwort($frageid, $antwort) {
         $sql="insert into ergebniss (frage_id, user_id, antwort)
                values (:frage_id, :user_id, :antwort)"

        $user =  $_SESSION['user']
        $userid = $user->getID();

        $params = array("frage_id" => $frageid
                       "user_id" => $userid
                       "antwort" => $antwort);
        $result = DB::exe($sql, $params);
    }

    public function getAnzahlByGeschlecht($geschlecht) {
        $sql="select count(user_id)
               from users
               and geschlecht = :geschlecht";

        $params = array("geschlecht" => $geschlecht);

        $result = DB::exe($sql, $params);

        foreach ($result as $row) {
            $anzahl = $row['Anzahl'];
        }

        return $anzahl;
    }

    public function getAnzahlAnwortenByGeschlecht($frageid, $geschlecht) {
        $sql="select count(user_id) as Anzahl
               from ergebniss, users
               where ergebniss.user_id = users.user_id
               and antwort = 1
               and frage_id=:frage_id
               and geschlecht = :geschlecht";

        $params = array("frage_id" => $frageid
                        "geschlecht" => $geschlecht);

        $result = DB::exe($sql, $params);

        foreach ($result as $row) {
            $anzahl = $row['Anzahl'];
        }

        return $anzahl;
            
    }
}

?>