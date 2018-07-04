<?php

namespace RogerArruda\LaravelPagarMe\Facades;

use Illuminate\Support\Facades\Facade;

class PagarMeFacade extends Facade{

    protected static function getFacadeAccessor()
    {
        return 'PagarMe';
    }
}
