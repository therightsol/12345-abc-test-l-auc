<?php

namespace App\Helpers;

/**
 * Class Currency
 *
 * @package \App\Helpers
 */
class CurrencyHelper
{

    public $store = false;

    private static $defaultCurrency = false;

    public static function base()
    {
        return \Cache::remember('baseCurrency', 60 ,function (){
            return \App\Currency::baseCurrency();
        });
    }
    public static function defaultCurrency()
    {

        if(!self::$defaultCurrency){

            self::$defaultCurrency =  \Cache::remember('defaultCurrency', 60 ,function (){
                return \App\Currency::defaultCurrency();
            });
        }


        return self::$defaultCurrency;


    }

    public static function getExchangeRate()
    {
        $exchangeRate = self::defaultCurrency()->exchange_rate;
        return ($exchangeRate)?:1;
    }

}