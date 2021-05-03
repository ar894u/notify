<?php


namespace Anisa\Notification\Http\Middleware;


class MyMiddleware
{


    public function handle($request, \Closure $next,$var=null)
    {
        if ($var=="bb")
        {
            echo "<br>My middleware";
        }
        else
        {
            return $next($request);
        }

    }
}
