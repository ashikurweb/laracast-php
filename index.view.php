<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laracast Tutotial || Code With By Ashikur Rahman</title>
</head>

<body>
    <h1>Recommended Books</h1>
    <ul>
       <?php foreach ( $filteredBooks as $book ) : ?>
        <a href="<?php echo $book['purchaseUrl'] ?>">
            <li><?php echo $book['name'] ?> - <?php echo $book['author'] ?>(<?php echo $book['releaseYear'] ?>) </li>
        </a>
      <?php endforeach; ?>
    </ul>

</body>
</html>