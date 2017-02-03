<?php
/**
 * Created by PhpStorm.
 * User: zhangzibin
 * Date: 2017/2/2
 * Time: 16:38
 */

function my_autoload($className)
{
    $file = __DIR__."\\src\\".$className.".php";
    include($file);
}
spl_autoload_register("my_autoload");