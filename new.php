<?php session_start();
    
    // Check if form submitted    
    if(isset($_POST['Submit'])){
        
        // Define username and associated password array
        $logins = array('Karl' => '123456');
        
        // Check and assign submitted Username and Password to new variable
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        
        // Check Username and Password existence in defined array        
        if (isset($logins[$username]) && $logins[$username] == $password){
            
            // Success: Set session variables and redirect to Protected page
            $_SESSION['userData']['username'] = $logins[$username];
            
            // build page array
            $pages = array();
            
            $directory = fopen("includes/pagelist.txt", "r") or die("Unable to open file!");
            while(!feof($directory)) {
              $pages[] = explode(", ", fgets($directory));
            }
            fclose($directory);
            
            // Use form data to create new page and add details to pagelist file
            
            // get page info from form
            $newPageNum = $pages[sizeof($pages) - 1][0] + 1;
            $newPageTitle = str_replace(',', '&#44;', $_POST["post-title"]);
            $newPageFileName = strtolower(preg_replace("/[^A-Za-z0-9_]/", '', str_replace(' ', '_',$newPageTitle))) . '.php';
            $newPageContent = $_POST["post-content"];
            
            // set default timezone and use current date and time for page timestamp
            date_default_timezone_set('America/New_York');
            $newPageDateTime = date('Y-m-d H:i', time());
            
            // Boilerplate content for page head and footer
            $beforeContent = '<?php $page = ' . $newPageNum . '; ?><?php include(\'includes/head.php\'); ?><!-- Start page content -->';
            $afterContent = '<!-- End page content --><?php include(\'includes/footer.php\'); ?>';
            
            // create new file
            $newPageFile = fopen($newPageFileName, 'w');
            
            // write content to file
            fwrite($newPageFile, $beforeContent);
            fwrite($newPageFile, $newPageContent);
            fwrite($newPageFile, $afterContent);
            
            // close file
            fclose($newPageFile);
            
            // open pagelist in append mode
            $pageListAppend = fopen('includes/pagelist.txt', 'a');
            
            // add new array of pageinfo for new file
            fwrite($pageListAppend, "\n\r" . $newPageNum . ', ' . $newPageTitle . ', ' . $newPageFileName . ', ' . $newPageDateTime);
            
            // close pagelist
            fclose($pageListAppend);

            // redirect to new page
            header('location: http://our.vu/simple/' . $newPageFileName);
            exit;
            
        } else {
            $msg="<h5>Incorrect username and/or password!</h5>";
        }
    }
?>
<?php $page = -1; ?>
<?php include('includes/head.php'); ?>

<!-- Begin page content -->
<p><strong>Fill out and submit the form below to create a new page.</strong></p>
<!-- End page content -->

<!-- Begin new post form -->
<form method="post">
    <?php if(isset($msg)) {
        echo $msg;
    } ?>
    <p>Username: <input type="text" name="username"></p>
    <p>Password: <input type="password" name="password"></p>
    <p>Page title: <input type="text" name="post-title" value="<?php echo $_POST["post-title"] ?>"></p>
    <p>Page content: <textarea rows="20" name="post-content"><?php echo $_POST["post-content"] ?></textarea></p>
    <p><button type="submit" name="Submit" value="Create post">Create post</button></p>
</form>
<!-- End new post form -->

<?php include('includes/footer.php'); ?>