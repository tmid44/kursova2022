<?php

namespace App\Http\Controllers\Personal\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Portfolio\UpdateRequest;
use App\Models\Category;
use App\Models\Crypto;
use App\Models\CryptoUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, int $cryptoUser_id)
    {
        $data = $request->validated();
        $cryptoUsers = CryptoUser::all();

        //dd($cryptoUser_id);
        foreach ($cryptoUsers as $cryptoUserr)
            if ($cryptoUserr->id == $cryptoUser_id){
                $cryptoUser = $cryptoUserr;
            }
        //dd($cryptoUser);

        $cryptoUser->update($data);
        return redirect()->route('personal.portfolio.index');
    }
}
