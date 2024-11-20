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


    $filteredBooks = array_filter($books, function ( $book ){
        return $book['author'] === 'Naipaul';
    });


    require('index.view.php');

