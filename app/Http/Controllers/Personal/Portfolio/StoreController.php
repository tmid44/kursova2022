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

        CryptoUser::create($data);
        return redirect()->route('personal.portfolio.index');
    }
}
