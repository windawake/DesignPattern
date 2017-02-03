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
        $count = 0;
        if(in_array('正数',$this->arrDesc)){
            if($this->value > 0) $count++;
        }
        if(in_array('负数',$this->arrDesc)){
            if($this->value < 0) $count++;
        }
        if(in_array('整数',$this->arrDesc)){
            if(is_int($this->value)) $count++;
        }
        if(in_array('分数',$this->arrDesc)){
            if(is_float($this->value < 0)) $count++;
        }

        if(in_array('零',$this->arrDesc)){
            if($this->value ==0) $count++;
        }

        return count($this->arrDesc) == $count ? '正确' : '错误';
    }

    public function getUnBool(){
        $bool = false;
        if(in_array('整数',$this->arrDesc)){
            if(is_int($this->value)) $bool = true;
        }
        if(in_array('零',$this->arrDesc)){
            if($this->value ==0) $bool = true;
        }
        if(in_array('正数',$this->arrDesc)){
            if($this->value > 0) $bool = true;
        }
        if(in_array('负数',$this->arrDesc)){
            if($this->value < 0) $bool = true;
        }
        if(in_array('分数',$this->arrDesc)){
            $bool = is_float($this->value < 0) ? true : false;
        }

        return $bool ? '正确' : '错误';
    }

}