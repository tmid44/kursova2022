<?php

namespace App\Http\Controllers\Admin\Crypto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Crypto;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Crypto $crypto)
    {
        $crypto->delete();
        return redirect()->route('admin.crypto.index');
    }
}
