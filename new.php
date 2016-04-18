<?php $page = -1; ?>
<?php include('includes/head.php'); ?>

<!-- Begin page content -->
<p><strong>Fill out and submit the form below to create a new page.</strong></p>
<!-- End page content -->

<!-- Begin new post form -->
<form method="post" action="includes/newpage.php">
    <p>Page title: <input type="text" name="post-title"></p>
    <p>Page content: <textarea rows="20" width="70%" name="post-content"></textarea></p>
    <p><button type="submit" name="Submit" value="Create post">Create post</button></p>
</form>
<!-- End new post form -->

<?php include('includes/footer.php'); ?>