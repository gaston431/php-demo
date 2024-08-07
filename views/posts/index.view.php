<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

    
  <main>
    <div class="container">
        <ul>
          <?php foreach ($posts as $post) : ?>
              <li>
                  <a href="./post?id=<?= $post['id'] ?>" class="text-blue-500 hover:underline">
                      <?= htmlspecialchars($post['title']) ?>
                  </a>
              </li>
          <?php endforeach; ?>
        </ul>  

        <p class="mt-6">
            <a href="./posts/create" class="text-blue-500 hover:underline">Create Post</a>
        </p>
    </div>
  </main>


<?php require base_path('views/partials/footer.php') ?>