<?php

namespace App\Http\Controllers;

use App\Interfaces\ProvandcityInterface;

class Provandcity extends Controller
{
    protected $ProvAndCity;

    public function __construct(ProvandcityInterface $ProvAndCity)
    {
        $this->ProvAndCity = $ProvAndCity;
    }

    public function getProvince()
    {
        $result = $this->ProvAndCity->getProvince(request()->query('id'));
        return response()->json($result);
    }
    public function getCity()
    {
        $result = $this->ProvAndCity->getCity(request()->query('id'));
        return response()->json($result);
    }
}