<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getHomePage() {
        return view('admin/home');
    }
    
    public function getPortfolioPage() {
        return view('admin/portfolio');
    }

    public function selectPortfolio() {
        $portfolio = DB::select('SELECT * FROM tblportfolio');
        
    }

}
