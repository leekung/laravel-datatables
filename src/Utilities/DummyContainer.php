<?php

namespace Yajra\DataTables\Utilities;

use Illuminate\Container\Container;

class DummyContainer
{
    protected static $_instance = null;

    public static function instance()
    {
        if (! static::$_instance) {
            static::$_instance = new Container();
        }

        return static::$_instance;
    }

    public static function __callStatic($method, $arguments)
    {
        return static::instance()->{$method}(...$arguments);
    }
}
