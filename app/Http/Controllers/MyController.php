<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class MyController extends Controller
{
    // gọi trang chủ
    public function getHomePage() {
        return view('admin/home');
    }
    // gọi trang danh mục
    public function getPortfolioPage() {
        $portfolios = Portfolio::all();
        return view('admin/portfolio', compact('portfolios'));
    }
    
    public function AddPortfolio() {
        return view('admin/addPortfolio');
    }

}
