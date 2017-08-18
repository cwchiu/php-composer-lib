<?php
    
require 'vendor/autoload.php';

use cwchiu\Lib\Hello;

$a = new Hello('Arick');
echo $a->hello();