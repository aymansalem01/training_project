<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart_items;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        if (!$this->hasCart()) {
            $this->createCart();
        }

        $cart = Cart::where('user_id', Auth::id())
            ->where('status', 'active')
            ->with('items')
            ->first();

        $total_price = 0;

        if ($cart && $cart->items) {
            foreach ($cart->items as $item) {
                $total_price += $item->price * $item->pivot->quantity;
            }
        }

        return view('user.cart', compact(['cart', 'total_price']));
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

    public function addItem(Request $request)
    {
        $user = Auth::user();
        if (!$this->hasCart()) {
            $this->createCart();
        }
        $cart = $user->cart()->where('status', 'active')->latest()->first();
        $itemId = $request->post("itemId");
        $existingItem = Cart_items::where('cart_id', $cart->id)
            ->where('item_id', $itemId)
            ->first();
        if ($existingItem) {
            $existingItem->increment('quantity');
        } else {
            Cart_items::create([
                'cart_id' => $cart->id,
                'item_id' => $itemId,
                'quantity' => 1,
            ]);
        }
        return response()->json([
            'message' => 'Item added to cart successfully',
        ]);
    }
    public function update(string $id, Request $request)
    {
        $cart = Cart::with('items')->find($id);

        foreach ($request->quantities as $itemId => $quantity) {
            if ($cart->items->contains($itemId)) {
                $cart->items()->updateExistingPivot($itemId, ['quantity' => $quantity]);
            }
        }

        return redirect()->back()->with('success', 'Cart updated successfully.');
    }
    public function deleteItem(Request $request)
    {
        $user = Auth::user();

        $cart = $user->cart()
        ->where('status','active')
        ->latest()
        ->first();

        $item = Cart_items::where('cart_id', $cart->id)
            ->where('item_id', $request->itemId)
            ->first();

        $item->delete();

        return $this->index();
    }
    public function addFormSingle(Request $request, string $id)
    {
        $user = Auth::user();

        if (!$this->hasCart()) {
            $this->createCart();
        }

        $cart = $user->cart()->where('status', 'active')->latest()->first();

        $item = $cart->items()->where('item_id', $id)->first();

        if ($item) {
            $cart->items()->updateExistingPivot($id, [
                'quantity' => $item->pivot->quantity + $request->quantity
            ]);
        } else {
            Cart_items::create([
                'cart_id' => $cart->id,
                'item_id' => $id,
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->back()->with(['message' => 'Item added to cart successfully']);
    }

}
