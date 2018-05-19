<?php
require ("test.php");
require ("test2.php");
use my\test;
$test=new test(50);
$test->getTest();
$test2=new \my\test2();
$test2->testf();
use my\test as u;
$test3=new u(100);
?>