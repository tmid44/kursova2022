<?php

namespace App\Http\Controllers\Personal\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Crypto;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $cryptos = Crypto::all();
        //$cryptos = auth()->user()->crypto_inf()->crypto();

        return view('personal.portfolio.create', compact('cryptos'));
    }
}
