<?php

use Illuminate\Database\Seeder;
use App\Currency;
class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::create(['name'=>'GNF']);
        Currency::create(['name'=>'$ USD']);
        Currency::create(['name'=>'EUR']);
        Currency::create(['name'=>'CFA']);
        Currency::create(['name'=>'GHC']);
        Currency::create(['name'=>'RUB']);
        Currency::create(['name'=>'DZD']);
        Currency::create(['name'=>'AZG']);


    }
}
