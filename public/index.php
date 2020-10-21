<?php

require '../vendor/autoload.php';
require '../vendor/ehime/hello-world/src/HelloWorld/SayHello.php';


$hello = new HelloWorld\SayHello;

echo $hello->world();
    