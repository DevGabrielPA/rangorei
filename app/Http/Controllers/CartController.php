<?php

// app/Http/Controllers/CartController.php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addProductToCart(Request $request, $productId)
    {
        $user = Auth::user();

        // Se o usuário não estiver logado, redireciona para login
        if (!$user) {
            return redirect()->route('login');
        }

        // Encontra o carrinho do usuário ou cria um novo
        $cart = $user->cart()->firstOrCreate();

        // Encontra o produto
        $product = Product::findOrFail($productId);

        // Verifica se o item já existe no carrinho
        $cartItem = $cart->items()->where('product_id', $product->id)->first();

        if ($cartItem) {
            // Se o item já existe no carrinho, incrementa a quantidade
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            // Se o item não existe no carrinho, adiciona-o
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $product->id,
                'quantity' => 1
            ]);
        }

        return redirect()->route('cart.show');
    }

    public function showCart()
    {
        $user = Auth::user();
        $cart = $user->cart()->first();

        // Carrega os itens do carrinho com o produto
        $cartItems = $cart ? $cart->items()->with('product')->get() : [];

        return view('cart.show', compact('cartItems'));
    }
}
