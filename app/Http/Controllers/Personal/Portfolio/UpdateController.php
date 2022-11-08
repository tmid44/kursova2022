<?php

namespace App\Http\Controllers\Personal\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Crypto\UpdateRequest;
use App\Models\Category;
use App\Models\Crypto;
use App\Models\CryptoUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, CryptoUser $cryptoUser)
    {

        $data = $request->validated();
        dd($data);
        if (isset($data['logo'])) {
            $data['logo'] = Storage::disk('public')->put('/images', $data['logo']);
        }
        $cryptoUser->update($data);
        return view('admin.cryptos.show', compact('crypto'));
    }
}
