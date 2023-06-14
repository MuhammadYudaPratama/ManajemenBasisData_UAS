<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Shipper;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(SuppliersTableSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(EmployeesSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(OrderDetailsSeeder::class);
        $this->call(ShippersSeeder::class);
    }
}