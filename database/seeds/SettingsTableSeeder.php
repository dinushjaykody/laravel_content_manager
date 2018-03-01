<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name'  => 'Content Manager',
            'address'   => 'Melbourne Australia',
            'contact_number' => '1300786345',
            'contact_email'  => 'info@design.com.au'
        ]);
    }
}
