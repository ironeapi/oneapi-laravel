<?php

namespace OneAPI\Laravel\API;

use OneAPI\Laravel\OneAPI;

class Currency
{
    static function all()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency');
    }

    static function usd()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'usd');
    }

    static function eur()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'eur');
    }

    static function gbp()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'gbp');
    }

    static function aed()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'aed');
    }

    static function try()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'try');
    }

    static function chf()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'chf');
    }

    static function cny()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'cny');
    }

    static function jpy()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'jpy');
    }

    static function cad()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'cad');
    }

    static function aud()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'aud');
    }

    static function nzd()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'nzd');
    }

    static function sgd()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'sgd');
    }

    static function inr()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'inr');
    }

    static function pkr()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'pkr');
    }

    static function iqd()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'iqd');
    }

    static function nok()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'nok');
    }

    static function sek()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'sek');
    }

    static function dkk()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'dkk');
    }

    static function sar()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'sar');
    }

    static function qar()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'qar');
    }

    static function omr()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'omr');
    }

    static function kwd()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'kwd');
    }

    static function bhd()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'bhd');
    }

    static function myr()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'myr');
    }

    static function thb()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'thb');
    }

    static function hkd()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'hkd');
    }

    static function rub()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'rub');
    }

    static function azn()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'azn');
    }

    static function amd()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'amd');
    }

    static function gel()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'gel');
    }

    static function afn()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'afn');
    }

    static function syp()
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, 'currency', 'syp');
    }
}
