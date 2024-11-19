<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laracast Tutotial || Code With By Ashikur Rahman</title>
</head>
<style> 
    body {
        display: grid;
        place-items: center;
        min-height: 100vh;
        margin: 0;
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<body>
    <?php 
    $name = "Dark Matter";
    $read = false; # check boolean (true or false)

    if ( $read ) {
        $message = "You have read {$name}";
    } else {
        $message = "You have not read book!";
    }

    ?>

    <h1><?php echo $message ?></h1>
    
</body>
</html>