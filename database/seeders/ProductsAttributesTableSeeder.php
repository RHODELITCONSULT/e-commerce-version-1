<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductsAttribute;

class ProductsAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productAttributeRecords = [
            ['id'=>1,'product_id'=>1,'size'=>'Small','sku'=>'BT00122S','price'=>1000,'stock'=>100,'status'=>1],
            ['id'=>2,'product_id'=>1,'size'=>'Medium','sku'=>'BT00122M','price'=>1200,'stock'=>80,'status'=>1],
            ['id'=>3,'product_id'=>1,'size'=>'Large','sku'=>'BT00122L','price'=>1400,'stock'=>50,'status'=>1]
        ];
        ProductsAttribute::insert($productAttributeRecords);
    }
}
