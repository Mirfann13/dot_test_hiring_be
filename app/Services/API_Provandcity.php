<?php

namespace App\Services;

use App\Helpers\RajaOngkir;
use App\Interfaces\ProvandcityInterface;

class API_Provandcity implements ProvandcityInterface {

    public function getProvince($id = null): array
    {
        $result = array();

        if ($id == null)
        {
            foreach (RajaOngkir::province()->results as $row)
            {
                array_push($result, [
                    'province_id' => $row->province_id,
                    'prov_name' => $row->province,
                ]);
            }
        }

        else {
            $row = RajaOngkir::province("id={$id}")->results;
            $result = [
                'province_id' => $row->province_id,
                'prov_name' => $row->province,
            ];
        }

        if ( $result == 0) return [
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
        $result = array();
        if ($id == null)
        {
            foreach (RajaOngkir::city()->results as $row)
            {
                array_push($result, [
                    'province_id' => $row->province_id,
                    'prov_nmae' => $row->province,
                    'city_id' => $row->city_id,
                    'city_name' => $row->city_name,
                    'type' => $row->type,
                    'postal_code' => $row->postal_code,
                ]);
            }
        }

        else {
            $row = RajaOngkir::city("id={$id}")->results;
            $result = [
                'province_id' => $row->province_id,
                'prov_name' => $row->province,
                'city_id' => $row->city_id,
                'city_name' => $row->city_name,
                'type' => $row->type,
                'postal_code' => $row->postal_code
            ];
        }

        if ( $result == 0) return [
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

?>