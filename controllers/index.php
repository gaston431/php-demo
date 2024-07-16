
<?php 

    $hello = 'Hello';
    $read = true;
    //echo "$hello some";

    if ($read) {
        $message = "yes $hello";
    } else {
        $message = "no $hello";
    }

    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'releaseYear' => 1968,
        ],
        [
            'name' => 'Project Hail Mary',
            'releaseYear' => 2021,
        ]
    ];

    /*function booksFiltered($books){
       
        $booksFiltered = array_filter($books, function($book) {
            return $book['releaseYear'] === 1968;
        });
        var_dump($booksFiltered);       
        return $booksFiltered;
    }*/

    //$booksFiltered = booksFiltered($books); 

    $booksFiltered = array_filter($books, function($book) {
        return $book['releaseYear'] === 1968 && $book['name'] === 'Do Androids Dream of Electric Sheep';
    });

    require 'views/index.view.php'
?> 

