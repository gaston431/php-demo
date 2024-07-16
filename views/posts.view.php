<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/banner.php' ?>

    
  <main>
    <div class="container">
        <?php foreach ($posts as $post) : ?>
            <li>
                <a href="./post?id=<?= $post['id'] ?>" class="text-blue-500 hover:underline">
                    <?= $post['title'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </div>
  </main>


<?php require 'partials/footer.php' ?>