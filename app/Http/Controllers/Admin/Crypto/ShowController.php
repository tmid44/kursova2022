<?php

namespace App\Http\Controllers\Admin\Crypto;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Crypto;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Crypto $crypto)
    {
        return view('admin.cryptos.show', compact('crypto'));
    }
}
