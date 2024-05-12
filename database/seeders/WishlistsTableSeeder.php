<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wishlist;

class WishlistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wishlistRecords = [
            ['id'=>1,'user_id'=>4,'product_id'=>7],
            ['id'=>2,'user_id'=>5,'product_id'=>8]
        ];

        Wishlist::insert($wishlistRecords);
    }
}
