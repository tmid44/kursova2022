<?php

namespace App\Http\Controllers\Admin\Crypto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Crypto\StoreRequest;
use App\Models\Category;
use App\Models\Crypto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if (isset($data['logo'])) {
            $data['logo'] = Storage::disk('public')->put('/images', $data['logo']);
        }



        Crypto::firstOrCreate($data);
        return redirect()->route('admin.crypto.index');
    }
}
