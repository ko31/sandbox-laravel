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
}
