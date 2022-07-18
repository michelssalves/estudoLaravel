<?php

use Illuminate\Database\Seeder;
use App\ReasonForContact;


class ReasonContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        ReasonForContact::create(['reason_contact' => 'Doubt']);
        ReasonForContact::create(['reason_contact' => 'Praise']);
        ReasonForContact::create(['reason_contact' => 'Complaint']);
    }
}
