<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Boat Headphone',
                'price' => '100',
                'description' => 'boAt Bassheads 102 in Ear Wired Earphones with Mic(Fiery Red)'
            ],
            [
                'name' => 'ZEBRONICSHeadphone',
                'price' => '200',
                'description' => 'ZEBRONICS Zeb-Bro in Ear Wired Earphones with Mic, 3.5mm Audio Jack, 10mm Drivers, Phone/Tablet Compatible(Green)'
            ],
            [
                'name' => 'PHILIPS Headphone',
                'price' => '300',
                'description' => 'PHILIPS Audio TAE1126 Wired in Ear Earphones with mic, 10 mm Driver, Powerful bass and Clear Sound, Black'
            ],
           
        ];
        \DB::table('products')->insert($data);
    }
}
