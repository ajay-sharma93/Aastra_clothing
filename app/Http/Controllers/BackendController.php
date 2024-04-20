<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class BackendController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function product()
    {
        return view('admin.product');
    }
    public function saveProduct(Request $request)
    {
        Product::create([
            'ProductName' => $request->ProductName,
            'price' => $request->price,
            'Description' => $request->Description,
            'Image' => $request->Image,

        ]);
        return redirect()->back()->with('success', 'You have Successfully entered your product');
    }
}
