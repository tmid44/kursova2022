<?php

namespace App\Http\Controllers\Personal\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Crypto;
use App\Models\CryptoUser;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(string $cryptoName)
    {
        $cryptos = auth()->user()->cryptos;

        foreach ($cryptos as $crypto){
            if ($crypto->title == $cryptoName){
                $searched_id = $crypto->id;
            }
        }
        dd($searched_id);

        $crypto_infs = auth()->user()->crypto_inf;

        $allCryptos = Crypto::all();
        //$portfolios = CryptoUser::all();

        foreach ($crypto_infs as $portfolio){
            $data['crypto_id']=$portfolio->crypto_id;
            $data['buy_price']=$portfolio->buy_price;
            $data['amount']=$portfolio->amount;
            foreach ($allCryptos as $cryptoo)
            {
                if ($cryptoo->id == $portfolio->crypto_id)
                    $current_price=$cryptoo->current_price;
            }
            $data['current_sum']=$data['amount'] * $current_price;
            $data['diff_sum']= $data['current_sum'] - $portfolio->sum;
            //dd($data['diff_sum']);
            $portfolio->update($data);
        }


        // dd($current_price);
        //$data['current_sum']=$data['amount']* $current_price;

        return view('personal.portfolio.index', compact('cryptos' , 'crypto_infs'));
    }
}
