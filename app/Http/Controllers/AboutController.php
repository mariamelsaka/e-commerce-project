<?php
namespace App\Http\Controllers;
use function GuzzleHttp\Promise\all;

class AboutController extends Controller
{
    //


    public function getAboutView(){

        return view('about');
    }

}
