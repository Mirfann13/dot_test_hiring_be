<?php

namespace App\Services;

use App\Models\{Province, City};
use App\Interfaces\ProvandcityInterface;

class DB_Provandcity implements ProvandcityInterface
{

    public function getProvince($id = null): array
    {

        $result = Province::where(['province_id' => $id])->first();

        if ($result == null) return [
            'code' => 404,
            'message' => 'Data Not Found!',
        ];

        return [
            'code' => 200,
            'message' => 'Get Province By ID!',
            'data' => $result,
        ];
    }

    public function getCity($id = null): array
    {
        $id = request()->query('id');

        $result = City::join('province', 'province.province_id', '=', 'cities.province_id')
            ->where(['city_id' => $id])
            ->first([
                'province.prov_name',
                'cities.*',
        ]);

        if ($result == null) return [
            'code' => 404,
            'message' => 'Data Not Found!',
        ];

        return [
            'code' => 200,
            'message' => 'Get City By ID!',
            'data' => $result,
        ];
    }
}