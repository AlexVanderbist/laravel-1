<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array
     */
    protected $proxies = [
        '127.0.0.1',
    ];

    /**
     * The headers that should be used to detect proxies.
     *
     * @var array
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
