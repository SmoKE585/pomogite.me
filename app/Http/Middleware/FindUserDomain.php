<?php

namespace App\Http\Middleware;

use App\Models\Projects\Project;
use App\Models\Projects\ProjectDomain;
use Closure;
use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;
use Illuminate\Support\Facades\View;

class FindUserDomain extends Middleware
{
    public function handle($request, Closure $next)
    {
        $domain = $request->getHost();

        $domain = ProjectDomain::where('domain', $domain)->firstOrFail();

        $request->merge([
            'domain' => $domain
        ]);

        View::share('project', $domain->project);

        return $next($request);
    }
}
