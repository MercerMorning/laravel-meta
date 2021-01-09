<?php

namespace MercerMorning\Meta;

use Illuminate\Support\Facades\Facade;

class Super extends Facade
{
    protected static function getFacadeAccessor () {
        return 'meta';
    }
}