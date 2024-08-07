<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function cosmeticform()
    {
        return view('admin.cosmeticform');
    }


    public function saveProduct(Request $request)

    {
        // return $request;
        $image = Storage::disk('local')->put('public/product', $request->image1);
        $imageLocation = Storage::url($image);
        $product = Product::create([

            'ProductName' => $request->ProductName,
            'price' => $request->price,
            'Description' => $request->Description,
            'Image' => 'http://localhost:8000' . $imageLocation,
            'FeatureProduct' => $request->FeatureProduct,
            'Choose' => $request->Choose,

        ]);
        return redirect()->back()->with('success', 'You have Successfully entered your product');
    }
}
