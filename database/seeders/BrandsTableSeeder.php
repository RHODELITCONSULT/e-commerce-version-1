<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brandRecords = [
            ['id'=>1,'brand_name'=>'Arrow','brand_image'=>'','brand_logo'=>'','brand_discount'=>0,'description'=>'','url'=>'arrow','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1],
            ['id'=>2,'brand_name'=>'Gab','brand_image'=>'','brand_logo'=>'','brand_discount'=>0,'description'=>'','url'=>'gab','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1],
            ['id'=>3,'brand_name'=>'Nike','brand_image'=>'','brand_logo'=>'','brand_discount'=>0,'description'=>'','url'=>'nike','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1],
            ['id'=>4,'brand_name'=>'Puma','brand_image'=>'','brand_logo'=>'','brand_discount'=>0,'description'=>'','url'=>'puma','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1],
            ['id'=>5,'brand_name'=>'Monte Carlo','brand_image'=>'','brand_logo'=>'','brand_discount'=>0,'description'=>'','url'=>'monte-carlo','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1]
        ];

        Brand::insert($brandRecords);
    }
}
