<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/5/8
 * Time: 9:19
 */

namespace ESD\Co\Server\Beans;


class ResponseProxy
{
    public function __get($name)
    {
        return getDeepContextValueByClassName(Response::class)->$name;
    }

    public function __set($name, $value)
    {
        getDeepContextValueByClassName(Response::class)->$name = $value;
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([getDeepContextValueByClassName(Response::class), $name], $arguments);
    }
}