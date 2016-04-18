<html>
    <head>
        <?php
            $pages = array();
            
            $directory = fopen("includes/pagelist.txt", "r") or die("Unable to open file!");
            while(!feof($directory)) {
              $pages[] = explode(", ", fgets($directory));
            }
            fclose($directory);
        ?>
        
        <title><?php echo $pages[$page][1]; ?></title>

                
        <?php
           $bg = "#252525";
           $fgregular = "#B5B5B5";
           $fgbright = "#CCC";
           $accent = "#C00000";
           $hover = "#DF0000";
           $dead = "#757575";
        ?>

        <style>
            body {
                background: <?php echo $bg; ?>;
                color: <?php echo $fgregular; ?>;
                font-size: 1.5em;
                line-height: 1.33em;
            }
            
            a, .deadlink {
                color: <?php echo $fgbright; ?>;
                text-decoration: none;
                padding: 0 0.2em;
                border-radius: 0.2em;
            }
            
            a {background: <?php echo $accent; ?>;}
            
            .deadlink {
                background: <?php echo $dead; ?>;
                cursor: not-allowed;
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
            
            h1, nav, footer {text-align: center;}
            
            nav {
                min-width: 425px;
            }
            
            img {
                max-width: 98%;
                max-height: 70vh;
                display: block;
                margin: 0 auto;
            }
            
            h1, nav, footer, #timestamp {font-style: italic;}
            
            #nav-left, #nav-center, #nav-right {display: inline;}
            
            #nav-left, #nav-right {
                width: 49%;
                min-width: 210px;
            }

            #nav-left {text-align: right;}
            #nav-right {text-align: left;}
        </style>
    </head>
    <body>
        <header>
            <h1><a href="index.php">Site Name</a></h1>
            <nav>
                <div id="nav-left">
                    <?php
                    // set the previous and next link variables using the values of the adjacent indexes
                    if ($page > 0) {
                        if ($page > 1) {
                            
                            $firstFile = $pages[1];
                            echo('<a href="' . $firstFile[2] . '" title="' . $firstFile[1] . '">&#171; First</a>&nbsp;');
                            
                            $prevFile = $pages[$page - 1];
                            echo('<a href="' . $prevFile[2] . '" title="' . $prevFile[1] . '">&#8249; Prev</a>');
                        
                        } else {
                            echo('<span class="deadlink">&#171; First</span>&nbsp;<span class="deadlink">&#8249; Prev</span>');
                        }
                    }
                    ?>
                </div>
                <div id="nav-right">
                    <?php
                    if ($page > 0) {
                        if ($page < sizeof($pages) - 1) {
                            $nextFile = $pages[$page + 1];
                            echo('<a href="' . $nextFile[2] . '" title="' . $nextFile[1] . '">Next &#8250;</a>');
                            
                            $lastFile = $pages[sizeof($pages) - 1];
                            echo('&nbsp;<a href="' . $lastFile[2] . '" title="' . $lastFile[1] . '">Last &#187;</a>');
                        
                        } else {
                            echo('<span class="deadlink">Next &#8250;</span>&nbsp;<span class="deadlink">Last &#187;</span>');
                        }
                    }
                    ?>
                </div>
            </nav>
        </header>
        <h2><?php echo $pages[$page][1]; ?></h2>
        <?php if ($page > 0) {
            echo('<p id="timestamp">' . $pages[$page][3] . '</p>');
        }
        ?>