<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\Auth_lib;

class AuthMiddlewareAdminOnly implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return RequestInterface|ResponseInterface|string|void
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        // get session login
        $authUser = session('auth');
        
        if($authUser && $authUser['role_id'] == 1){
            return $request;
        }

        return redirect()->to('/signin');
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return ResponseInterface|void
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
        $input = session('input');
        $auth_lib = new Auth_lib();

        if(isset($input['remember'])){
           
            $auth_lib->set_cookie('email', $input['email'], 30);
            $auth_lib->set_cookie('password', $auth_lib->textToHash($input['password']), 30);
            $auth_lib->set_cookie('remember', 'ok', 3);
           
        }

        // dd($input);
        
        return $request;
    }
}
