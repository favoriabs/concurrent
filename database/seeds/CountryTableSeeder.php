<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
			['id' => 1, 'country_name' => "United States", 'country_currency' => "Dollars", 'currency_code'=> "USD", 'currency_rate_todollar'=>1],
			['id' => 2, 'country_name' => "United Kingdom", 'country_currency' => "Pounds", 'currency_code'=> "GBP", 'currency_rate_todollar'=>1.32778],
			['id' => 3, 'country_name' => "France", 'country_currency' => "Euro", 'currency_code'=> "Euro", 'currency_rate_todollar'=>1.12239],
			['id' => 4, 'country_name' => "Nigeria", 'country_currency' => "Naira", 'currency_code'=> "NGN", 'currency_rate_todollar'=>0.00308166],
			['id' => 5, 'country_name' => "Germany", 'country_currency' => "Euro", 'currency_code'=> "EURO", 'currency_rate_todollar'=>1.12239],
			['id' => 6, 'country_name' => "Russia", 'country_currency' => "Ruble", 'currency_code'=> "RUB", 'currency_rate_todollar'=>0.0154252],
			['id' => 7, 'country_name' => "China", 'country_currency' => " Yuan Renminbi", 'currency_code'=> "CNY", 'currency_rate_todollar'=>0.149677],
			['id' => 8, 'country_name' => "Japan", 'country_currency' => "Yen", 'currency_code'=> "JPY", 'currency_rate_todollar'=>0.00981349],
			['id' => 9, 'country_name' => "Brazil", 'country_currency' => "Real", 'currency_code'=> "BRL", 'currency_rate_todollar'=>0.307769],
			['id' => 10, 'country_name' => "Saudi Arabia", 'country_currency' => "RIYAL", 'currency_code'=> "SAR", 'currency_rate_todollar'=>0.266596],
		]);
    }
}
