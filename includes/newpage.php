<?php
    
    // build page array
    $pages = array();
            
    $directory = fopen("pagelist.txt", "r") or die("Unable to open file!");
    while(!feof($directory)) {
      $pages[] = explode(", ", fgets($directory));
    }
    fclose($directory);
            
    // Use form data to create new page and add details to pagelist file
        
    // get page info from form
    $newPageNum = $pages[sizeof($pages) - 1][0] + 1;
    $newPageTitle = str_replace(',', '', $_POST["post-title"]);
    $newPageFileName = urlencode(strtolower(str_replace(' ', '_', $newPageTitle))) . '.php';
    $newPageContent = $_POST["post-content"];
    
    // set default timezone and use current date and time for page timestamp
    date_default_timezone_set('America/New_York');
    $newPageDateTime = date('Y-m-d H:i', time());
    
    // Boilerplate content for page head and footer
    $beforeContent = '<?php $page = ' . $newPageNum . '; ?><?php include(\'includes/head.php\'); ?><!-- Start page content -->';
    $afterContent = '<!-- End page content --><?php include(\'includes/footer.php\'); ?>';
    
    // create new file
    $newPageFile = fopen('../' . $newPageFileName, 'w');
    
    // write content to file
    fwrite($newPageFile, $beforeContent);
    fwrite($newPageFile, $newPageContent);
    fwrite($newPageFile, $afterContent);
    
    // close file
    fclose($newPageFile);
    
    // open pagelist in append mode
    $pageListAppend = fopen('pagelist.txt', 'a');
    
    // add new array of pageinfo for new file
    fwrite($pageListAppend, "\n" . $newPageNum . ', ' . $newPageTitle . ', ' . $newPageFileName . ', ' . $newPageDateTime);
    
    // close pagelist
    fclose($pageListAppend);

    // redirect to new page
    header('location: http://our.vu/simple/' . $newPageFileName);
?>