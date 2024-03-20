<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestHomeController extends Controller
{
    public function __invoke()
    {
        return view('guest.home');
    }
}
