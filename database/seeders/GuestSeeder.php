<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest::create([
            'fullname' => 'Anisa',
            'institution_id' => 3,
            'from' => 'PT Bim',
            'phonenumber' => '08123456789',
            'email' => 'Anisa@mail.com',
            'note' => 'Test',
        ]);
    }
}
