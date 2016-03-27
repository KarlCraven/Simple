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
            // sort the primary array (i.e. by modified time)            
            ksort($files);
            
            // iterate through the sorted timestamp array
            foreach ($files as $modTime) {
                
                // iterate through each page for each timestamp
                foreach ($modTime as $pageInfo) {
                
                    // output link to page
                    echo('<li><a href="' . $pageInfo[1] . '">' . $pageInfo[0] . '</a> <small>(' . date("m.d.Y", $pageInfo[2]) . ')</small></li>');
                }
            }
        ?>
        
        <?php include('includes/footer.php'); ?>
    </body>
</html>