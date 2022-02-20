<?php

namespace App\Domain\Core\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class LogRequest
{
    /**
     * The list of headers required to authorize the request for the
     * device.
     *
     * @var array|string[]
     */
    protected array $requiredRequestHeaders = [
        "X-Device-Name",
        "X-Device-OS",
        "X-Device-Type",
        "X-Device-Version",
    ];

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     * @throws AuthorizationException
     */
    public function handle(Request $request, Closure $next)
    {
        // Pass the requests from the browsers with no logging because
        // browsers by default don't not provide these headers in the
        // request.
        if (!$request->isJson()) return $next($request);

        collect($this->requiredRequestHeaders)->each(function ($header) use ($request) {
            if (!$request->hasHeader($header)) {
                throw new AuthorizationException("The [$header] header must be present in the request.");
            }
        });

        // TODO: Log the information and ip for the request.

        return $next($request);
    }
}
