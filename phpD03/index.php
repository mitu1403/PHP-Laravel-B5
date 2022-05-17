<?php

require_once 'vendor/autoload.php';
use App\classes\HelloWorld;

$helloWorld = new HelloWorld(); // class er nam er age "new" keyword dile class er akta object toiri hoy
$helloWorld->index();          //  "->" php er object sign
                              //   "$helloWorld->" ei total ta akta object..