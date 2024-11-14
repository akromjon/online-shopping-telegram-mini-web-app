<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WebAppController extends Controller
{
    public function getApp(): Factory|View
    {
        return view('pages.home.index');
    }
}
