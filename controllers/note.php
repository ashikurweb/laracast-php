<?php
$config = require('config.php');
$db = new Database($config['database']);
$headding = 'Notes';

$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->fetch();

require 'views/note.view.php';

