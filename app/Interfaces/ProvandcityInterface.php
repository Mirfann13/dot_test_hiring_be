<?php

namespace App\Interfaces;

interface ProvandcityInterface {

    public function getProvince($id): array;
    public function getCity($id): array;

}

?>