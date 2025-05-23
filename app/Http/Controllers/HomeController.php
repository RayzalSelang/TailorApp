<?php

namespace App\Http\Controllers;

use App\Models\WebSettings;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Function untuk menampilkan dashboard
    public function viewDashboard()
    {
        return view('admin.index');
    }

    public function viewWebSetting()
    {
        // Untuk mengirim data websetting ke view
        $webset = WebSettings::first();

        return view('admin.websettings.index', compact('webset'));
    }
}
