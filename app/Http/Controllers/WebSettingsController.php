<?php

namespace App\Http\Controllers;

use App\Models\WebSettings;
use Illuminate\Http\Request;

class WebSettingsController extends Controller
{
    public function updateWebSettings(Request $request)
    {
        // Untuk validasi input dari form
        $request->validate([
            'website_name' => 'required|string',
            'website_url' => 'required|string',
            'tripay_mode' => 'required|string',
            'tripay_kode' => 'required|string',
            'tripay_api' => 'required|string',
            'tripay_private' => 'required|string',
        ]);

        try {
            $webset = WebSettings::first();
            // Melakukan update data websettings
            $webset->update([
                'website_name' => $request->website_name,
                'website_url' => $request->website_url,
                'tripay_mode' => $request->tripay_mode,
                'tripay_kode' => $request->tripay_kode,
                'tripay_api' => $request->tripay_api,
                'tripay_private' => $request->tripay_private,
            ]);

            return redirect()->back()->with('success', 'Berhasil mengupdate data websettings');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal mengupdate data websettings');
        }
    }
}
