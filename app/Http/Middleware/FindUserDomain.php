<?php

namespace App\Http\Middleware;

use App\Models\Projects\Project;
use Closure;
use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class FindUserDomain extends Middleware
{
    public function handle($request, Closure $next)
    {
        $domain = $request->getHost();

        $project = Project::where('domain', $domain)->firstOrFail();

        $request->merge([
            'domain' => $domain,
            'project' => $project
        ]);

        return $next($request);
    }
}
