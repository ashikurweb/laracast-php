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
        [
            'name'          => 'Making India Awesome',
            'author'        => 'Chetan Bhagat',
            'purchaseUrl'   => 'https://bhahat.com'
        ],

        [
            'name'          => 'A Million Mutinies Now',
            'author'        => 'V.S. Naipaul',
            'purchaseUrl'   => 'https://naipaul.com'
        ],

        [
            'name'          => 'An Equal Music',
            'author'        => 'Vikram Seth',
            'purchaseUrl'   => 'https://seth.com'
        ]
    ]; 
    ?>

    <ul>
        <?php foreach( $books as $book ) : ?> 
        <a href="<?php echo $book['purchaseUrl'] ?>">
            <li><?php echo $book['name'] ?> - <?php echo $book['author'] ?></li>
        </a>
        <?php endforeach; ?>
    </ul>
</body>
</html>