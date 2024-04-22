<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('Frontend_folder.index');
    }

    public function product()
    {
        $product = Product::all();
        return view('Frontend_folder.product', compact('product'));
    }

    public function cosmetic()
    {
        return view('Frontend_folder.cosmetic');
    }
    public function contact()
    {
        return view('Frontend_folder.contact');
    }
    public function sunglasses()
    {
        return view('Frontend_folder.sunglasses');
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
