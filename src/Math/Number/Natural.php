<?php
/**
 * Created by PhpStorm.
 * User: zhangzibin
 * Date: 2017/2/3
 * Time: 9:16
 */

namespace Math\Number;
use Math\Number;

class Natural 
{
    /**
     * @var $Number \Math\Number
     */
    protected $number = null;
    protected $desc = '自然数';

    public function __construct($number)
    {
        $this->number = (new Integer(new Positive($number)))->getNumber();
    }
    
    public function getNumber(){
        return $this->number;
    }

}