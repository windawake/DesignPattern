<?php
/**
 * Created by PhpStorm.
 * User: zhangzibin
 * Date: 2017/2/2
 * Time: 16:35
 */

namespace Math;


class IntegralExp
{
    private $collect = array();

    public function bcAdd(Integral $integral)
    {
        
        array_push($this->collect,$integral);
    }

    public function evaluation()
    {
        $eval = array();
        foreach($this->collect as $integral){
            /**
             * @var $integral Integral;
             */
            $eval[$integral->getElement()][] = $integral->getConstant();
        }

        $arrFormula = array();
        foreach($eval as $element=>$arrConstant){
            $arrFormula[] = array_sum($arrConstant).$element;
        }

        $formula = implode('+',$arrFormula);
        return $formula;
    }
}