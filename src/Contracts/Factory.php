<?php

namespace Ravindra\LaravelPaytmWallet\Contracts;

interface Factory
{
    /**
     * Get Paytm Wallet Provider
     *
     * @param  string  $driver
     * @return \Ravindra\LaravelPaytmWallet\Contracts\Provider
     */
    
    public function driver($do = null);
}