<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="container">

        <p class="h4">Create Post</p>

        <form method="POST" action="/posts">
            <div class=" mb-3">
                <label for="title" class="form-label">Title</label>
                <textarea class="form-control" id="title" name="title" rows="5"><?= $_POST['title'] ?? '' ?></textarea>
            </div>
            <?php if (isset($errors['title'])) : ?>
                <p class="text-danger fs-6 mt-2"><?= $errors['title'] ?></p>
            <?php endif; ?>

            <div class="">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>