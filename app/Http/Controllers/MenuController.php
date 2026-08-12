<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;

class MenuController extends Controller
{
    public function index()
    {
        $categories = [
            'Milkshakes' => ['emoji' => '🥤', 'subtitle' => 'Thick, creamy & freshly blended', 'kannada' => null],
            'Fresh Fruit Juices' => ['emoji' => '🍹', 'subtitle' => 'Pressed fresh, never from concentrate', 'kannada' => null],
            'Fresh Fruit Fusion' => ['emoji' => '🍸', 'subtitle' => 'Refreshing coolers & punch blends', 'kannada' => null],
            'Coffee' => ['emoji' => '☕', 'subtitle' => 'Slow-brewed, rich & aromatic', 'kannada' => null],
            'Hot Drinks' => ['emoji' => '🔥', 'subtitle' => 'Warm comfort in every cup', 'kannada' => null],
            'Hot Kashaya' => ['emoji' => '🌿', 'subtitle' => 'Herbal wellness brews, the traditional way', 'kannada' => null],
            'Lassi' => ['emoji' => '🥛', 'subtitle' => 'Cooling, cultured & creamy', 'kannada' => null],
            'Special Variety Juices' => ['emoji' => '✨', 'subtitle' => 'Signature shakes & showstoppers', 'kannada' => null],
            'Soups' => ['emoji' => '🍲', 'subtitle' => 'Slow-simmered & soulful', 'kannada' => null],
            'Chats' => ['emoji' => '🥗', 'subtitle' => 'Street-style chaat favourites', 'kannada' => null],
            'Holige' => ['emoji' => '🫓', 'subtitle' => 'Sweet stuffed flatbreads with pure ghee', 'kannada' => null],
            'South Indian Sweets' => ['emoji' => '🍬', 'subtitle' => 'Festive classics made in-house', 'kannada' => null],
            'Payasa' => ['emoji' => '🥣', 'subtitle' => 'Kheer & festive milk puddings', 'kannada' => 'ಪಾಯಸ'],
            'Pickles' => ['emoji' => '🫙', 'subtitle' => 'Sun-cured homemade preserves', 'kannada' => 'ಉಪ್ಪಿನಕಾಯಿ'],
            'Kosambari' => ['emoji' => '🥒', 'subtitle' => 'Fresh lentil salads, light & cooling', 'kannada' => 'ಕೋಸಂಬರಿ'],
            'Palya' => ['emoji' => '🥬', 'subtitle' => 'Seasoned stir-fried vegetables', 'kannada' => 'ಪಲ್ಯ'],
            'Bath' => ['emoji' => '🍚', 'subtitle' => 'Signature rice preparations', 'kannada' => 'ಬಾತ್'],
            'Tove' => ['emoji' => '🫘', 'subtitle' => 'Slow-cooked lentil dals', 'kannada' => 'ತೊವೆ'],
            'Happala' => ['emoji' => '🍘', 'subtitle' => 'Crisp, golden papads', 'kannada' => 'ಹಪ್ಪಳ'],
            'Sandige' => ['emoji' => '🥨', 'subtitle' => 'Crunchy fried savouries', 'kannada' => 'ಸಂಡಿಗೆ'],
            'Huli' => ['emoji' => '🍛', 'subtitle' => 'Traditional curries, simmered to perfection', 'kannada' => 'ಹುಳಿ'],
            'Saaru' => ['emoji' => '🍵', 'subtitle' => 'Aromatic rasam-style broths', 'kannada' => 'ಸಾರು'],
            'Tambuli' => ['emoji' => '🍃', 'subtitle' => 'Cooling herb & buttermilk blends', 'kannada' => 'ತಂಬುಳಿ'],
            'Khara' => ['emoji' => '🌶️', 'subtitle' => 'Spiced fritters & savoury bites', 'kannada' => 'ಖಾರ'],
            'Bengali Sweets' => ['emoji' => '🍮', 'subtitle' => 'Milk-based Bengali delicacies', 'kannada' => null],
            'Indian Breads' => ['emoji' => '🍞', 'subtitle' => 'Fresh from the tawa', 'kannada' => null],
            'Dosa & Idly' => ['emoji' => '🥞', 'subtitle' => 'Crisp dosas & fluffy idlis', 'kannada' => null],
            'Roti' => ['emoji' => '🌾', 'subtitle' => 'Hand-stretched, soft & pillowy', 'kannada' => null],
            'North Indian Side Dishes' => ['emoji' => '🥘', 'subtitle' => 'Rich gravies & curries', 'kannada' => null],
        ];

        $items = MenuItem::all();

        $menu = collect($categories)->mapWithKeys(fn ($meta, $cat) => [
            $cat => $items->where('category', $cat)->values(),
        ])->reject(fn ($group) => $group->isEmpty());

        $totalItems = $menu->sum(fn ($group) => $group->count());
        $totalCategories = $menu->count();

        $menuJson = $menu->map(fn ($group, $cat) => [
            'category' => $cat,
            'items' => $group->map(fn ($item) => [
                'name' => $item->name,
                'trad' => $item->traditional_name,
            ])->values(),
        ])->values();

        return view('menu.index', compact(
            'categories',
            'menu',
            'totalItems',
            'totalCategories',
            'menuJson'
        ));
    }
}
