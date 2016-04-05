<?php    
    // set the previous and next link variables using the values of the adjacent indexes
    if ($page > 0) {
        $prevFile = $pages[$page - 1];
        echo('<a href="' . $prevFile[2] . '">&lt; ' . $prevFile[1] . '</a>');
    }
    
    if ($page > 0 && $page < sizeof($pages) - 1) {
        echo('  |  ');
    }
    
    if ($page < sizeof($pages) - 1) {
        $nextFile = $pages[$page + 1];
        echo('<a href="' . $nextFile[2] . '">' . $nextFile[1] . ' &gt;</a>');
    }
?>