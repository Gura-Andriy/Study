<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    const USD = 'USD';
    const UA = 'UA';

    public static $offer_currency = [self::USD,self::UA];

    protected $table = 'offers';
    protected $quarded = [];
}
