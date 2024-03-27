<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class ZakatController extends Controller
{
    public function calculate(Request $request)
    {
        // Validate the request data
        $request->validate([
            'gold' => 'required|numeric',
            'silver' => 'required|numeric',
            'cash' => 'required|numeric',
            'investments' => 'required|numeric',
        ]);

        // Retrieve input values from the request
        $gold = $request->input('gold');
        $silver = $request->input('silver');
        $cash = $request->input('cash');
        $investments = $request->input('investments');
        $totalAssets = $gold + $silver + $cash + $investments;
        $zakat = 0.025 * $totalAssets; 
        // Return the view with data
        return view('zakat')->with('totalAssets', $totalAssets)->with('zakat', $zakat);
    }
}