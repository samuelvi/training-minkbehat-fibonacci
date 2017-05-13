<?php

class Fibonacci
{

    public static function getValueByIndex($index)
    {
        return round(pow((sqrt(5) + 1) / 2, --$index) / sqrt(5));
    }
}