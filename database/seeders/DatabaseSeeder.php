<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(adminsTableSeeder::class);
        // $this->call(CmsPageTableSeeder::class);
        // $this->call(CategoryTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        // $this->call(ProductsImagesTableSeeder::class);
        // $this->call(ProductsAttributesTableSeeder::class);
        // $this->call(BrandsTableSeeder::class);
        // $this->call(BannersTableSeeder::class);
        // $this->call(FiltersTableSeeder::class);
        // $this->call(CouponsTableSeeder::class);
        // $this->call(DeliveryAddressTableSeeder::class);
        // $this->call(OrderStatusTableSeeder::class);
        // $this->call(NewsletterSubscriberTableSeeder::class);
        // $this->call(RatingsTableSeeder::class);
         $this->call(WishlistsTableSeeder::class);
    }
}
