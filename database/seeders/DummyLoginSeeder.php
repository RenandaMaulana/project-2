<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DummyLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $UserData=[
        [
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'role'=>'admin',
            'password'=> Hash::make('12345'),
        ],
        [
            'name'=>'kepala_dinas',
            'email'=>'k_dinassubang@gmail.com',
            'role'=>'kepala_dinas',
            'password'=> Hash::make('12345'),
        ],
    ];
    foreach($UserData as $key => $val){
        User::create($val);
    }
    }
}
