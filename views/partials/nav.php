<header class="p-3 mb-3 border-bottom">
    
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <?php //dd($_SERVER['REQUEST_URI'])?>
          <li><a href="/" class="<?= urlIs('/') ? 'bg-dark text-white' : 'text-gray-300' ?> nav-link px-2 link-secondary active" aria-current="page" >Home</a></li>
          <li><a href="/about" class="<?= urlIs('/about') ? 'bg-dark text-white' : 'text-gray-300' ?> nav-link px-2 link-body-emphasis">About</a></li>
          
          <?php if ($_SESSION['user'] ?? false) : ?>
            <li><a href="/posts" class="<?= urlIs('/posts') ? 'bg-dark text-white' : 'text-gray-300' ?> nav-link px-2 link-body-emphasis">Posts</a></li>
          <?php endif ?>

          <li><a href="/contact" class="<?= urlIs('/contact') ? 'bg-dark text-white' : 'text-gray-300' ?> nav-link px-2 link-body-emphasis">Contact</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis">Products</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis">Testing</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <?php if ($_SESSION['user'] ?? false) : ?>
          <div class="dropdown text-end">
            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="#">New project...</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>

          <div class="ml-3">
            <form method="POST" action="/session">
                <input type="hidden" name="_method" value="DELETE"/>

                <button class="nav-link px-2 link-body-emphasis">Log Out</button>
            </form>
          </div>

        <?php else : ?>
          <a href="/register" class="nav-link px-2 link-body-emphasis">Register</a>
          <a href="/login" class="<?= urlIs('/login') ? 'bg-gray-900 ' : 'text-gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">
            Log In
          </a>
        <?php endif; ?>
          
      </div>
    
  </header>