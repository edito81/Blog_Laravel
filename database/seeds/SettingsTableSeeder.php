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
        App\Setting::create([
            'site_name' => "Laravel's Blog",
            'address'   => 'Russia, Petersburg',
            'contact_number' => '0898884774',
            'contact_email' => 'info@bmw.de'
        ]);
    }
}
