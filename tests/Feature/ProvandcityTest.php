<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProvandcityTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_no_authen()
    {
        $response = $this->get('/search/provinces');
        $response->assertStatus(200)->assertExactJson([
            'code' => 403,
            'message' => 'Need An Authorization First'
        ]);
    }

    public function test_provinces()
    {
        $response = $this->get('/search/provinces', [
            'username' => 'irfan',
            'password' => '123',
        ]);
        $response->assertStatus(200)->assertJson(['code' => 200]);
    }

    public function test_provinces_by_id()
    {
        $response = $this->get('/search/provinces?id=19', [
            'username' => 'irfan',
            'password' => '123',
        ]);
        $response->assertStatus(200)->assertJson([
            'code' => 200,
            "data" => [
                "province_id" => 19,
                "prov_name" => "Maluku"
            ]
        ]);
    }

    public function test_city()
    {
        $response = $this->get('/search/cities', [
            'username' => 'irfan',
            'password' => '123',
        ]);
        $response->assertStatus(200)->assertJson(['code' => 200]);
    }

    public function test_city_by_id()
    {
        $response = $this->get('/search/cities?id=19', [
            'username' => 'irfan',
            'password' => '123',
        ]);
        $response->assertStatus(200)->assertJson([
            'code' => 200,
            "data" => [
                "province_id" => 15,
                "prov_name" => "Kalimantan Timur",
                "city_id" => "19",
                "city_name" => "Balikpapan",
                "type" => "Kota",
                "postal_code" => "76111"
            ]
        ]);
    }
}
