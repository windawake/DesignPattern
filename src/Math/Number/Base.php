<?php
/**
 * Created by PhpStorm.
 * User: zhangzibin
 * Date: 2017/2/3
 * Time: 9:16
 */

namespace Math\Number;
use Math\Number;

class Base
{
    /**
     * @var $Number \Math\Number
     */
    protected $number = null;
    protected $desc = '';
    
    public function __construct($number)
    {
        if(get_class($number)!='Math\Number'){
            $this->number = $number->number;
        }else{
            $this->number = $number;
        }
        $this->number->setDesc($this->desc);
    }

    public function getNumber(){
        return $this->number;
    }

}