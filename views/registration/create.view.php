<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main>
    <div class="container">
        <form action="/register" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input id="email" name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input id="password" name="password" type="password" class="form-control" placeholder="Password">
        </div>
        <!-- <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" class="btn btn-primary mt-2">Register</button>
        <ul>
            <?php if (isset($errors['email'])) : ?>
                <li class="text-danger fs-6 mt-2"><?= $errors['email'] ?></li>
            <?php endif; ?>

            <?php if (isset($errors['password'])) : ?>
                <li class="text-danger fs-6 mt-2"><?= $errors['password'] ?></li>
            <?php endif; ?>
        </ul>
        </form>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>