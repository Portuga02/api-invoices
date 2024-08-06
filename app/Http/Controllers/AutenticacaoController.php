<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticacaoController extends Controller
{
    public function login(Request $request)
    {
        return $this->response('Authorized', 200);
    }

    public function logout()
    {
    }

}
