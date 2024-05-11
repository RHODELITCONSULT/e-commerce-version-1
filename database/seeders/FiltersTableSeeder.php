<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductsFilter;

class FiltersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filterRecords = [
            ['id'=>1,'filter_name'=>'Fabric','filter_value'=>'Cotten','Sort'=>1,'status'=>1],
            ['id'=>2,'filter_name'=>'Fabric','filter_value'=>'Polyester','Sort'=>2,'status'=>1],
            ['id'=>3,'filter_name'=>'Fabric','filter_value'=>'Wool','Sort'=>3,'status'=>1],
            ['id'=>4,'filter_name'=>'Sleeve','filter_value'=>'Full Sleeve','Sort'=>1,'status'=>1],
            ['id'=>5,'filter_name'=>'Sleeve','filter_value'=>'Half Sleeve','Sort'=>2,'status'=>1],
            ['id'=>6,'filter_name'=>'Sleeve','filter_value'=>'Short Sleeve','Sort'=>3,'status'=>1],
            ['id'=>7,'filter_name'=>'Pattern','filter_value'=>'Checked','Sort'=>1,'status'=>1],
            ['id'=>8,'filter_name'=>'Pattern','filter_value'=>'Plain','Sort'=>2,'status'=>1],
            ['id'=>9,'filter_name'=>'Pattern','filter_value'=>'Printed','Sort'=>3,'status'=>1],
            ['id'=>10,'filter_name'=>'Pattern','filter_value'=>'Self','Sort'=>4,'status'=>1],
            ['id'=>11,'filter_name'=>'Pattern','filter_value'=>'Solid','Sort'=>5,'status'=>1],
            ['id'=>12,'filter_name'=>'Fit','filter_value'=>'Regular','Sort'=>1,'status'=>1],
            ['id'=>13,'filter_name'=>'Fit','filter_value'=>'Slim','Sort'=>2,'status'=>1],
            ['id'=>14,'filter_name'=>'Occasion','filter_value'=>'Casual','Sort'=>1,'status'=>1],
            ['id'=>15,'filter_name'=>'Occasion','filter_value'=>'Formal','Sort'=>2,'status'=>1],
        ];

        ProductsFilter::insert($filterRecords);
    }

}
