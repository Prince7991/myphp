<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo BASEPATH.'?path=src/view/create_view.php'; ?>">Create Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEPATH.'?path=src/view/update_view.php'; ?>">Update post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEPATH.'?path=src/view/delete_view.php'; ?>">Delete post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEPATH.'?path=src/view/view_view.php'; ?>">View post</a>
      </li>
    </ul>
  </div>
</nav>