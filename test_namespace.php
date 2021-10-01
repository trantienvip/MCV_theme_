<?php

namespace A;
function x1(){
    echo 'A - x1';
}
class Home{
    public function index() {
        return 'A - Home->index()';
    }
}

namespace B;
function x1(){
    echo 'B - x1';
}
class Home{
    public function index() {
        return 'B - Home->index()';
    }
}

namespace C;
// goi function trong namespace khac
\A\x1();
echo '<br>';
\B\x1();

echo '<br>';
// goi Class trong namespace khac

use A\Home;
use B\Home as BHome;
$ctrl = new Home();
$ctrl2 = new BHome();
var_dump($ctrl);
echo '<br>';
var_dump($ctrl2);