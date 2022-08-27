<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Helpers\RajaOngkir;
use App\Models\City;
use App\Models\Province;

class FetchingRajaOngkir extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:RajaOngkir';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch data from Raja Ongkir';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Fetching Data From Raja Ongkir');

        foreach(RajaOngkir::province()->results as $provin) {
            if (Province::where(['province_id' => $provin->province_id])->first() == null)
            {
                Province::create([
                    'province_id' => $provin->province_id,
                    'prov_name' => $provin->province,
                ]);
                foreach (RajaOngkir::city("province={$provin->province_id}")->results as $row) {
                    if (City::where(['city_id' => $row->city_id])->first() == null)
                    {
                        City::create([
                            'province_id' => $provin->province_id,
                            'city_id' => $row->city_id,
                            'city_name' => $row->city_name, 
                            'type' => $row->type, 
                            'postal_code' => $row->postal_code,
                        ]);
                    }
                }
            }
        }
        return $this->info('Done');
    }
}