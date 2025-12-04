<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');
        
        $products = [
            [
                'id' => 1,
                'name' => 'Tenda Kapasitas 4 Orang',
                'category' => 'Tenda',
                'price' => 850000,
                'stock' => 15,
                'description' => 'Waterproof'
            ],
            [
                'id' => 2,
                'name' => 'Sleeping Bag',
                'category' => 'Sleeping Bag',
                'price' => 250000,
                'stock' => 30,
                'description' => 'Sleeping bag hangat'
            ],
            [
                'id' => 3,
                'name' => 'Carrier 60L',
                'category' => 'Tas Carrier',
                'price' => 650000,
                'stock' => 20,
                'description' => 'Rain cover'
            ],
            [
                'id' => 4,
                'name' => 'Kompor Portable',
                'category' => 'Peralatan Masak',
                'price' => 180000,
                'stock' => 25,
                'description' => 'Dengan gas'
            ],
            [
                'id' => 5,
                'name' => 'Headlamp LED',
                'category' => 'Penerangan',
                'price' => 120000,
                'stock' => 40,
                'description' => 'Dengan baterai'
            ],
            [
                'id' => 6,
                'name' => 'Matras Camping',
                'category' => 'Matras',
                'price' => 150000,
                'stock' => 35,
                'description' => 'Anti air'
            ]
        ];

        return view('pengelolaan', compact('products', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }
}