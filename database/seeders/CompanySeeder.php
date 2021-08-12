<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::insert([
            'trading_name'=>'Swift Recruit',
            'registered_as'=>'Swift Recruit',
            'registration_number'=>'',
            'vat_number'=>'',
            'contact_name'=>'Anja Pretorius',
            'contact_number'=>'0721053850',
            'email'=>'anja@swift-recruit.co.za',
            'physical_address'=>'centurion',
            'postal_address'=>'centurion',
            'slogan'=>'go bokker',
            'logo'=>''
        ]);
    }
}
