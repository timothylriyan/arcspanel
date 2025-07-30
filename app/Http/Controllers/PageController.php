<?php

namespace App\Http\Controllers;

// Import semua model yang kita butuhkan
use App\Models\Client;
use App\Models\AboutContent;
use App\Models\Feature;
use App\Models\News;
use App\Models\Recruitment;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // Ambil data dari masing-masing model
        $features = Feature::orderBy('position', 'asc')->get();
        $clients = Client::latest()->get();
        $services = Service::latest()->get();
        $settings = Setting::pluck('value', 'key')->all();
        $aboutContent = AboutContent::first();
     
        return view('home', compact('features', 'clients', 'services', 'settings', 'aboutContent'));
    }

    public function recruitment()
    {
        
        $recruitments = Recruitment::where('is_active', true)->latest()->get();
        
        
        return view('recruitment', compact('recruitments'));
    }

    public function news()
    {
        $news = News::where('is_published', true)->latest()->paginate(3);
        return view('news.index', compact('news'));
    }

    public function newsDetail($slug)
    {
        $newsItem = News::where('slug', $slug)->firstOrFail();
        return view('news.show', compact('newsItem'));
    }

    public function services()
    {
        $services = Service::with('details')->latest()->get();
        return view('services.index', compact('services'));
    }



    // ... (method-method lain untuk halaman services, news, dll.)
}