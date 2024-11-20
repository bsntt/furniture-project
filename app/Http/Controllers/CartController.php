<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    // View the shopping cart
    public function index()
    {
        return view('cart.index');
    }

    // Add an item to the cart
    // public function add(Request $request)
    // {
    //     $product = $request->product; // Get product info (id, price, etc.)
    //     $cart = session()->get('cart', []);
        
    //     if (isset($cart[$product['id']])) {
    //         // If the product is already in the cart, increment the quantity
    //         $cart[$product['id']]['quantity']++;
    //     } else {
    //         // Otherwise, add the product to the cart
    //         $cart[$product['id']] = [
    //             'name' => $product['name'],
    //             'price' => $product['price'],
    //             'quantity' => 1,
    //         ];
    //     }
        
    //     session()->put('cart', $cart);

    //     return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    // }

    // Remove an item from the cart
    // public function remove($id)
    // {
    //     $cart = session()->get('cart', []);
        
    //     if (isset($cart[$id])) {
    //         unset($cart[$id]);
    //         session()->put('cart', $cart);
    //     }

    //     return redirect()->route('cart.index')->with('success', 'Product removed from cart!');
    // }
}

