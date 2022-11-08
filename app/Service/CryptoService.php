<?php

namespace App\Service;

use App\Models\Crypto;
use http\Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CryptoService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();

            if (isset($data['logo'])) {
                $data['logo'] = Storage::disk('public')->put('/images', $data['logo']);
            }
            $crypto = Crypto::firstOrCreate($data);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $crypto)
    {
        try {
            DB::beginTransaction();

            if (isset($data['logo'])) {
                $data['logo'] = Storage::disk('public')->put('/images', $data['logo']);
            }

            $crypto->update($data);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $crypto;
    }

}
