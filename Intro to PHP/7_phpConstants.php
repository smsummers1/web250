    
<!doctype html> 
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Constants</title>
    </head>
    
    <body>
      <?php #phpConstants.php
      // Set today's date as a constant:
      define('TODAY', 'April 23, 2022');
      // Print a message, using predefined constants and the TODAY constant:
      echo '<p>Today is ' . TODAY . '.<br>This server is running version <strong>' . PHP_VERSION . '</strong> of PHP on the <strong>' . PHP_OS . '</strong> operating system.</p>';
      ?>
      <br><br>
        <aside>
            <h3>Online Resources</h3>
            <a href="https://www.php.net/manual/en/reserved.constants.php">Predefined Constants - PHP Manual</a>
        </aside>
    </body>
    
</html>
