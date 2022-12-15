<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(BrandsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(MultiImgsTableSeeder::class);
        $this->call(OrderItemsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ShipDistrictsTableSeeder::class);
        $this->call(ShipDivisionsTableSeeder::class);
        $this->call(ShipStatesTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(SubcategoriesTableSeeder::class);
        $this->call(SubsubcategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(WishlistsTableSeeder::class);
    }
}
