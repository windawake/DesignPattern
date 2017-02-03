<?php
/**
 * Created by PhpStorm.
 * User: zhangzibin
 * Date: 2017/2/2
 * Time: 16:35
 */

namespace Math;


class Integral
{
    private $constant = 1;
    private $base = 0;
    private $exp = 1;
    private $element = '';

    public function __construct($constant, $base, $exp)
    {
        $this->constant = $constant;
        $this->base = $base;
        $this->exp = $exp;
        $this->element = $base.$exp;
    }

    public function getConstant()
    {
        return $this->constant;
    }

    public function getElement()
    {
        return $this->base."^".$this->exp;
    }

    public function getVal()
    {
        if($this->constant == 0)
        {
            return 0;
        }
        elseif($this->constant == 1)
        {
            return $this->base."^".$this->exp;
        }
        elseif($this->constant == -1)
        {
            return "-".$this->base."^".$this->exp;
        }
        else
        {
            return $this->constant."*".$this->base."^".$this->exp;
        }
    }
}