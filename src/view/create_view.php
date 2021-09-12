<form action="<?php echo BASEPATH.'?path=src/controller/create.php'; ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
  </div>
  <div class="form-group">
    <label for="description">Post Description</label>
    <textarea class="form-control" id="description" placeholder="description" name="description">
    </textarea>
  </div>
  <div class="form-group">
    <label for="post_img">Post Image</label>
    <input type="file" class="form-control" id="post_img" placeholder="Post Image" name="post_img">
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>