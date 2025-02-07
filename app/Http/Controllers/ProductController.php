<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Toont een lijst van producten
    public function index()
    {
        $products = Product::all();
        return view('welcome', compact('products'));  // Hiermee wordt de homepagina weergegeven
    }

    // Toon het formulier om een product toe te voegen
    public function create()
    {
        return view('products.create');
    }

    // Sla het nieuwe product op
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image_url' => 'nullable|url',
            'stock' => 'required|integer',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index');
    }
}

