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
        
    // set the previous and next link variables using the values of the adjacent indexes
    $prevFile = prev($files);
    $nextFile = next($files);
    $nextFile = next($files);
  
    // if the current page is the first page, leave the previous variable blank
    
    // if the current page is the last page, leave the next variable blank
    
    echo('< <a href="' . $prevFile[1] . '">' . $prevFile[0] . '</a>  |  <a href="' . $nextFile[1] . '">' . $nextFile[0] . '</a> >');
?>