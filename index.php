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
        foreach ($files as $file) {
            
            // output link to page
            echo('<li><a href="' . $file[1] . '">' . $file[0] . '</a> <small>(' . date("m.d.Y", $file[2]) . ')</small></li>');
        }
        ?>
        
        <?php include('includes/footer.php'); ?>
    </body>
</html>