<?php 
require 'views/partials/head.php';

require 'functions.php';

// require 'router.php';

// Connect to our MySql database.

class Database {

    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=valet;password=valet;charset=utf8mb4";
        $this->connection = new PDO( $dsn );
    }
    public function query ( $query ) {

        $statement = $this->connection->prepare( $query );

        $statement->execute();
        return $statement;
    }
}

$db = new Database();
$post = $db->query("SELECT * FROM posts WHERE id = 1")->fetchAll(PDO::FETCH_ASSOC);

dd($post[0]['title']);