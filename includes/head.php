<?php
    $pages = array();
    
    $directory = fopen("pagelist.txt", "r") or die("Unable to open file!");
    while(!feof($directory)) {
      $pages[] = explode(", ", fgets($directory));
    }
    fclose($directory);
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
    
    h1 {
        font-size: 2.4em;
        margin-bottom: 0.5em;
    }
    
    h2 {font-size: 2.15em;}
    
    h3 {font-size: 1.9em;}
    
    h4 {font-size: 1.65em;}
    
    h5 {font-size: 1.4em;}
    
    p {margin: 0 0 0.25em 0;}
    
    h1, nav, footer {
        text-align: center;
    }
    
    img {
        max-width: 98%;
        max-height: 70vh;
        display: block;
        margin: 0 auto;
    }
    
    h1, nav, footer, #timestamp {
        font-style: italic;
    }
</style>