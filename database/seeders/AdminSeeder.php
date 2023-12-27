<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admindata = [[
            'email' => 'koozee@macroma.school',
            'name' => 'Niko Achmad', 
            'password' => 'passadmin'
        ]];
        foreach($admindata as $key => $value){
            Admin::create($value);
        }
    }
}
