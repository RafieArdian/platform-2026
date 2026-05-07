```php id="jlwm3m"
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = auth()->user();

        if (!$user) {
            abort(403);
        }

        if (!$user->hasAnyRole($roles)) {
            abort(403, 'ANDA TIDAK MEMILIKI AKSES');
        }

        return $next($request);
    }
}
```
