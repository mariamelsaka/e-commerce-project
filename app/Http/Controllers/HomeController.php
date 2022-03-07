<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function getBriefView()
    {
        return view('home');
    }

    public function getIndex()
    {

        $categories = Category::orderBy('created_at', 'ASC')->take(10)->get();


        return view('home'
            , [

                'cats' => $categories,

            ]
        );
    }



}
