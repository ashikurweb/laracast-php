<?php 
require 'views/partials/head.php';

require 'functions.php';

require 'DB/Database.php';

// require 'router.php';

// Connect to our MySql database.

$config = require('config.php');

$db = new Database( $config['database'] );
$posts = $db->query("SELECT * FROM posts")->fetchAll();

dd( $posts );
