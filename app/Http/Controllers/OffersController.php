<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OffersController extends Controller
{
    public function index()
    {
        $offers = Offer::where('status', 'на рассмотрении')->get();
        return view('offers', compact('offers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'text' => 'required|string',
            'department' => 'required|string',
        ]);

        Offer::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'text' => $request->text,
            'department' => $request->department,
            'status' => 'на рассмотрении',
        ]);

        return redirect()->route('offers.index');
    }
}
