<?php

namespace App\Http\Controllers\Personal\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Portfolio\StoreRequest;
use App\Models\Category;
use App\Models\Crypto;
use App\Models\CryptoUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id']=auth()->user()->id;

        $data['sum']= $data['amount']*$data['buy_price'];

        $cryptos = Crypto::all();
        foreach ($cryptos as $crypto)
        {
            if ($crypto->id == $data['crypto_id'])
                $current_price=$crypto->current_price;
        }
       // dd($current_price);
        $data['current_sum']=$data['amount']* $current_price;
        //dd($data);
        CryptoUser::create($data);
        return redirect()->route('personal.portfolio.index');
    }
}
