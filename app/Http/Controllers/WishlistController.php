<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use App\Models\Wishlists;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = Auth::user()->items()->with('image')->get();
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
        $wishlistItems = $user->items()->pluck('item_id')->toArray();

        if (empty($wishlistItems)) {
            return response()->json(['error' => 'No items in wishlist.'], 400);
        }

        if (!$this->hasCart()) {
            $this->createCart();
        }

        $cart = $user->cart()->where('status', 'active')->latest()->first();

        foreach ($wishlistItems as $itemId) {
            $existingCartItem = $cart->items()->where('item_id', $itemId)->first();

            if ($existingCartItem) {
                $cart->items()->updateExistingPivot($itemId, [
                    'quantity' => $existingCartItem->pivot->quantity + 1
                ]);
            } else {
                $cart->items()->attach($itemId, [
                    'quantity' => 1
                ]);
            }
        }

        $user->items()->detach();

        return response()->json(['success' => 'All items moved to cart successfully.']);
    }
    public function addwishSingle(string $id)
    {
        $userId = Auth::user()->id;
        $exists = Wishlists::where('item_id', $id)
            ->where('user_id', $userId)
            ->exists();

        if ($exists) {
            return redirect()->back()->with(['info' => 'Item already in wishlist']);
        }

        Wishlists::create([
            'item_id' => $id,
            'user_id' => $userId
        ]);

        return redirect()->back()->with(['success' => 'Added successfully']);
    }

    private function hasCart(): bool
    {
        if (Auth::user()->cart()->where('status', 'active')->exists()) {
            return true;
        }
        return false;
    }
    private function createCart()
    {
        Cart::create([
            "user_id" => Auth::id(),
            "status" => "active",
        ]);
    }
}
