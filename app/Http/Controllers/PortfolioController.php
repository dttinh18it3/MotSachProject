<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function getPortfolio() {
        return view('admin/portfolio');
    }

    public function selectPortfolio() {
        $portfolio = DB::select('SELECT * FROM tblportfolio');
    }

}
