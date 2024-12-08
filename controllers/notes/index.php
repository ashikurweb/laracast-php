<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$notes = $db->query("SELECT * FROM notes WHERE user_id = 1")->get();

view("notes/index.view.php", [
    'headding' => 'My Notes',
    'notes'    => $notes
]);
