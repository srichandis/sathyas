<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed Signature Dishes
        $dishes = [
            [
                'name' => 'Bisibele Bath',
                'traditional_name' => 'ಬಿಸಿಬೇಳೆ ಭಾತ್',
                'category' => 'Main Course',
                'description' => 'A classic Karnataka delicacy made with rice, lentils, freshly roasted spices, tamarind, ghee, and select vegetables.',
                'ingredients' => ['Sona Masoori Rice', 'Toor Dal', 'Homemade Bisibelebath Powder', 'Pure Cow Ghee', 'Cashews', 'Drumstick & Carrots'],
                'image' => 'https://images.pexels.com/photos/6363501/pexels-photo-6363501.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_popular' => true,
                'sattvic_grade' => '100% Pure Sattvic (No Onion/Garlic)',
            ],
            [
                'name' => 'Puliyogare',
                'traditional_name' => 'ಪುಳಿಯೋಗರೆ',
                'category' => 'Main Course',
                'description' => 'Tangy temple-style tamarind rice prepared with hand-ground spicy pulikachal paste, sesame oil, and crunchy roasted peanuts.',
                'ingredients' => ['Tamarind Paste', 'Roasted Peanuts', 'Mustard Seeds', 'Curry Leaves', 'Sesame Oil', 'Jaggery', 'Chana Dal'],
                'image' => 'https://images.pexels.com/photos/4595312/pexels-photo-4595312.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_popular' => true,
                'sattvic_grade' => '100% Pure Sattvic (No Onion/Garlic)',
            ],
            [
                'name' => 'Pongal',
                'traditional_name' => 'ಖಾರ ಪೊಂಗಲ್ / ಸಕ್ಕರೆ ಪೊಂಗಲ್',
                'category' => 'Main Course',
                'description' => 'Comforting savory rice and moong dal porridge tempered with black pepper, cumin, ginger, curry leaves, and generous cow ghee.',
                'ingredients' => ['Raw Rice', 'Yellow Moong Dal', 'Crushed Black Pepper', 'Cumin Seeds', 'Cashew Nuts', 'Pure Ghee'],
                'image' => 'https://images.pexels.com/photos/20408455/pexels-photo-20408455.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_popular' => true,
                'sattvic_grade' => '100% Pure Sattvic (No Onion/Garlic)',
            ],
            [
                'name' => 'Majjige Huli',
                'traditional_name' => 'ಮಜ್ಜಿಗೆ ಹುಳಿ',
                'category' => 'Main Course',
                'description' => 'Traditional buttermilk curry infused with coconut, green chilies, cumin, and ash gourd (kumbalakai).',
                'ingredients' => ['Fresh Buttermilk', 'Grated Coconut', 'Ash Gourd', 'Green Chilies', 'Cumin', 'Fenugreek Seeds'],
                'image' => 'https://images.pexels.com/photos/8395780/pexels-photo-8395780.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_popular' => false,
                'sattvic_grade' => '100% Pure Sattvic (No Onion/Garlic)',
            ],
            [
                'name' => 'Kosambari',
                'traditional_name' => 'ಕೋಸಂಬರಿ',
                'category' => 'Accompaniments',
                'description' => 'Refreshing protein-rich salad made from soaked split moong dal, finely chopped cucumbers, fresh coconut, and lemon juice.',
                'ingredients' => ['Moong Dal', 'Fresh Cucumber', 'Grated Coconut', 'Lemon Juice', 'Mustard Tempering', 'Coriander'],
                'image' => 'https://images.pexels.com/photos/8996219/pexels-photo-8996219.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_popular' => false,
                'sattvic_grade' => '100% Pure Sattvic (No Onion/Garlic)',
            ],
            [
                'name' => 'Payasa',
                'traditional_name' => 'ಪಾಯಸ (ಹಯಗ್ರೀವ / ಶಾವಿಗೆ)',
                'category' => 'Sweets',
                'description' => 'Rich festive pudding prepared with cardamom-scented milk, jaggery or sugar, roasted vermicelli, cashews, and raisins.',
                'ingredients' => ['Whole Milk', 'Jaggery / Sugar', 'Cardamom Powder', 'Ghee-roasted Cashews', 'Saffron Strands', 'Chana Dal'],
                'image' => 'https://images.pexels.com/photos/33430555/pexels-photo-33430555.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_popular' => true,
                'sattvic_grade' => '100% Pure Sattvic (No Onion/Garlic)',
            ],
            [
                'name' => 'Holige / Obbattu',
                'traditional_name' => 'ಹೋಳಿಗೆ / ಒಬ್ಬಟ್ಟು',
                'category' => 'Sweets',
                'description' => 'Traditional sweet flatbread stuffed with sweet chana dal & jaggery (Kayi / Bele Holige), served piping hot with melted ghee.',
                'ingredients' => ['Chana Dal', 'Jaggery', 'Fine Maida / Wheat Flour', 'Cardamom', 'Pure Cow Ghee'],
                'image' => 'https://images.pexels.com/photos/7837973/pexels-photo-7837973.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_popular' => true,
                'sattvic_grade' => '100% Pure Sattvic (No Onion/Garlic)',
            ],
            [
                'name' => 'Mysore Pak',
                'traditional_name' => 'ಮೈಸೂರು ಪಾಕ್',
                'category' => 'Sweets',
                'description' => 'Melt-in-your-mouth royal sweet made with pure desi ghee, chickpea flour, and cardamom essence.',
                'ingredients' => ['Gram Flour (Besan)', 'Pure Desi Ghee', 'Sugar Syrup', 'Cardamom Essence'],
                'image' => 'https://images.pexels.com/photos/4763839/pexels-photo-4763839.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_popular' => true,
                'sattvic_grade' => '100% Pure Sattvic (No Onion/Garlic)',
            ],
        ];

        foreach ($dishes as $dish) {
            MenuItem::create($dish);
        }

        // Seed Testimonials
        $testimonials = [
            [
                'name' => 'Meena Narayan',
                'location' => 'Malleswaram, Bangalore',
                'comment' => 'The food reminded us of our grandmother\'s cooking. Every guest appreciated the authentic taste and warm hospitality.',
                'rating' => 5,
                'event' => 'Daughter\'s Wedding Feast',
                'date' => 'June 2026',
            ],
            [
                'name' => 'Raghavendra Sharma',
                'location' => 'Gokulam, Mysore',
                'comment' => 'Excellent service, punctual staff, and delicious traditional meals. Highly recommended for any religious ceremony!',
                'rating' => 5,
                'event' => 'Satyanarayana Vratha & Pooja',
                'date' => 'May 2026',
            ],
            [
                'name' => 'Srinivas Murthy',
                'location' => 'Jayanagar, Bangalore',
                'comment' => 'Flawless execution for 800+ guests! Hot Holige with cow ghee served on fresh banana leaves. Unmatched quality.',
                'rating' => 5,
                'event' => 'Upanayanam Ceremony',
                'date' => 'April 2026',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }

        // Seed the full catering menu (milkshakes, juices, sweets, traditional feast items, etc.)
        $this->call(MenuSeeder::class);
    }
}
