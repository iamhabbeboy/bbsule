<?php
namespace App\Http\Controllers;

use App\Gallery;
use App\Testimony;

class IndexController extends Controller
{
    public function index(Gallery $gallery)
    {
        // echo "Hello world !";
        $galleries = $gallery->whereNotNull('caption')->where('upload_type', 'gallery')
        ->orWhereNull('upload_type')->get();
        return view('gallery', compact('galleries'));
    }

    public function home(Testimony $testimony)
    {
        $testimonies = $testimony->whereNotNull('testimony')
            ->orderByRaw('RAND()')->limit(2)->get();
        return view('index', compact('testimonies'));
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
