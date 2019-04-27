# OneAPI Laravel Package
*Package for using REST API from [OneAPI](https://oneapi.ir) for Laravel*

***Install***
-------------
Run this command:

``composer require oneapi/laravel``

And run this command:

``php artisan vendor:publish --provider='OneAPI\Laravel\OneapiServiceProvider'``

***Usage***
-------------
You can set [OneAPI](https://oneapi.ir) api key on `config/OneAPI.php`

Example code (You can change **Metals** to other class)
```php
<?php

use OneAPI\Laravel\API\Metals;

class Example
{
    public function index()
    {
        return Metals::coins();
    }
}

```

***API List***
-------------

**OneAPI\Laravel\API\Metals**

Function | Service
-------- | -------
coins | All Coins
emami | Emami Coin
azadi | Azadi Coin
nim | Nim Coin
gram | Gram Coin
metals | All Metals
gold18 | Gold 18 Carat
gold24 | Gold 24 Carat
goldOunce | Gold Ounce
silver | Silver Ounce
platinum | Platinum Ounce
palladium | Palladium Ounce

**OneAPI\Laravel\API\Currency**

Function | Service
-------- | -------
all | All Currencies
usd | United States Dollar (USD)
eur | Euro (EUR)
gbp | Pound sterling (GBP)
aed | United Arab Emirates Dirham (AED)
try | Turkish lira (TRY)
chf | Swiss Franc (CHF)
cny | Chinese Yuan (CNY)
jpy | Japanese Yen (JPY)
cad | Canadian Dollar (CAD)
aud | Australian Dollar (AUD)
nzd | New Zealand Dollar (NZD)
sgd | Singapore Dollar (SGD)
inr | Indian Rupee (INR)
pkr | Pakistani Rupee (PKR)
iqd | Iraqi Dinar (IQD)
nok | Norwegian Krone (NOK)
dkk | Danish Krone (DKK)
sar | Saudi Riyal (SAR)
qar | Qatari Rial (QAR)
omr | Omani Rial (OMR)
kwd | Kuwaiti Dinar (KWD)
bhd | Bahraini Dinar (BHD)
myr | Malaysian Ringgit (MYR)
thb | Thai Baht (THB)
hkd | Hong Kong Dollar (HKD)
rub | Russian Ruble (RUB)
azn | Azerbaijani Manat (AZN)
amd | Armenian Dram (AMD)
gel | Georgian Lari (GEL)
afn | Afghan Afghani (AFN)
syp | Syrian pound (SYP)

**OneAPI\Laravel\API\Crypto**

Function | Service
-------- | -------
btc | Bitcoin
eth | Ethereum
xrp | XRP
ltc | Lticoin
eos | EOS
bch | Bictoin Cash
xlm | Stellar
ada | Cardano
trx | TRON
bsv | Bitcoin SV
xmr | Monero
miota | IOTA
dash | Dash
ont | Ontology
etc | Ethereum Classic
