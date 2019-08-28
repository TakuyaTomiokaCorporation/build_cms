<?php

namespace App\Http\Middleware;

use Closure;
/* Required for IP restriction in maintenance mode */
use Illuminate\Contracts\Foundation\Application;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CheckForMaintenanceMode
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */

    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function handle($request, Closure $next)
    {
        $allow = ['172.22.0.1']; 

        // dd($request->getClientIp());

        if ($this->app->isDownForMaintenance()) 
        {
            // $ip = $request->getClientIp();

            // $allowIp = explode(',', env('MAINTENANCE_IP'));

            // if (!is_array($allowIp) || !in_array($ip, $allowIp)) 
            // {
            //    throw new HttpException(503);
            // }
            if (!in_array($request->getClientIp(), $allow)) 
            {
                throw new HttpException(503);
            }
        }

        // if ($this->app->isDownForMaintenance()) {
        //     $data = json_decode(file_get_contents($this->app->storagePath().'/framework/down'), true);

        //     if (isset($data['allowed']) && IpUtils::checkIp($request->ip(), (array) $data['allowed'])) {
        //         return $next($request);
        //     }

        //     if ($this->inExceptArray($request)) {
        //         return $next($request);
        //     }

        //     throw new MaintenanceModeException($data['time'], $data['retry'], $data['message']);
        // }

        return $next($request);
    }

}
