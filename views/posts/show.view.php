<?php require 'views/partials/header.php' ?>
<?php require 'views/partials/nav.php' ?>
<?php require 'views/partials/banner.php' ?>

    
  <main>
    <div class="container">
    <p class="mb-6">
            <a href="./posts" class="text-blue-500 underline">go back...</a>
        </p>

        <p><?= htmlspecialchars($post['title']) ?></p>
    </div>
  </main>


<?php require 'views/partials/footer.php' ?>