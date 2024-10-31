<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books = [
            [
                'name' => '1984',
                'author' => 'George Orwell',
                'releaseYear' => 1949,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Hobbit',
                'author' => 'J. R. R. Tolkien',
                'releaseYear' => 1937,
                'purchaseUrl' => 'https://example.com'
            ],
            [
                'name' => 'A Game of Thrones',
                'author' => 'George R. R. Martin',
                'releaseYear' => 1996,
                'purchaseUrl' => 'https://example.com'
            ],
            [
                'name' => 'A Clash of Kings',
                'author' => 'George R. R. Martin',
                'releaseYear' => 1998,
                'purchaseUrl' => 'https://example.com'
            ]
        ];

        $filteredBooks = array_filter($books, function ($book) {
            return $book['author'] === 'George R. R. Martin';
        });
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>