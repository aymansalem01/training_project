<?php

namespace App\Http\Controllers;

use App\Models\Wishlists;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = Auth::user()->items()->get();
        $products = Item::withCount('review')
            ->orderByDesc('review_count')
            ->limit(4)
            ->get();
        return view('user.wishlist', ['wishlist' => $wishlist, 'products' => $products]);
    }
    public function addwish(Request $request)
    {

        $user = auth()->user();

        $exists = $user->items()->where('item_id', $request->itemId)->exists();
        if ($exists) {
            return response()->json([
                'message' => 'Item already in wishlist',
            ]);
        }

        $user->items()->create([
            'user_id' => Auth::user()->id,
            'item_id' => $request->itemId
        ]);

        return response()->json([
            'message' => 'Item added to wishlist successfully',
        ]);
    }
    public function deletewish(Request $request)
    {
        $itemId = $request->input('itemId');

        $user = auth()->user();

        $user->items()->detach($itemId);

        return response()->json(['message' => 'Item successfully removed from wishlist.']);
    }

    public function moveAllToCart()
    {
        $user = auth()->user();

        $wishlistItems = $user->items()->pluck('items_id')->toArray();

        if (empty($wishlistItems)) {
            return response()->json(['error' => 'No items in wishlist.'], 400);
        }

        $user->cart()->syncWithoutDetaching($wishlistItems);

        $user->items()->detach($wishlistItems);

        return redirect()->back()->with(['success' => 'All items moved to cart successfully.']);
    }
}
