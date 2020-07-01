<?php

class DB
{
    private $host;
    private $user;
    private $pwd;
    private $db;
    private $charset;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->db = 'mundial_seccion8';
        $this->pwd = '';
        $this->charset = 'utf8mb4';


    }

    public function connect()
    {
        try {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false];
            $pdo = new PDO($connection, $this->user, $this->pwd, $options);
            return $pdo;
        } catch (PDOException $e) {
            echo 'ERROR!';
            print_r("Error de conexcion" . $e->getMessage());

        }
    }
}

?>