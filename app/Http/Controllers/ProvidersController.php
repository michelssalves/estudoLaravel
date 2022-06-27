<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function index(){
        $providers  = [
            0 => ['name' => 'Provider1', 'status' => 'N', 'cnpj' => '0', 'ddd' => '11', 'phone' => '0000-0000'],
            1 => ['name' => 'Provider2', 'status' => 'S', 'cnpj' => '0', 'ddd' => '41', 'phone' => '0000-0000'],
            2 => ['name' => 'Provider3', 'status' => 'S', 'cnpj' => '0', 'ddd' => '55', 'phone' => '0000-0000'],
        ];

        echo isset($providers[0]['cnpj']) ? 'CNPJ informed ' : 'CNPJ not informed';
        $providers  = [];
        return view('app.providers.index', compact('providers'));
    }
}
