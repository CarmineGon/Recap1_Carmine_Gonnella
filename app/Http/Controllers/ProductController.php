<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('details');
    }

    /**
     * Display a listing of the resource.
     */
    public function shop()
    {
        $products= Product::all()->sortDesc();
        return view('shop', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product/create');
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Product::create(
        //     [
        //         'name' => $request -> input('name'),
        //         'description' => $request -> input('description'),
        //         'price' => $request -> input('price'),
        //         'img' => $request ->has('img') ? $request ->file('img')->store('public/products') : '/img/default.jpg',
        //         'user_id'=>Auth::user()->id
        //     ]
        // );
        Auth::user()->products()->create(
            [
                'name' => $request -> input('name'),
                'description' => $request -> input('description'),
                'price' => $request -> input('price'),
                'img' => $request ->has('img') ? $request ->file('img')->store('public/products') : '/img/default.jpg',
            ]
            );

            return redirect() -> route('shop');
    }

    public function detail($name)
    {
        $product = Product::where('name',$name)->first();
        return view('product/detail', compact('product'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        //
    }

    public function getProductByUser(User $user)
    {
        // $user = User::find($id); 
        // $products = $user -> products;
        return view('product/productUser', compact('user'));

    }
}
