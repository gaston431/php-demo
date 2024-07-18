<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="container">

        <p class="h4">Create Post</p>

        <form method="POST" action="/post">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $post['id'] ?>">
            <div class=" mb-3">
                <label for="title" class="form-label">Title</label>
                <textarea class="form-control" id="title" name="title" rows="5"><?= $post['title'] ?></textarea>
            </div>
            <?php if (isset($errors['title'])) : ?>
                <p class="text-danger fs-6 mt-2"><?= $errors['title'] ?></p>
            <?php endif; ?>

            <div class="">
                <a href="posts"><button class="btn btn-secondary">Cancel</button></a>
           
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

        <form class="mt-6" method="POST" action="/post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $post['id'] ?>">
            <button class="btn btn-danger btn-sm mt-2">Delete</button>
        </form>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>