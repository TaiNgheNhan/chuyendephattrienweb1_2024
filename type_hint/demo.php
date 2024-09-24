<?php
//Nguyen Cao Thanh Tai
declare(strict_types=1);

require_once('I.php');
require_once('A.php');
require_once('B.php');
require_once('C.php');

class Demo
{
    //return I
    public function typeIReturnI()
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeIReturnA()
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeIReturnB()
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeIReturnC()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeIReturnNull()
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    //return A
    public function typeAReturnI()
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeAReturnA()
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeAReturnB()
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeAReturnC()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeAReturnNull()
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    //return B
    public function typeBReturnI()
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeBReturnA()
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeBReturnB()
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeBReturnC()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeBReturnNull()
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    //return C
    public function typeCReturnI()
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeCReturnA()
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeCReturnB()
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeCReturnC()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeCReturnNull()
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    //return Null
    public function typeNullReturnI()
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeNullReturnA()
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeNullReturnB()
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeNullReturnC()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeNullReturnNull()
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
}

$demo = new Demo();
//return I
$demo->typeIReturnI();
// $demo->typeIReturnA();
// $demo->typeIReturnB();
// $demo->typeIReturnC();
// $demo->typeIReturnNull();
//return A
// $demo->typeAReturnI();
// $demo->typeAReturnA();
// $demo->typeAReturnB();
// $demo->typeAReturnC();
// $demo->typeAReturnNull();
//return B
// $demo->typeBReturnA();
// $demo->typeBReturnB();
// $demo->typeBReturnC();
// $demo->typeBReturnI();
// $demo->typeBReturnNull();
//return C
// $demo->typeCReturnI();
// $demo->typeCReturnA();
// $demo->typeCReturnB();
// $demo->typeCReturnC();
// $demo->typeCReturnNull();
//return Null
// $demo->typeNullReturnNull();
// $demo->typeNullReturnI();
// $demo->typeNullReturnA();
// $demo->typeNullReturnB();
// $demo->typeNullReturnC();

