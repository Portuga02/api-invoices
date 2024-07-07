<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoController extends Controller
{
    public function login(Request $request)
    {
        return $this->response('Authorized', Response::HTTP_OK);
    }

    public function logout()
    {
        return $this->response('Usuario deslogado com sucesso', Response::HTTP_OK);
    }

}
