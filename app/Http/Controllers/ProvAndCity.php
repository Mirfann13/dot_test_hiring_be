<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;

class ProvAndCity extends Controller
{

    public function getProvince()
    {
        $id = request()->query('id');

        $result = Province::where(['province_id' => $id])->first();

        if ($result == null) return response()->json([
            'code' => 404,
            'message' => 'Data Not Found!',
        ]);
        return response()->json([
            'code' => 200,
            'message' => 'Get Province By ID!',
            'data' => $result,
        ]);
    }

    public function getCity()
    {
        $id = request()->query('id');

        $result = City::join('province', 'province.province_id', '=', 'cities.province_id')
            ->where(['city_id' => $id])
            ->first([
                'province.prov_name',
                'cities.*',
        ]);

        if ($result == null) return response()->json([
            'code' => 404,
            'message' => 'Data Not Found!',
        ]);

        return response()->json([
            'code' => 200,
            'message' => 'Get City By ID!',
            'data' => $result,
        ]);
    }
}