<?php
ini_set('display_errors',1);
error_reporting(E_ALL | E_STRICT);

include './xsalt/tools/php/Xsalt.php';

Xsalt::build("./index.xhtml", "./index.html");
