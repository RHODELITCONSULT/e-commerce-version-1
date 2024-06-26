<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('123456');
        $adminRecords = [
            ['id'=>2,'name'=>'Amit','type'=>'subadmin','mobile'=>9700000000,'email'=>'amit@admin.com','password'=>$password,'image'=>'','status'=>1],
            ['id'=>3,'name'=>'John','type'=>'subadmin','mobile'=>9900000000,'email'=>'john@admin.com','password'=>$password,'image'=>'','status'=>1],
            
        ];
        Admin::insert($adminRecords);
    }
}
