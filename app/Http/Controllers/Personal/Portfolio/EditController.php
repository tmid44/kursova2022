<?php

namespace App\Http\Controllers\Personal\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Crypto;
use App\Models\CryptoUser;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(int $cryptoUser_id)
    {
        //dd($cryptoUser_id);
        $cryptoUsers = CryptoUser::all();

        foreach ($cryptoUsers as $cryptoUserr)
            if ($cryptoUserr->id == $cryptoUser_id){
                $cryptoUser = $cryptoUserr;
            }
        //dd($cryptoUser);
        $cryptos = Crypto::all();

        return view('personal.portfolio.edit', compact('cryptoUser', 'cryptos'));
    }
}
