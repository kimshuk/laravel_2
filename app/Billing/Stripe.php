<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 10/15/18
 * Time: 2:09 PM
 */

namespace App\Billing;


class Stripe
{
    protected $key;

    public function __construct($key)
    {
        $this->key = $key;
    }
}