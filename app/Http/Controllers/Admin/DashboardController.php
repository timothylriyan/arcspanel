<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Feature; 
use App\Models\News;
use App\Models\Recruitment; 
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah data dari setiap model
        $serviceCount = Service::count();
        $clientCount = Client::count();
        $newsCount = News::count();
        $userCount = User::count();
        $featureCount = Feature::count(); 
        $recruitmentCount = Recruitment::count(); 

        $userName = Auth::user()->name;

        // Kirim semua data ke view
        return view('admin.dashboard.index', compact(
            'serviceCount',
            'clientCount',
            'newsCount',
            'userCount',
            'featureCount', 
            'recruitmentCount', 
            'userName'
        ));
    }
}