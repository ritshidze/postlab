<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\App;
use App\Models\AccessRole;
use App\Models\AccessPermission;

class AclMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $permission = $this->getPermissions($request);

        if ($this->hasPermission($permission))
        {
            return $next($request);
        }
        return response('Unauthorized.', 401);
    }

    /**
     * Grab the permissions from the request
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Array
     */
    private function getPermissions($request)
    {
        $actions = $request->route()->getAction();
        return $actions['user_can'];
    }

    public static function hasPermission($permission)
    {
        //Get user role
        $role = Auth::user()->role;

        /**
         * Every user must have a role
         * Check that user role exist in AccessRole Model
         */
        $role_exist = AccessRole::find($role);

        if (sizeof($role_exist) > 0)
        {
            // Now that role exist, Get all role's permission
            $key = array();

            $roles_permission = AccessRole::find($role)->permission;

            foreach ($roles_permission as $value)
            {
                $access_permission = AccessPermission::where('id', $value->permission)->first();
                $key[] = $access_permission->key;
            }

            // Check if $permission is in array $key
            $hasPermission = array();

            if (is_array($permission))
            {
                foreach ($permission as $perm)
                {
                    if (in_array($perm, $key))
                    {
                        $hasPermission[] = TRUE;
                    }
                    else
                    {
                        $hasPermission[] = FALSE;
                    }
                }
            }
            else
            {
                if (in_array($permission, $key))
                {
                    $hasPermission[] = TRUE;
                }
                else
                {
                    $hasPermission[] = FALSE;
                }
            }

            if (!in_array(FALSE, $hasPermission))
            {
                return TRUE;
            }
            return FALSE;
        }
        else
        {
            return FALSE;
        }
    }

}