<?php $page = 0; ?>

<html>
    <head>
        <?php include('includes/head.php'); ?>
        <title>Simple - Index</title>
    </head>
    <body>
        <?php include('includes/header.php'); ?>
        
        <h2>Index</h2>
        <p><strong>Click on the links below to visit specific pages.</strong></p>
        <ul>
        
        <?php
        
        // iterate through the sorted page array
        foreach (array_reverse($pages) as $page) {
            
            if ($page[0] != 0) {
                // output link to page
                echo('<li><a href="' . $page[2] . '">' . $page[1] . '</a> <small><span id="timestamp">(' . $page[3] . ')</span></small></li>');
            }
        }
        ?>
        
        <?php include('includes/footer.php'); ?>
    </body>
</html>