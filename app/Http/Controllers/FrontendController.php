<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Cosmetic;
use App\Models\Product;
use App\Models\Product1;
use App\Models\productDetail;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        // $product = Product::all();
        return view('Frontend_folder.index');
    }

    public function product()
    {
        $product = Product::all();
        return view('Frontend_folder.product', compact('product'));
    }


    public function productDetail($product)
    {
        return $product;
        $productdetail = productDetail::where('cosmetic')->get();
        $productdetail = productDetail::where('category_id', 2)->get();
        return view('Frontend_folder.productDetail', compact('productDetail', 'cosmetic'));
    }

    public function cosmetic()

    {
        $product = Product::all();
        return view('Frontend_folder.cosmetic', compact('product'));
    }
    public function contact()
    {
        return view('Frontend_folder.contact');
    }
    public function sunglasses()
    {
        return view('Frontend_folder.sunglasses');
    }

    public function wishlist()
    {
        return view('Frontend_folder.wishlist');
    }

    public function cart()
    {
        return view('Frontend_folder.cart');
    }
    public function saveContact(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'number' => $request->number,
            'message' => $request->message,

        ]);
        return redirect()->back()->with('success', 'You have Successfully entered your message');
    }
}
