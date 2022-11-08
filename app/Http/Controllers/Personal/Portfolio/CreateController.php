<?php

namespace App\Http\Controllers\Personal\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $cryptos = auth()->user()->cryptos;

        return view('personal.portfolio.create', compact('cryptos'));
    }
}
