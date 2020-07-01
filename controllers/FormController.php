<?php
require_once '../libs/Database.php';

class FormController extends DB
{
    public function getTeams()
    {
        $query = $this->connect()->prepare('SELECT * FROM equipos');
        $query->execute();
        if ($query->rowCount()) {
            return $query;
        } else {
            return [];
        }
    }

    public function getTeam($idTeam){
        $teamOf = '';
        $query = $this->connect()->prepare('SELECT * FROM equipos WHERE idEquipo = :idTeam');
        $query->execute(['idTeam' => $idTeam]);
        if ($query->rowCount()) {
            foreach ($query as $currentTeam){
                $teamOf = $currentTeam['nombreEquipo'];
            }
            return $teamOf;
        } else {
            return "";
        }
    }

    public function getPlayers()
    {
        $query = $this->connect()->prepare('SELECT * FROM jugadores');
        $query->execute();
        if ($query->rowCount()) {
            return $query;
        } else {
            return [];
        }
    }
}

?>
