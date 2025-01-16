<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Car Wash & Detailing' => [
                'High-Foam Car Shampoo', 'All-Purpose Cleaner', 'Bug & Tar Remover',
                'Quick Detail Spray', 'Waterless Wash', 'Foam Cannon Soap',
                'Wash Mitt', 'Drying Towel'
            ],
            'Glass Care' => [
                'Streak-Free Glass Cleaner', 'Rain Repellent', 'Glass Polish',
                'Anti-Fog Spray', 'Glass Cleaning Wipes', 'Glass Sealant',
                'Windshield Washer Fluid', 'Glass Scraper'
            ],
            'Microfiber Towels & Applicators' => [
                'Premium Microfiber Towels', 'Applicator Pads', 'Polishing Cloths',
                'Microfiber Wash Mitts', 'Drying Towels', 'Glass Cleaning Cloths',
                'Detailing Towels', 'Buffing Pads'
            ],
            'Wax & Sealants' => [
                'Carnauba Wax', 'Synthetic Sealant', 'Spray Wax',
                'Liquid Wax', 'Paste Wax', 'Paint Sealant',
                'Quick Detailer', 'Paint Protectant Spray'
            ],
            'Paint Protection' => [
                'Clear Bra Film', 'Ceramic Coating', 'Paint Protection Film',
                'Scratch Remover', 'Paint Sealant', 'UV Protectant',
                'Protective Spray', 'Paint Correction Kit'
            ],
            'Engine Care' => [
                'Engine Degreaser', 'Engine Cleaner', 'Engine Bay Protectant',
                'Engine Dressing', 'Oil Additive', 'Fuel Injector Cleaner',
                'Engine Flush', 'Radiator Coolant'
            ],
            'Polishes & Compounds' => [
                'Swirl Remover', 'Scratch Remover', 'Polishing Compound',
                'Finishing Polish', 'Rubbing Compound', 'Glaze',
                'Cutting Compound', 'Metal Polish'
            ],
            'Tire Shines' => [
                'Tire Shine Spray', 'Tire Gel', 'Tire Dressing',
                'Tire Cleaner', 'Tire Protectant', 'Tire Foam',
                'Tire Gloss', 'Tire Coating'
            ],
            'Wheel Cleaners' => [
                'Wheel Cleaner Spray', 'Brake Dust Remover', 'Wheel Polishing Kit',
                'Wheel Protectant', 'Rim Cleaner', 'Wheel Cleaning Brush',
                'Wheel Sealant', 'Wheel Wax'
            ],
            'Dashboard Cleaners' => [
                'Dashboard Cleaner Spray', 'Dashboard Wipes', 'Vinyl Protectant',
                'Interior Detailer', 'Dashboard Polish', 'Anti-Dust Spray',
                'Matte Finish Protectant', 'Gloss Finish Protectant'
            ],
            'Upholstery Cleaners' => [
                'Fabric Cleaner', 'Upholstery Shampoo', 'Carpet Cleaner',
                'Seat Cleaner', 'Stain Remover', 'Odor Eliminator',
                'Upholstery Brush', 'Fabric Protectant'
            ],
            'Air Fresheners' => [
                'Car Air Freshener Spray', 'Hanging Air Fresheners', 'Vent Clips',
                'Gel Fresheners', 'Air Freshener Bomb', 'Scented Sachets',
                'Odor Neutralizer', 'Essential Oil Diffuser'
            ],
            'Leather Care' => [
                'Leather Cleaner', 'Leather Conditioner', 'Leather Protectant',
                'Leather Wipes', 'Leather Balm', 'Leather Detailing Kit',
                'Leather Repair Kit', 'Leather Moisturizer'
            ],
            'Pressure Washers' => [
                'Electric Pressure Washer', 'Gas Pressure Washer', 'Pressure Washer Gun',
                'Pressure Washer Hose', 'Foam Cannon', 'Pressure Washer Nozzles',
                'Extension Wand', 'Surface Cleaner'
            ],
            'Detailing Brushes' => [
                'Interior Detail Brush', 'Wheel Brush', 'Engine Brush',
                'Air Vent Brush', 'Leather Brush', 'Tire Brush',
                'Trim Brush', 'Carpet Brush'
            ],
            'Foam Cannons' => [
                'Heavy-Duty Foam Cannon', 'Adjustable Foam Cannon', 'Foam Gun',
                'Foam Cannon Soap', 'Pressure Washer Foam Cannon', 'Hose Attachment Foam Cannon',
                'Quick Connect Foam Cannon', 'Dual Action Foam Cannon'
            ],
            'Convertible Top Cleaners' => [
                'Convertible Top Cleaner', 'Convertible Top Protectant', 'Fabric Top Cleaner',
                'Vinyl Top Cleaner', 'Convertible Top Sealant', 'Top Cleaning Brush',
                'Top Care Kit', 'Convertible Top Conditioner'
            ],
            'Headlight Restoration Kits' => [
                'Headlight Restoration Kit', 'Headlight Cleaner', 'Headlight Polish',
                'UV Protectant', 'Sanding Discs', 'Polishing Pads',
                'Restoration Wipes', 'Headlight Coating'
            ],
            'Odor Eliminators' => [
                'Odor Eliminator Spray', 'Air Purifier', 'Odor Neutralizing Gel',
                'Smoke Odor Eliminator', 'Odor Absorbing Bags', 'Car Odor Bomb',
                'Scented Deodorizer', 'Pet Odor Remover'
            ],
        ];

        foreach ($categories as $categoryName => $categoryProducts) {
            $category = ProductCategory::where('category_name', $categoryName)->first();

            if ($category) {
                foreach ($categoryProducts as $productName) {
                    Product::factory()->create([
                        'product_category_id' => $category->id,
                        'name' => $productName,
                    ]);
                }
            }
        }
    }
}
