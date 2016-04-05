<?php $page = 5; ?>

<html>
    <head>
        <?php include('includes/head.php'); ?>
        <title><?php echo $pages[$page][1]; ?></title>
    </head>
    <body>
        <?php include('includes/header.php'); ?>
        
        <h2><?php echo $pages[$page][1]; ?></h2>
        <p id="timestamp"><?php echo $pages[$page][3]; ?></p>
        
        <!-- Start page content -->
        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong> Nam sit amet metus a enim mattis euismod. <a href="#">Vestibulum</a> a augue sagittis, gravida neque ac, tincidunt metus. Quisque posuere maximus nunc in aliquam. Mauris aliquet sed est a tincidunt. Phasellus pretium eros sed ex porttitor feugiat. Donec magna erat, tristique at leo eget, cursus placerat ipsum.</p>
        <img src="example.jpg" />

        <ul>
            <li>Quisque ac lorem ornare, faucibus tortor sit amet, posuere massa.</li>
            <li>Quisque ac diam sodales nisi rutrum lacinia.</li>
            <li>Phasellus eget arcu consectetur, varius mauris a, condimentum felis.</li>
            <li>Sed tempus arcu at eros pellentesque, sed pretium ligula varius.</li>
        </ul>
        
        <h3>Subheading</h3>
        <p><em>Fusce gravida consequat consequat. Aliquam sit amet justo nulla. Nullam pharetra quam purus, ac pretium ante ultrices id. Nam ac lorem ut justo efficitur tempus in ut dui. Vestibulum blandit, purus in posuere tincidunt, eros lacus consequat metus, tempus mattis arcu mauris ut sapien. Duis pellentesque, velit sit amet ornare porta, sapien odio pellentesque sapien, vel varius ipsum diam a nulla.</em></p>
        
        <h4>Subsubheading</h4>
        <p>Mauris id ligula urna. Curabitur a purus vitae risus accumsan scelerisque et quis lacus. Sed risus dolor, commodo at dui id, vulputate tincidunt turpis.</p>
        
        <h5>Subsubsubheading</h5>
        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sit amet tristique velit. Sed lobortis auctor ex, vitae fermentum est molestie nec.</p>
        <ol>
            <li>Quisque ac lorem ornare, faucibus tortor sit amet, posuere massa.</li>
            <li>Quisque ac diam sodales nisi rutrum lacinia.</li>
            <li>Phasellus eget arcu consectetur, varius mauris a, condimentum felis.</li>
            <li>Sed tempus arcu at eros pellentesque, sed pretium ligula varius.</li>
        </ol>
        
        <!-- End page content -->
        <?php include('includes/footer.php'); ?>
    </body>
</html>