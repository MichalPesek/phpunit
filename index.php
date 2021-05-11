<?php

namespace BasicPHPUnitTest\car;

require "vendor/autoload.php";


$driver = new driver("Michal", "Pešek", "666");

echo $driver->getFullnamewithid();