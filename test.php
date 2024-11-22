<?php

class Database {
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=valet;password=valetcharset=utf8mb4";
        $this->connection = new PDO ( $dsn );
    }
    public function query ( $query ) {

        $statement = $this->connection->prepare( $query );
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new Database();
$post = $db->query("SELECT * FROM posts WHERE id = 2");

var_dump( $post );
