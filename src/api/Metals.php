<?php

namespace OneAPI\Laravel\API;

use OneAPI\Laravel\OneAPI;

class Metals
{
    // Coins
    static function coins()
    {
        $key = config('OneAPI.metals');
        return OneAPI::getOneAPI($key, 'coins');
    }

    static function emami()
    {
        $key = config('OneAPI.metals');
        return OneAPI::getOneAPI($key, 'coins', 'emami');
    }

    static function azadi()
    {
        $key = config('OneAPI.metals');
        return OneAPI::getOneAPI($key, 'coins', 'azadi');
    }

    static function nim()
    {
        $key = config('OneAPI.metals');
        return OneAPI::getOneAPI($key, 'coins', 'nim');
    }

    static function rob()
    {
        $key = config('OneAPI.metals');
        return OneAPI::getOneAPI($key, 'coins', 'rob');
    }

    static function gram()
    {
        $key = config('OneAPI.metals');
        return OneAPI::getOneAPI($key, 'coins', 'gram');
    }

    // Metals
    static function metals()
    {
        $key = config('OneAPI.metals');
        return OneAPI::getOneAPI($key, 'metals');
    }
    
    static function gold18()
    {
        $key = config('OneAPI.metals');
        return OneAPI::getOneAPI($key, 'metals', 'gold-18');
    }
    
    static function gold24()
    {
        $key = config('OneAPI.metals');
        return OneAPI::getOneAPI($key, 'metals', 'gold-24');
    }
    
    static function goldOunce()
    {
        $key = config('OneAPI.metals');
        return OneAPI::getOneAPI($key, 'metals', 'gold-ounce');
    }
    
    static function silver()
    {
        $key = config('OneAPI.metals');
        return OneAPI::getOneAPI($key, 'metals', 'silver');
    }
    
    static function platinum()
    {
        $key = config('OneAPI.metals');
        return OneAPI::getOneAPI($key, 'metals', 'platinum');
    }
    
    static function palladium()
    {
        $key = config('OneAPI.metals');
        return OneAPI::getOneAPI($key, 'metals', 'palladium');
    }
}