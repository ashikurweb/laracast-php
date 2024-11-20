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
            'author'        => 'V.S. Naipaul',
            'releaseYear'   => 2021,
            'purchaseUrl'   => 'https://naipaul.com'
        ],

        [
            'name'          => 'An Equal Music',
            'author'        => 'Vikram Seth',
            'releaseYear'   => 2011,
            'purchaseUrl'   => 'https://seth.com'
        ]
    ]; 


    function filterByAuthor( $books ) {
        return 'Ashikur Rahman';
    }

    ?>

    <ul>
       <?php foreach ( $books as $book ) : ?>
        <?php if ( $book['author'] === 'Chetan Bhagat') : ?>
            <a href="<?php echo $book['purchaseUrl'] ?>">
                <li><?php echo $book['name']?> (<?php echo $book['releaseYear'] ?>)</li>
            </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <p><?= filterByAuthor( $books ); ?></p>
</body>
</html>