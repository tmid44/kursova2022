<?php

namespace App\Http\Controllers\Personal\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Crypto;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cryptos = auth()->user()->cryptos;
        return view('personal.portfolio.index', compact('cryptos'));
    }
}
