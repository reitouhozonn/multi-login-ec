<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:users');

        // $this->middleware(function ($request, $next) {
        //     $id = $request->route()->parameter('shop');
        //     if (!is_null($id)) {
        //         $shopOwnerId = Shop::findOrFail($id)->owner->id;
        //         $shopId = (int)$shopOwnerId;
        //         $ownerId = Auth::id();
        //         if ($shopId !== $ownerId) {
        //             abort(404);
        //         }
        //     }
        //     return $next($request);
        // });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = DB::table('t_stocks')
            ->select(
                'product_id',
                DB::raw('sum(quantity) as quantity')
            )
            ->groupBy('product_id')
            ->having('quantity', '>', 1);

        $products = DB::table('products')
            ->joinSub($stocks, 'stock', function ($join) {
                $join->on('products.id', '=', 'stock.product_id');
            })
            ->join('shops', 'products.shop_id', '=', 'shops.id')
            ->join('secondary_categories', 'products.secondary_category_id', '=', 'secondary_categories.id')
            ->join('images as image1', 'products.image1', '=', 'image1.id')
            ->join('images as image2', 'products.image2', '=', 'image2.id')
            ->join('images as image3', 'products.image3', '=', 'image3.id')
            ->join('images as image4', 'products.image4', '=', 'image4.id')
            ->where('shops.is_selling', true)
            ->where('products.is_selling', true)
            ->select(
                'products.id as id',
                'products.name as name',
                'products.price',
                'products.sort_order as sort_order',
                'products.information',
                'secondary_categories.name as category',
                'image1.filename as filename',
            )
            ->get();

        // dd($products);
        // $products = Product::all();

        return view(
            'user.index',
            compact('products')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $p = new Product();
        // $p->sum('')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view(
            'user.show',
            compact('product')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
