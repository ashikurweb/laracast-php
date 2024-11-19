<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laracast Tutotial || Code With By Ashikur Rahman</title>
</head>

<body>
    <h1>Recommended Books</h1>

    <?php
    $books = [
        'Do Androids Dream of Electric Sheep',
        'The Langolires',
        'Hail Marry'
    ]; 
    ?>

    <ul>
        <?php foreach ( $books as $book ) : ?>
            <li><?php echo $book ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>