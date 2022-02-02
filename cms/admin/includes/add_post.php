<?php
if (isset($_POST['create_post'])){
    $author = $_POST['author'];
    $post_title = $_POST['post_title'];
    $post_category_id = $_POST['post_category_id'];
    $post_tags = $_POST['post_tags'];
    $post_status = $_POST['post_status'];

    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];

    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');
    $comment_count = 5;

    move_uploaded_file($post_image_temp, "../images/$post_image");
}
?>



<form action="" method="post" enctype="multipart/form-data">
    <!-- ADD form -->
    <div class="form-group">
        <label for="author">Add Author</label>
        <input type="text" class="form-control" name="author">
    </div>

    <div class="form-group">
        <label for="post_title">Add Title</label>
        <input type="text" class="form-control" name="post_title">
    </div>

    <div class="form-group">
        <label for="post_category_id">Add Category</label>
        <input type="text" class="form-control" name="post_category_id">
    </div>

    <div class="form-group">
        <label for="post_status">Add status</label>
        <input type="text" class="form-control" name="post_status">
    </div>

    <div class="form-group">
        <label for="post_image">Add Image</label>
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <label for="post_tags">Add tags</label>
        <input type="text" class="form-control" name="post_tags">
    </div>

    <div class="form-group">
        <label for="post_content">Add Content</label>
        <input type="text" class="form-control" name="post_content">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_post" value="Add Post">
    </div>
</form>