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
            'releaseYear'   => 1968,
            'purchaseUrl'   => 'https://bhahat.com'
        ],

        [
            'name'          => 'A Million Mutinies Now',
            'author'        => 'Naipaul',
            'releaseYear'   => 2021,
            'purchaseUrl'   => 'https://naipaul.com'
        ],

        [
            'name'          => 'The Bread, Beauty and Revolution',
            'author'        => 'Chetan Bhagat',
            'releaseYear'   => 1968,
            'purchaseUrl'   => 'https://chetan.com'
        ],

        [
            'name'          => 'An Equal Music',
            'author'        => 'Vikram Seth',
            'releaseYear'   => 2011,
            'purchaseUrl'   => 'https://seth.com'
        ]
    ]; 

    function filter ( $items, $fn ) {
        $filteredItems = [];
        
        foreach ( $items as $item ) {
            if ( $fn($item) ) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }

    $filteredBooks = filter($books, function ( $book ){
        return $book['author'] === 'Naipaul';
    });

    ?>

    <ul>
       <?php foreach ( $filteredBooks as $book ) : ?>
        <a href="<?php echo $book['purchaseUrl'] ?>">
            <li><?php echo $book['name'] ?> - <?php echo $book['author'] ?>(<?php echo $book['releaseYear'] ?>) </li>
        </a>
      <?php endforeach; ?>
    </ul>

</body>
</html>