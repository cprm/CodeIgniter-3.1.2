<?php

class Loader
{
    use admin2;

    public static function lib($class)
    {
        return new $class();
    }
}
