<?php

namespace App\Http\Controllers\Admin\Crypto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.cryptos.create');
    }
}
