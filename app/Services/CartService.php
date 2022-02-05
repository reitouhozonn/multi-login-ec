<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\Product;
use DB;

class CartService
{
    public static function getItemInCart($items)
    {
        $products = [];

        foreach ($items as $item) {
            $p = DB::table('products')->where('id', $item->product_id)->value('shop_id');
            $s = DB::table('shops')->where('id', $p)->value('owner_id');
            $ownerName = DB::table('owners')->where('id', $s)->value('name');
            $email = DB::table('owners')->where('id', $s)->value('email');
            $ownerInfo = compact('ownerName', 'email');

            $product = Product::where('id', $item->product_id)
                ->select('id', 'name', 'price')->get()->toArray();

            $quantity = Cart::where('product_id', $item->product_id)
                ->select('quantity')->get()->toArray();

            $result = array_merge($product[0], $ownerInfo, $quantity[0]);

            array_push($products, $result);
        }

        return $products;
    }
}
