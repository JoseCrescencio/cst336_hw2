<?php
    include 'inc/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <Title><?php generateTitle() ?></Title>
    </head>
    <body>

        <header>
            <h1><?php generateTitle() ?></h1>
        </header>
        <main>
            <?php
                genMain()
            ?>
         <footer>
                <h3>Sources</h3>
                <?php genFoot() ?>
        </footer>
        </main>
    </body>
</html>