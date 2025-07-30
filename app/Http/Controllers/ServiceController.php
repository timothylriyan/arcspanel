<?php

namespace App\Http\Controllers;

// use App\Models\Service; // Tidak perlu lagi untuk sementara
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Langsung tampilkan view karena data sudah statis
        return view('services.index');
    }
}
