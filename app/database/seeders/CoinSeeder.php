<?php

namespace Database\Seeders;

use App\Models\User\Coin;
use Illuminate\Database\Seeder;

class CoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coin::create([
            'name'  => 'Ouro',
            'url'   => 'ouro'
        ]);

        Coin::create([
            'name'  => 'Prata',
            'url'   => 'prata'
        ]);
    }
}
