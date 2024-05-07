<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //akan mengarahkan ke route/web.php
    //untuk menampilkan halaman dashboard
    //beserta layoutnya
    public function index(){
        return view('admin.dashboard');
        //return di atas mengarahkan ke resources/views/admin
        //untuk akses dashboard.blade.php
    }
    public function laporan(){
        return view('dashboard/laporan');
    }
}
