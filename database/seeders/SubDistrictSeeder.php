<?php

namespace Database\Seeders;
use App\Models\SubDistrict;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            'Bumi Waras',
            'Enggal',
            'Kedamaian',
            'Kedaton',
            'Kemiling',
            'Labuhan Ratu',
            'Langkapura',
            'Panjang',
            'Rajabasa',
            'Sukabumi',
            'Sukarame',
            'Tanjung Senang',
            'Tanjung Karang Barat',
            'Tanjung Karang Pusat',
            'Tanjung Karang Timur',
            'Teluk Betung Barat',
            'Teluk Betung Selatan',
            'Teluk Betung Timur',
            'Teluk Betung Utara',
            'Way Halim',
        ];

        foreach ($datas as $data){
            SubDistrict::create([
                'name' => $data,
                'slug' => Str::slug($data),
            ]);
        }
    }
}
