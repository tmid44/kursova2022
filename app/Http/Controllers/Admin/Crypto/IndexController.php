<?php

namespace App\Http\Controllers\Admin\Crypto;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Crypto;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cryptos = Crypto::all();
        return view('admin.cryptos.index', compact('cryptos'));
    }
}
