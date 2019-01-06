<?php
  require "class.Reporter.php";
  /* You can also use an autoloader. */

  Reporter::init();
  /* Initialize the Reporter. */

  0 / 0;
  /* It will throw a 'Division by zero' error. */

  Reporter::catch();
  /* Catch all of the errors. */
?>
