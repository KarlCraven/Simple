<?php
    $files = array();
    $dir = new DirectoryIterator('.');

    // iterate through directory
    foreach ($dir as $fileInfo) {
        
        // if the directory item is a file
        if ($fileInfo->isFile()) {
            
            // get the extension of the file
            $extension = strtolower(pathinfo($fileInfo->getFilename(), PATHINFO_EXTENSION));
            
            // check if the extension is php
            if ($extension == 'php') {
                
                // get filename, replacing undescores with spaces
                $fileName = str_replace('_', ' ', pathinfo($fileInfo->getFilename(), PATHINFO_FILENAME));
                
                // if the file isn't the index page
                if ($fileName != 'index') {
                    
                    // store display name, file name and filetime in child array
                    $files[] = array($fileName, $fileInfo->getFilename(), $fileInfo->getMTime());
                }
            }
        }
    }
    
    // function to sort page array by time
    function sortByTime($a, $b) {
      return $a[2] - $b[2];
    }
    
    // sort the array by modified time) 
    usort($files, "sortByTime");
?>

<?php
    $thisPageModTime = getlastmod();
?>
        
<?php
   $bg = "#252525";
   $fgregular = "#B5B5B5";
   $fgbright = "#CCC";
   $accent = "#C00000";
   $hover = "#DF0000";
?>

<style>
    body {
        background: <?php echo $bg; ?>;
        color: <?php echo $fgregular; ?>;
        font-size: 1.5em;
        line-height: 1.33em;
    }
    
    a {
        color: <?php echo $fgbright; ?>;
        text-decoration: none;
        background: <?php echo $accent; ?>;
        padding: 0 0.2em;
        border-radius: 0.2em;
    }
    
    a:hover {background: <?php echo $hover; ?>;}
    
    h1, h2, h3, h4, h5 {
        color: <?php echo $hover; ?>;
        font-variant: small-caps;
        margin: 0.6em 0 0.2em 0;
    }
    
    h1 {font-size: 2.4em;}
    
    h2 {font-size: 2.15em;}
    
    h3 {font-size: 1.9em;}
    
    h4 {font-size: 1.65em;}
    
    h5 {font-size: 1.4em;}
    
    p {margin: 0 0 0.25em 0;}
    
    h1, footer {
        text-align: center;
        font-style: italic;
    }
    
    img {
        max-width: 98%;
        max-height: 70vh;
        display: block;
        margin: 0 auto;
    }
</style>