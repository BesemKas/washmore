<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['parent_category_id' => null, 'category_name' => 'Cleaning Products'],
            ['parent_category_id' => null, 'category_name' => 'Protective Products'],
            ['parent_category_id' => null, 'category_name' => 'Polishing Products'],
            ['parent_category_id' => null, 'category_name' => 'Tire & Wheel Care'],
            ['parent_category_id' => null, 'category_name' => 'Interior Care'],
            ['parent_category_id' => null, 'category_name' => 'Tools & Accessories'],
            ['parent_category_id' => null, 'category_name' => 'Specialty Products'],
        
            ['parent_category_id' => 1, 'category_name' => 'Car Wash & Detailing'],
            ['parent_category_id' => 1, 'category_name' => 'Glass Care'],
            ['parent_category_id' => 1, 'category_name' => 'Microfiber Towels & Applicators'],
        
            ['parent_category_id' => 2, 'category_name' => 'Wax & Sealants'],
            ['parent_category_id' => 2, 'category_name' => 'Paint Protection'],
            ['parent_category_id' => 2, 'category_name' => 'Engine Care'],
        
            ['parent_category_id' => 3, 'category_name' => 'Polishes & Compounds'],
        
            ['parent_category_id' => 4, 'category_name' => 'Tire Shines'],
            ['parent_category_id' => 4, 'category_name' => 'Wheel Cleaners'],
        
            ['parent_category_id' => 5, 'category_name' => 'Dashboard Cleaners'],
            ['parent_category_id' => 5, 'category_name' => 'Upholstery Cleaners'],
            ['parent_category_id' => 5, 'category_name' => 'Air Fresheners'],
            ['parent_category_id' => 5, 'category_name' => 'Leather Care'],
        
            ['parent_category_id' => 6, 'category_name' => 'Pressure Washers'],
            ['parent_category_id' => 6, 'category_name' => 'Detailing Brushes'],
            ['parent_category_id' => 6, 'category_name' => 'Foam Cannons'],
        
            ['parent_category_id' => 7, 'category_name' => 'Convertible Top Cleaners'],
            ['parent_category_id' => 7, 'category_name' => 'Headlight Restoration Kits'],
            ['parent_category_id' => 7, 'category_name' => 'Odor Eliminators'],
        ];
        
        foreach ($categories as $category) {
            ProductCategory::create($category);
        }
        
    }
}
