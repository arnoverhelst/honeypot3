<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'username' => '0x01th admin',
            'name' => '0x01th admin',
            'email' => 'info@arnoverhelst.be',
            'password' => Hash::make('ixsK@ds!az'),
        ]);

        $user = User::create([
            'username' => 'arnoverhelst',
            'name' => 'Arno Verhelst',
            'email' => 'arno.verhelst@student.howest.be',
            'password' => Hash::make('aetheR1234'),
        ]);

        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
    }
}
