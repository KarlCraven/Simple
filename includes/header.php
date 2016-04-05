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