<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
     public function index(){
        // $abouts=Abouts::all();
        $products=Products::paginate(1000);
        return view('home')
        ->with('products',$products);
    }
}
