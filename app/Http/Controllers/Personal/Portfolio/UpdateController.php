<?php

namespace App\Http\Controllers\Personal\Portfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Crypto\UpdateRequest;
use App\Models\Category;
use App\Models\Crypto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Crypto $crypto)
    {

        $data = $request->validated();
        if (isset($data['logo'])) {
            $data['logo'] = Storage::disk('public')->put('/images', $data['logo']);
        }
        $crypto->update($data);
        return view('admin.cryptos.show', compact('crypto'));
    }
}
