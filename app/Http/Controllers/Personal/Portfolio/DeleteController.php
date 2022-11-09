<?php

namespace App\Http\Controllers\Personal\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Crypto;
use App\Models\CryptoUser;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(int $cryptoUser_id)
    {
        //dd($cryptoUser_id);
        $cryptoUsers = CryptoUser::all();

        foreach ($cryptoUsers as $cryptoUserr)
            if ($cryptoUserr->id == $cryptoUser_id){
                $cryptoUser = $cryptoUserr;
            }
        $cryptoUser->delete();
        return redirect()->route('personal.portfolio.index');
    }
}
