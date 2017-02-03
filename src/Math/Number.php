<?php
/**
 * Created by PhpStorm.
 * User: zhangzibin
 * Date: 2017/2/2
 * Time: 16:35
 */

namespace Math;


class Number
{
    private $value = 0;
    private $arrDesc = array();
    public function __construct($num)
    {
        $this->value = $num;
    }

    public function getVal(){
        return $this->value;
    }

    public function setDesc($text){
        $this->arrDesc[] = $text;
    }

    public function getDesc(){
        return implode('+',$this->arrDesc);
    }

    public function getBool(){
        $bool = false;
        if(in_array('整数',$this->arrDesc)){
            $bool = is_int($this->value) ? true : false;
        }
        if(in_array('自然数',$this->arrDesc)){
            $bool = (is_int($this->value)||$this->value ==0) ? true : false;
        }
        if(in_array('正数',$this->arrDesc)){
            $bool = ($this->value > 0) ? true : false;
        }
        if(in_array('负数',$this->arrDesc)){
            $bool = ($this->value < 0) ? true : false;
        }
        if(in_array('分数',$this->arrDesc)){
            $bool = is_float($this->value < 0) ? true : false;
        }

        return $bool ? '正确' : '错误';
    }

}