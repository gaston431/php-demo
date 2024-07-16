<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/banner.php' ?>

<main>
<div class="container">

    <p> Home page </p>

    <?= $message ?>  
    <ul>
        <?php foreach ($booksFiltered as $key => $book) : ?>
            <?php //if ($book['releaseYear'] === 1968) : ?> 
            <li>
                <?= $book['name'] ?> (<?= $book['releaseYear'] ?>)
            </li>
            <?php //endif ?> 
        <?php endforeach ?>   
    </ul>
    </div>
</main>

<?php require 'partials/footer.php' ?>