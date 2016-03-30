<?php
    // initialize blank prev and next variables
    $nextFile = '';
    $prevFile = '';
    
    // iterate through the sorted timestamp array
    $thisPage = current($files);
        
    // identify the index of the current page in the array
    while ($thisPageModTime != $thisPage[2]) {
        
        $thisPage = next($files);
    }
        
    // set the previous and next link variables using the values of the adjacent pages
    $prevFile = prev($files);
    $nextFile = next($files);
    $nextFile = next($files);
  
    // if the current page is the first page, omit the prev link
    if ($prevFile[0] != '') {
        echo('< <a href="' . $prevFile[1] . '">' . $prevFile[0] . '</a>');
    }
    
    // if this page is not the first or last
    if ($prevFile[0] != '' && $nextFile[0] != '') {
        echo(' | ');
    }
    
    // if the current page is the last page, omit the next link
    if ($nextFile[0] != '') {
        echo('<a href="' . $nextFile[1] . '">' . $nextFile[0] . '</a> >');
    }
?>