<?php
//Nguyen Cao Thanh Tai
declare(strict_types=1);

require_once('C.php');
class B extends C
{
    function b1()
    {
        echo "This is function b1 from class B";
    }
}
// $a = new B();
// $a->b1();