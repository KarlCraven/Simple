<?php $page = 0; ?>
<?php include('includes/head.php'); ?>

<!-- Begin page content -->
<p><strong>Click on the links below to visit specific pages.</strong></p>
<!-- End page content -->

<!-- Begin site index -->
<ul>
    <?php
    foreach (array_reverse($pages) as $page) {
        
        if ($page[0] != 0) {
            // output link to page
            echo('<li><a href="' . $page[2] . '">' . $page[1] . '</a> <small><span id="timestamp">(' . trim($page[3]) . ')</span></small></li>');
        }
    }
    ?>
</ul>
<!-- End site index -->

<?php include('includes/footer.php'); ?>