<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StateController extends Controller
{
    public function setCookie()
    {
        return response('Cookie is set!')->cookie(
            'last_access',
            date('Y-m-d H:i:s'),
            60 * 24
        );
    }

    public function getCookie(Request $req)
    {
        return response('Got Cookie:' . $req->cookie('last_access'));
    }

    public function putSession(Request $req)
    {
        $req->session()->put('last_access', date('Y-m-d H:i:s'));
        return 'Put session.';
    }

    public function getSession(Request $req)
    {
        return 'Get session:'.$req->session()->get('last_access', 'No data');
//      return 'Get session by method:'.session('last_access', 'No data');
    }
}
