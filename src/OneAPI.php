<?php

namespace OneAPI\Laravel;

class OneAPI
{
    private function getOneAPI($key, $service, $type)
    {
        $url = "https://oneapi.ir/api/$service/$type";
        $st = curl_init($url);
        curl_setopt($st, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($st, CURLOPT_HEADER, true);
        curl_setopt($st, CURLOPT_NOBODY, true);
        $strun = curl_exec($st);
        $status = substr($strun, 9, 3);
        if ($status == 200) {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array("OneAPI-Key: $key"));
            $response = curl_exec($ch);
            $json = json_decode($response);
            for ($i=0;$i<count($json);$i++) {
                $code = $json[$i];
                if ($code->status) {
                    return $code->message;
                } else {
                    return $code;
                }
            }
        } else {
            return "مقدارهای وارد شده اشتباه است.";
        }
    }

    static function getMetals($type)
    {
        $key = config('OneAPI.metals');
        return OneAPI::getOneAPI($key, "metals", $type);
    }

    static function getCurrency($type)
    {
        $key = config('OneAPI.currency');
        return OneAPI::getOneAPI($key, "currency", $type);
    }

    static function getCrypto($type)
    {
        $key = config('OneAPI.crypto');
        return OneAPI::getOneAPI($key, "crypto", $type);
    }
}