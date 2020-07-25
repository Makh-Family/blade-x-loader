<?php

namespace Makhweb\BladeXLoader\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as BaseResponse;

class SetPjaxHeaders
{
    public function handle(Request $request, Closure $next): BaseResponse
    {
        $response = $next($request);

        if ($request->pjax()) {
            $response->header('X-PJAX', true);
        }

        return $response;
    }
}
