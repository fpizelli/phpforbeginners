<?php

$books = [
    [
        'name' => '1984',
        'author' => 'George Orwell',
        'releaseYear' => 1949,
        'purchaseUrl' => 'https://example.com'
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

require "index.view.php";
