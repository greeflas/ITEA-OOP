<?php

trait MacroableTrait
{
    private static $macros = [];

    public static function macro($name, $macro)
    {
        self::$macros[$name] = $macro;
    }

    public function __call($name, $parameters)
    {
        if (!isset(self::$macros[$name])) {
            echo 'Cannot find given macros!';
        }

        $macro = self::$macros[$name];

        if ($macro instanceof \Closure) {
            return \call_user_func_array($macro->bindTo($this, static::class), $parameters);
        }

        \call_user_func_array($macro, $parameters);
    }
}
