<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
    
  <main>
    <div class="container">
    <p class="mb-6">
            <a href="./posts" class="text-blue-500 underline">go back...</a>
        </p>

        <p><?= htmlspecialchars($post['title']) ?></p>

        <footer class="mt-6">
            <a href="/post/edit?id=<?= $post['id'] ?>" class="btn btn-secondary btn-sm">Edit</a>
        </footer>
    </div>
  </main>


<?php require base_path('views/partials/footer.php') ?>