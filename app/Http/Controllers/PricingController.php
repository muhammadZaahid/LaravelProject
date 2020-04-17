<?php

namespace App\Http\Controllers;

use App\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('pricing.index');
        $pricing=Pricing::all();
        return view('pricing.index', ['pricing' => $pricing]);
    }
}
