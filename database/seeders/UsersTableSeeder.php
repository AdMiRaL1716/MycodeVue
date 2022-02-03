<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'cawakrop@gmail.com',
            'password' => Hash::make('Htremi4i1088'),
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
    }
}
