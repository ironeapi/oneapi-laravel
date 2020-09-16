<?php

namespace OneAPI\Laravel\API;

use OneAPI\Laravel\OneAPI;

class Crypto
{
    static function all()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto');
    }

    static function btc()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'bitcoin');
    }

    static function eth()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'ethereum');
    }

    static function xrp()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'xrp');
    }

    static function ltc()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'litecoin');
    }

    static function eos()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'eos');
    }

    static function bch()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'bitcoin-cash');
    }

    static function xlm()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'xlm');
    }

    static function ada()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'ada');
    }

    static function trx()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'trx');
    }

    static function bsv()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'bsv');
    }

    static function xmr()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'xmr');
    }

    static function miota()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'miota');
    }

    static function dash()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'dash');
    }

    static function ont()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'ont');
    }

    static function etc()
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, 'crypto', 'ethereum-classic');
    }
}
