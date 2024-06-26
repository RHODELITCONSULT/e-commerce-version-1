<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DeliveryAddress;

class DeliveryAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deliveryAddressRecords = [
            ['id'=>1,'user_id'=>1,'name'=>'Del Rhodel','address'=>'Test 123','city'=>'Tema','state'=>'Tema','country'=>'Ghana','pincode'=>'1001','mobile'=>'0244491803','status'=>1],
            ['id'=>2,'user_id'=>2,'name'=>'John Doe','address'=>'Michel Camp','city'=>'Accra','state'=>'Accra','country'=>'Ghana','pincode'=>'1002','mobile'=>'0206931921','status'=>1]
        ];
        DeliveryAddress::insert($deliveryAddressRecords);
    }
}
