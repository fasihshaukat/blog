<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerscontroller extends Controller
{
    public function list()
    {
        $customers = [
            'fasih shaukat',
            'hamza nouman',
            'faqeeh abbas',
        ];
        return view('internals.customers', [
            'key' => $customers,
        ]);
    }
}
