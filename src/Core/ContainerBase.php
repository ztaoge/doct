<?php
/**
 * Created by PhpStorm.
 * User: zhangjt
 * Date: 16/10/11
 * Time: 18:59
 */

namespace src\Core;

class ContainerBase implements \ArrayAccess
{
    protected $container = [];

    public function __construct($array = [])
    {
        $this->container = $array;
    }

    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->container[$offset]();
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}

