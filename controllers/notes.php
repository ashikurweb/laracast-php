<?php
$config = require('config.php');
$db = new Database($config['database']);
$headding = 'My Notes';

$notes = $db->query("SELECT * FROM notes WHERE user_id = 5")->fetchAll();

// dd( $notes );

require 'views/notes.view.php';

