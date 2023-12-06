<?php
namespace App\Http\Middleware;
use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->exists('role_name')) {
            if (!$request->session()->exists('username')) {
                $role = Role::with('table_rules', 'element_rules')->where('id', 2)->first();
                Session::put('role_name', $role->role_name);
                Session::put('table_rules', $role->table_rules->toArray());
                Session::put('element_rules', $role->element_rules->toArray());
            }
        }
            $uri = $request->route()->uri();
        if ($request->session()->exists('username')) {
            if ($uri == 'login' || $uri == 'register') {
                return redirect('/'); // Redirect to home page or dashboard
            }
        }
        if (!$request->session()->exists('username') && $uri == 'logout') {
            return redirect('/');
        }

        return $next($request);
    }

}
