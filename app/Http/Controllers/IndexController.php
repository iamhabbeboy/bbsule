<?php
namespace App\Http\Controllers;

use App\Gallery;

class IndexController extends Controller
{
    public function index(Gallery $gallery)
    {
        // echo "Hello world !";
        $galleries = $gallery->whereNotNull('caption')->get();
        return view('gallery', compact('galleries'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
