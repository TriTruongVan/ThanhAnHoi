<?php

namespace Database\Seeders;

use App\Enums\UserRoles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info("Start seeding an admin user");
        User::updateOrCreate(
            ['tel'=>'0935740586'],
            [
                'password' => Hash::make('thanhanhoi'),
                'role' => UserRoles::Admin,
                'name' => 'Thanh An Hội',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        $this->command->info("Finish seeding an admin user");
    }
}
