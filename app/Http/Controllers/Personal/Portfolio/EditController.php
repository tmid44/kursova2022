<?php

namespace App\Http\Controllers\Personal\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Crypto;
use App\Models\CryptoUser;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(CryptoUser $cryptoUser)
    {
        dd($cryptoUser);
        $cryptos = Crypto::all();

        return view('personal.portfolio.edit', compact('cryptoUser', 'cryptos'));
    }
}
