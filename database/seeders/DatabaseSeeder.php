<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'company_id' => 'CID-TEST',
            'name' => 'Test User',
            'email' => 'testing@example.com',
            'password' => 'testing!this'
        ]);

        User::factory()->create([
            'company_id' => 'frequentis',
            'name' => 'Frequentis',
            'email' => 'john1@example.com',
            'password' => bcrypt('vH2vpYnF9feG')
        ]);

        User::factory()->create([
            'company_id' => 'msg',
            'name' => 'msg',
            'email' => 'john2@example.com',
            'password' => bcrypt('QMbT8ysxXMHY')
        ]);

        User::factory()->create([
            'company_id' => 'analogdevices',
            'name' => 'Analog Devices',
            'email' => 'john3@example.com',
            'password' => bcrypt('AFpM7J3CZMtB')
        ]);

        User::factory()->create([
            'company_id' => 'rebeldot',
            'name' => 'Rebeldot',
            'email' => 'john4@example.com',
            'password' => bcrypt('F59JYquUZKDc')
        ]);

        User::factory()->create([
            'company_id' => 'automatify',
            'name' => 'Automatify',
            'email' => 'john5@example.com',
            'password' => bcrypt('N7sqAxvB7Qce')
        ]);

        User::factory()->create([
            'company_id' => 'holcim',
            'name' => 'Holcim',
            'email' => 'john6@example.com',
            'password' => bcrypt('GbCNLPDVEh54')
        ]);

        User::factory()->create([
            'company_id' => 'sts',
            'name' => 'Serviciul de Telecomunicatii Speciale',
            'email' => 'john7@example.com',
            'password' => bcrypt('tZAyxeBMQy9R')
        ]);

        User::factory()->create([
            'company_id' => 'uncountable',
            'name' => 'Uncountable',
            'email' => 'john8@example.com',
            'password' => bcrypt('ahaMUxzdGquZ')
        ]);

        User::factory()->create([
            'company_id' => 'seeus',
            'name' => 'SEE US Work and Travel',
            'email' => 'john9@example.com',
            'password' => bcrypt('sBTrufAqgj92')
        ]);

    }
}
