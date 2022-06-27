<?php
    require_once __DIR__ . '/classes/Book.php';

    $books = [
        new Book('Harry Potter', 'J. K. Rowling', '9788877827029', 10),
        new Book('Eragon', 'Christopher Paolini', '9780375826689', 15)
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Libreria di Alan</h1>
    <ul>
        <?php foreach($books as $book) { ?>
        <li>
            <h3><?php echo $book->title; ?></h3>
            <h4><?php echo $book->author; ?></h4>
            <p>Prezzo: <?php echo $book->price; ?> </p>
            <?php if($book->discount !== 0) { ?>
            <strong>Prezzo Scontato: <?php echo $book->discount; ?></strong>
            <?php } ?>

        </li>
        <?php } ?>
    </ul>
</body>
</html>