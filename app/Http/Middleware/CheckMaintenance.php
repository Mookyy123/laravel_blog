<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckMaintenance
{
    public function handle(Request $request, Closure $next): Response
    {
        // 🔧 Turn maintenance ON or OFF here
        $maintenanceMode = true; // change to false to disable maintenance

        // Get logged in user
        $user = $request->user();

        // If maintenance mode is ON
        if ($maintenanceMode) {

            // If user is not logged in OR not admin → block
            if (!$user || $user->email !== 'admin@example.com') {
                return response('🚧 Site is under maintenance. Please come back later.', 503);
            }

            // If admin → allow access
        }

        return $next($request);
    }
}
