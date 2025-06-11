<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;  // Pastikan menggunakan namespace Controller
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Menambahkan middleware admin ke controller
    }

    public function index()
    {
        // Menampilkan dashboard admin
        return view('admin.dashboard');
    }
}
