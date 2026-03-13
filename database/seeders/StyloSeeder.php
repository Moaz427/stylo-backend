<?php
// database/seeders/StyloSeeder.php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class StyloSeeder extends Seeder
{
    public function run()
    {
        // ===== CATEGORIES =====
        $menTshirts   = Category::create(['name' => 'Men',   'subcategory' => 'T-Shirts']);
        $menPants     = Category::create(['name' => 'Men',   'subcategory' => 'Pants']);
        $menJackets   = Category::create(['name' => 'Men',   'subcategory' => 'Jackets']);
        $womenDresses = Category::create(['name' => 'Women', 'subcategory' => 'Dresses']);
        $womenTops    = Category::create(['name' => 'Women', 'subcategory' => 'Tops']);
        $womenPants   = Category::create(['name' => 'Women', 'subcategory' => 'Pants']);

        // ===== MEN PRODUCTS =====
        $menProducts = [
            [
                'name' => 'Classic White Tee',
                'description' => 'Premium cotton classic white t-shirt. Comfortable for everyday wear.',
                'price' => 299.00,
                'gender' => 'men',
                'category_id' => $menTshirts->id,
                'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=500',
            ],
            [
                'name' => 'Navy Striped Tee',
                'description' => 'Stylish navy striped t-shirt, perfect for casual outings.',
                'price' => 349.00,
                'gender' => 'men',
                'category_id' => $menTshirts->id,
                'image' => 'https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=500',
            ],
            [
                'name' => 'Slim Fit Chinos',
                'description' => 'Modern slim fit chino pants. Available in beige and navy.',
                'price' => 699.00,
                'gender' => 'men',
                'category_id' => $menPants->id,
                'image' => 'https://images.unsplash.com/photo-1624378439575-d8705ad7ae80?w=500',
            ],
            [
                'name' => 'Dark Denim Jeans',
                'description' => 'Classic dark wash denim jeans with a straight cut.',
                'price' => 849.00,
                'gender' => 'men',
                'category_id' => $menPants->id,
                'image' => 'https://images.unsplash.com/photo-1542272604-787c3835535d?w=500',
            ],
            [
                'name' => 'Urban Bomber Jacket',
                'description' => 'Trendy urban bomber jacket. Perfect for cool evenings.',
                'price' => 1299.00,
                'gender' => 'men',
                'category_id' => $menJackets->id,
                'image' => 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=500',
            ],
            [
                'name' => 'Classic Denim Jacket',
                'description' => 'Timeless denim jacket. A wardrobe essential.',
                'price' => 1149.00,
                'gender' => 'men',
                'category_id' => $menJackets->id,
                'image' => 'https://images.unsplash.com/photo-1523205771623-e0faa4d2813d?w=500',
            ],
        ];

        // ===== WOMEN PRODUCTS =====
        $womenProducts = [
            [
                'name' => 'Floral Summer Dress',
                'description' => 'Light and elegant floral summer dress. Perfect for warm days.',
                'price' => 899.00,
                'gender' => 'women',
                'category_id' => $womenDresses->id,
                'image' => 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=500',
            ],
            [
                'name' => 'Elegant Midi Dress',
                'description' => 'Sophisticated midi dress for evening occasions.',
                'price' => 1199.00,
                'gender' => 'women',
                'category_id' => $womenDresses->id,
                'image' => 'https://images.unsplash.com/photo-1496747611176-843222e1e57c?w=500',
            ],
            [
                'name' => 'Linen Crop Top',
                'description' => 'Breathable linen crop top, great for summer styling.',
                'price' => 399.00,
                'gender' => 'women',
                'category_id' => $womenTops->id,
                'image' => 'https://images.unsplash.com/photo-1554568218-0f1715e72254?w=500',
            ],
            [
                'name' => 'Off-Shoulder Blouse',
                'description' => 'Chic off-shoulder blouse with elegant draping.',
                'price' => 549.00,
                'gender' => 'women',
                'category_id' => $womenTops->id,
                'image' => 'https://images.unsplash.com/photo-1485462537746-965f33f33f85?w=500',
            ],
            [
                'name' => 'High-Waist Trousers',
                'description' => 'Modern high-waist trousers for a sharp, polished look.',
                'price' => 749.00,
                'gender' => 'women',
                'category_id' => $womenPants->id,
                'image' => 'https://images.unsplash.com/photo-1594938298603-c8148c4b4230?w=500',
            ],
            [
                'name' => 'Wide-Leg Jeans',
                'description' => 'Trendy wide-leg jeans. Comfortable and stylish.',
                'price' => 799.00,
                'gender' => 'women',
                'category_id' => $womenPants->id,
                'image' => 'https://images.unsplash.com/photo-1582418702059-97ebafb35d09?w=500',
            ],
        ];

        foreach ($menProducts as $p) {
            Product::create(array_merge($p, ['stock' => 30]));
        }
        foreach ($womenProducts as $p) {
            Product::create(array_merge($p, ['stock' => 30]));
        }
    }
}
