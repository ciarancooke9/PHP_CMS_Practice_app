<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Author</th>
        <th>Title</th>
        <th>Category</th>
        <th>Status</th>
        <th>Image</th>
        <th>Tags</th>
        <th>Comments</th>
        <th>Date</th>
    </tr>
    </thead>

    <tbody>
    <?php
    global $connection;
    $query = 'SELECT * FROM posts';
    $select_posts = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_posts)) {
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
        $author = $row['author'];
        $category = $row['post_category_id'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_content = $row['post_content'];
        $post_tags = $row['post_tags'];
        $comment_count = $row['comment_count'];
        $post_status = $row['post_status'];

        echo "<tr>";
        echo "<td>$post_id</td>";
        echo "<td>$author</td>";
        echo "<td>$post_title</td>";
        echo "<td>$category</td>";
        echo "<td>$post_status</td>";
        echo "<td><img class='img-responsive' src='../images/$post_image' alt='image' </td>";
        echo "<td>$post_tags</td>";
        echo "<td>$comment_count</td>";
        echo "<td>$post_date</td>";
        echo "<td><a href='post.php?delete={$post_id}'>Delete</a></td>";
        echo "<td><a href='post.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";

    }?>
    </tr>
    </tbody>
</table>

<?php

if (isset($_GET['delete'])){
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM posts WHERE post_id = {$the_post_id} ";
    $delete_query = mysqli_query($connection, $query);
    header("Location: post.php");
}

?>