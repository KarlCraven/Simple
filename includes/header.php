<header>
    <h1><a href="index.php">Site Name</a></h1>
    <nav>
    <?php
    // set the previous and next link variables using the values of the adjacent indexes
    if ($page > 0) {
        if ($page > 1) {
            $prevFile = $pages[$page - 1];
            echo('<a href="' . $prevFile[2] . '">&lt; ' . $prevFile[1] . '</a>');
        }
        
        if ($page > 1 && $page < sizeof($pages) - 1) {
            echo('  |  ');
        }
        
        if ($page < sizeof($pages) - 1) {
            $nextFile = $pages[$page + 1];
            echo('<a href="' . $nextFile[2] . '">' . $nextFile[1] . ' &gt;</a>');
        }
    }
    ?>
    </nav>
</header>