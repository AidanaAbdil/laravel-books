<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first(); // Ensure there's at least one user in the database

        if ($user) {
            $user->role = 'admin'; // Assign 'admin' role
            $user->save();
        }
    }
}
