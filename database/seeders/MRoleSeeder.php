<?php

namespace Database\Seeders;

use App\Models\MRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MRole::create([
            "id" => 1,
            "name" => "Admin"
        ]);

        MRole::create([
            "id" => 2,
            "name" => "Anggota"
        ]);
    }
}
