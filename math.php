<?php
/**
 * Created by PhpStorm.
 * User: zhangzibin
 * Date: 2017/2/2
 * Time: 16:34
 */
include __DIR__."/autoload.php";

/*use Math\Integral;
use Math\IntegralExp;

$exp = new IntegralExp();
$integral_1 = new Integral(1,'x',2); //x^2
$integral_2 = new Integral(1,'x',2); //x^2
$exp->bcAdd($integral_1);
$exp->bcAdd($integral_2);

//echo $integral_1->getVal();exit;
var_dump($exp->evaluation());*/

use Math\Number;
use Math\Number\Natural;
use Math\Number\Zero;
use Math\Number\Positive;
use Math\Number\Negative;
use Math\Number\Integer;
use Math\Number\Fraction;

$number = new Number(1);
//echo $number->getVal();
$number = new Natural($number);
//$number = new Zero($number);
//$number = new Positive($number);
//$number = new Negative($number);
//$number = new Integer($number);
//$number = new Fraction($number);

echo $number->getNumber()->getDesc();
echo "\n";
echo $number->getNumber()->getBool();



